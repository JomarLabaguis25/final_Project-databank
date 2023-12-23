<?php

namespace App\Controllers;
use CodeIgniter\RestFul\ResourceController;
use App\Models\InquireModel;
use CodeIgniter\HTTP\Response;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class InquireController extends ResourceController
{
    public function index()
    {
        //
    }
    public function submitForm()
    {
        $formData = $this->request->getPost();

        // Validate form data if necessary
        // $validation = \Config\Services::validation();
        // $validation->run($formData, 'your_validation_rules');

        // Insert form data into the database using a model
        $inquireModel = new InquireModel();
        $inquireModel->insert($formData);

        // You can return a success message or any other response if needed
        return $this->respond(['message' => 'Form data submitted successfully'], 200);
    }
    public function getInquire()
    {
        $main = new InquireModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
}
