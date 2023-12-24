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
    //
    public function updateProfilePicture()
{
    $userId = $this->request->getVar('userId'); // Get the user ID from the request

    // Check if a file was uploaded
    if ($this->request->getFile('image')) {
        $userModel = new RegAccModel();

        // Retrieve the uploaded image file
        $uploadedFile = $this->request->getFile('image');

        // Check if the file is valid
        if ($uploadedFile->isValid()) {
            // File was uploaded, proceed with processing
            $imageName = $uploadedFile->getRandomName();

            // Move the uploaded image to the 'public/uploads/' directory
            $uploadedFile->move(ROOTPATH . 'public/uploads/', $imageName);

            // Update the user's profile picture in the database
            $userModel->update($userId, ['ProfilePicture' => base_url('uploads/' . $imageName)]);

            // Provide a success response
            return $this->respond(['status' => 'success', 'msg' => 'Profile picture updated successfully', 'path' => base_url('uploads/' . $imageName)]);
        } else {
            // Invalid file
            return $this->respond(['status' => 'error', 'msg' => 'Invalid file uploaded'], 400);
        }
    } else {
        // No file uploaded
        return $this->respond(['status' => 'error', 'msg' => 'No file uploaded'], 400);
    }
}

    //
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
