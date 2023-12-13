<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\RegAccModel;

class RegAccController extends ResourceController
{
    public function index()
    {
        //
    }
    public function getAccount()
    {
        $main = new RegAccModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function del(){
        $json = $this->request->getJSON();
        $id = $json->id;
        $regaccModel = new RegAccModel();
        $r = $regaccModel->delete($id);
        return $this->respond($r, 200);

    }
    use ResponseTrait;

    public function updateProfile($id)
    {
        $requestData = $this->request->getJson();

        // Update the profile in the database
        $regaccModel = new RegAccModel();
        $updatedData = [
            'Fullname' => $requestData->Fullname,
            'IDNumber' => $requestData->IDNum,
        ];

        $regaccModel->update($id, $updatedData);

        return $this->respond(['message' => 'Profile updated successfully'], 200);
    }
}
