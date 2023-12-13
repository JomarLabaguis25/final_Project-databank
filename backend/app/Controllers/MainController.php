<?php

namespace App\Controllers;
use Illuminate\Http\Request;
use App\Controllers\BaseController;
use App\Models\DisciplineModel;
use App\Models\InquireModel;
use App\Models\HandbookModel;
use App\Models\PayrollModel;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MainModel;
use App\Models\FormModel;
use App\Models\ScholarModel;



class MainController extends ResourceController
{
    protected $main;

    public function getWebInfo(){
        $job = new MainModel();
        $data = $job->find(1);
        return $this->respond($data, 200);
    }
    public function getInquire(){
        $job = new InquireModel();
        $data = $job->findAll();
        return $this->respond($data, 200);
    }
    public function index()
    {
        //
    }
    public function getWeb()
    {
        $main = new MainModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function getDis(){
        $job = new DisciplineModel();
        $data = $job->find(1);
        return $this->respond($data, 200);
    }
    public function getHandbook($Handbook_id)
    {
        $model = new HandbookModel();
        $data = $model->where('Handbook_id',$Handbook_id)->findAll();
        return $this->respond($data, 200);
    }
    public function getscholar(){
        $scholar = new ScholarModel();
        $data = $scholar->findAll();
        return $this->respond($data, 200);
    }
    public function del(){
        $json = $this->request->getJSON();
        $id = $json->id;
        $regaccModel = new ScholarModel();
        $r = $regaccModel->delete($id);
        return $this->respond($r, 200);

    }
    use ResponseTrait;

    // Method to handle task updates
    public function updateData($id = null)
    {
        $disciplineModel = new DisciplineModel();

        // Get the updated information from the request body
        $updatedInfo = $this->request->getJSON();

        try {
            // Update the discipline information in the database
            $updated = $disciplineModel->update($id, $updatedInfo);

            if ($updated) {
                // If the discipline is successfully updated, return a success response
                return $this->respondUpdated($updatedInfo);
            } else {
                // If the discipline update fails, return an error response
                return $this->failNotFound('Task not found');
            }
        } catch (\Exception $e) {
            // If an exception occurs, return an error response
            return $this->failServerError('Failed to update task: ' . $e->getMessage());
        }
    }
    public function searchByIdNumber($idNumber) {
        // Call the model function to search for the idnumber in the table
        $result = $this->InfoModel->searchByIdNumber($idNumber); // Replace 'your_model_name' with the actual name of your model function

        if ($result) {
            // Handle the found data, for example, load a view with the result
            $data['search_result'] = $result;
            $this->load->view('search_result_view', $data); // Replace 'search_result_view' with the name of your view
        } else {
            // Handle case where no data is found
            echo "No records found for the provided ID number.";
        }
    }

    public function getPay(){
        $pay = new PayrollModel();
        $data = $pay->findAll();
        return $this->respond($data, 200);
    }
    private $payModel;
private $scholarModel;

    public function __construct() {
        // Assuming PayModel is already connected to the database
        $this->payModel = new PayrollModel();
        $this->scholarModel = new ScholarModel();

    }

    public function insertScholar() {
        $json = $this->request;

        $data = [
            'id' => $json->getVar('id'),
            'Sname' => $json->getVar('Sname'),
            'location' => $json->getVar('location'),
            'date' => $json->getVar('date'),
            'status' => $json->getVar('status'),
        ];

        $u = $this->payModel->save($data);

        if ($u) {
            return $this->respond(['msg' => 'Inserted Successfully']);
        } else {
            return $this->fail(['msg' => 'Error occurred']);
        }
    }

    public function addScholar() {
        $json = $this->request;

        $data = [
            'id' => $json->getVar('id'),
            'stud_id' => $json->getVar('stud_id'),
            'full_name' => $json->getVar('full_name'),
            'year_section' => $json->getVar('year_section'),
            'college' => $json->getVar('college'),
            'cp' => $json->getVar('cp'),
            'email' => $json->getVar('email'),
            'scholar' => $json->getVar('scholar'),
        ];

        $u = $this->scholarModel->save($data);

        if ($u) {
            return $this->respond(['msg' => 'Inserted Successfully']);
        } else {
            return $this->fail(['msg' => 'Error occurred']);
        }
    }
}
