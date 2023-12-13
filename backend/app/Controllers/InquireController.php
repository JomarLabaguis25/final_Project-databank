<?php

namespace App\Controllers;
use CodeIgniter\RestFul\ResourceController;
use App\Models\InquireModel;
use CodeIgniter\HTTP\Response;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class InquireController extends ResourceController
{
    /*public function index()
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
    public function data()
    {
        // Load your model
        $model = new InquireModel(); // Replace 'YourModel' with your actual model name

        // Get data from the database
        $data['tableData'] = $model->findAll(); // Change this according to your model method

        // Pass the data to the view
        return view('inquireTable', $data); // Replace 'your_view' with your actual view name
    }*/
    public function getAllInfo()
    {
        $inquireModel = new IquireModel();
        $data = $inquireModel->findAll();

        return $this->respond($data, Response::HTTP_OK);
    }

    // Function to update info data
    public function updateInfo($id)
    {
        // Logic to update info data based on the given ID
        // You'll need to receive and handle the updated data here

        // Sample code to retrieve the updated data from the request
        $request = $this->request->getJSON();
        $updatedData = [
            'name' => $request->name,
            'email' => $request->email,
            'year_graduated' => $request->year_graduated,
            'address' => $request->address,
            'letter' => $request->letter,
            // Add more fields as required
        ];

        $inquireModel = new IquireModel();
        $inquireModel->update($id, $updatedData);
        return $this->respond(['message' => 'Info updated successfully'], Response::HTTP_OK);
    }
    // Function to delete info data
    public function deleteInfo($id)
    {
        $inquireModel = new IquireModel();
        $inquireModel->delete($id);

        return $this->respond(['message' => 'Info deleted successfully'], Response::HTTP_OK);
    }
    public function insertFormData()
    {
        // Load the model
        $formInquireModel = new FormInquireModel();

        // Get form data from POST request
        $formData = $this->request->getPost();

        // Insert data into the database
        $formInquireModel->insert($formData);
        
        return redirect()->to('job_Details');
    }
}
