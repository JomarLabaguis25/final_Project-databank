<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrgFormModel;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;



class FormController extends ResourceController
{
    public function index()
{
    // Your index method implementation
}

public function Orgregister()
{
    $json = $this->request;
    $IDNum = $json->getVar('IDNum');
    $OrgName = $json->getVar('OrgName'); // Assuming OrgName is the field name

    // Check if OrgName is provided
    if (empty($OrgName)) {
        return $this->fail(["error" => "OrgName is required"], 400);
    }

    $orgformModel = new OrgFormModel();
    $token = $this->verification(50);
    $exUser = $orgformModel->where('IDNum', $IDNum)->first();

    if ($exUser) {
        return $this->fail(["error" => "ID Num already exists"], 400);
    } else {
        $password = $json->getVar('password');

        if (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
            return $this->fail(["error" => "Password must contain at least one letter, one number, and one character"], 400);
        }

        $data = [
            'Fullname' => $json->getVar('name'),
            'IDNum' => $IDNum,
            'OrgName' => $OrgName,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'token' => $token,
        ];

        $u = $orgformModel->save($data);

        if ($u) {
            return $this->respond(['msg' => 'Registered Successfully', 'token' => $token]);
        } else {
            return $this->fail(['msg' => 'Error occurred']);
        }
    }
}

public function Orgverification($length)
{
    return bin2hex(random_bytes($length));
}

public function Orglogin()
{
    $json = $this->request->getJSON();

    if (isset($json->IDNum) && isset($json->password) && isset($json->OrgName)) {
        $IDNum = $json->IDNum;
        $password = $json->password;
        $OrgName = $json->OrgName;

        $orgformModel = new OrgFormModel();
        $data = $orgformModel->where('IDNum', $IDNum)->where('OrgName', $OrgName)->first();

        if ($data) {
            $pass = $data['password'];
            $auth = password_verify($password, $pass);
            if ($auth) {
                return $this->respond(['message' => 'Login successful', 'token' => $data['token'], 'id' => $data['id']], 200);
            } else {
                return $this->respond('Incorrect password', 401);
            }
        } else {
            return $this->respond('Invalid IDNum, OrgName, or password', 404);
        }
    } else {
        return $this->respond('Invalid JSON data. IDNum, password, and OrgName are required', 400);
    }
}

}

?>


