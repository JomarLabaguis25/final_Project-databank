<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FormModel;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;



class FormController extends ResourceController
{
    public function index()
    {
        //
    }
    public function register()
{
    $json = $this->request;
    $IDNum = $json->getVar('IDNum');

    $formModel = new FormModel();
    $token = $this->verification(50);
    $exUser = $formModel->where('IDNum', $IDNum)->first();

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
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'token' => $token,
        ];
            // $data = [
            //     'Fullname' => 1,
            //     'IDNum' =>3,
            //     'password' => password_hash('1@df124D', PASSWORD_BCRYPT),
            //     'token' => $token,
            // ];
        $u = $formModel->save($data);

        if ($u) {
            return $this->respond(['msg' => 'Registered Successfully', 'token' => $token]);
        } else {
            return $this->fail(['msg' => 'Error occurred']);
        }
    }
}
// Your verification method
public function verification($length)

    return bin2hex(random_bytes($length));
}
public function login()
    {
        $json = $this->request->getJSON();

        if (isset($json->IDNum) && isset($json->password)) {
            $IDNum = $json->IDNum;
            $password = $json->password;

            $formModel = new FormModel();
            $data = $formModel->where('IDNum', $IDNum)->first();
            if ($data) {
                $pass = $data['password'];
                $auth = password_verify($password, $pass);
                if ($auth){
                        return $this->respond(['message' => 'Login successful',  'token' => $data['token'], 'id' => $data['id']], 200);
                } else {
                    return $this->respond( 'Incorrect password', 401);
                }
            } else {
                return $this->respond('IDNum not registered. Please sign up.', 404);
            }
        } else {
            return $this->respond('Invalid JSON data', 400);
        }
    }
}
?>


