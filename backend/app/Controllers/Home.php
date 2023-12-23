<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PayModel;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;



class FormController extends ResourceController
{
    public function getPay()
    {
        $main = new PayModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
}
