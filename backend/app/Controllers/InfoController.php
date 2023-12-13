<?php

namespace App\Controllers;
use CodeIgniter\HTTP\Response;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\InfoModel;
use App\Controllers\BaseController;

class InfoController extends ResourceController
{
    public function index()
    {
        //
    }
    public function getInfos(){
        $job = new InfoModel();
        $data = $job->findAll();
        return $this->respond($data, 200);
    }
}
