<?php

namespace App\Controllers;
use CodeIgniter\RestFul\ResourceController;
use App\Models\InquireModel;
use CodeIgniter\HTTP\Response;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;


class InqueriesController extends BaseController
{
    public function submitForm()
    {
        // Fetch form data
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $address = $this->request->getPost('address');
        $yearGraduated = $this->request->getPost('yearGraduated');
        $coverLetter = $this->request->getPost('coverLetter');

        // Now, you can process this data as needed - like saving to a database or performing validations.

        // For example, you might want to save it to a database
        $InqueriesModel = new \App\Models\InqueriesModel();
        //Assuming you have a model named JobApplicationModel:
        $InqueriesModel->save([
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'year_graduated' => $yearGraduated,
            'cover_letter' => $coverLetter
        ]);

        // You can also redirect or display a success message after processing the data
        return redirect()->to('/success-page');
    }
}
