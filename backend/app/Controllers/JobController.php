<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

namespace App\Controllers;
use App\Models\RegAccModel;
use CodeIgniter\RestFul\ResourceController;
use App\Models\JobModel;
use App\Models\CateModel;
use App\Models\ProfileModel;
use CodeIgniter\HTTP\Response;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ScholarModel;

class JobController extends ResourceController
{
    //
    public function getUserById($id)
    {
        $model = new RegAccModel();
        $user = $model->find($id);

        if ($user) {
            return $this->respond($user);
        } else {
            return $this->failNotFound('User not found');
        }
    }
    //
    public function getNews(){
        $job = new JobModel();
        $data = $job->find(1);
        return $this->respond($data, 200);
    }

    public function getprofile(){
        $profile = new ProfileModel();
        $data = $profile->findAll();
        return $this->respond($data, 200);
    }
    public function postJob()
    {
        $input = $this->request->getPost();
        // Add your PHP script to validate and sanitize the input data
    
        // Create a new job object and insert the data into the database
        $job = new JobModel();
        $job->insert($input);

        // Send a response back to the Vue.js application
        $response = [
            'status' => 200,
            'error' => null,
            'message' => 'Job added successfully'
        ];
        return $this->respond($response, 200);
    }
    public function index()
    {
        //
    }
        public function getCate($categoryId)
    {
        $model = new CateModel();
        $data = $model->where('categoryId',$categoryId)->findAll();
        return $this->respond($data, 200);
    }
    // public function getinformation($id){
    //     $main = new JobModel();
    //     $data = $main->where('jobCategory', $id)->findAll();
    //     return $this->respond($data, 200);
    // }
    public function getData()
    {
        $main = new JobModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }

    use ResponseTrait;

    public function del(){
        $json = $this->request->getJSON();
        $id = $json->id;
        $jobModel = new JobModel();
        $r = $jobModel->delete($id);
        return $this->respond($r, 200);

    }
    
    public function getcategories()
    {
        $main = new CateModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function getCat($category_id)
    {
        $model = new JobModel();
$data = $model->where('category_id',$category_id)->findAll();
return $this->respond($data, 200);
    }
//     public function getCat($category_id)
//     {
//         $model = new JobModel();
// $data = $model->where('category_id',$category_id)->findAll();
// return $this->respond($data, 200);
//     }

private $jobModel;

    public function __construct() {
        // Assuming PayModel is already connected to the database
        $this->jobModel = new JobModel();

    }

    public function insert() {
        $json = $this->request;

        $data = [
            'id' => $json->getVar('id'),
            'jobCategory' => $json->getVar('jobCategory'),
            'jobName' => $json->getVar('jobName'),
            'jobLocation' => $json->getVar('jobLocation'),
            'jobSalary' => $json->getVar('jobSalary'),
            'JobNature' => $json->getVar('JobNature'),
            'jobDescription' => $json->getVar('jobDescription'),
            'responsibility' => $json->getVar('responsibility'),
            'jobQualification' => $json->getVar('jobQualification'),
            'companyDetails' => $json->getVar('companyDetails'),
        ];

        $u = $this->jobModel->save($data);

        if ($u) {
            return $this->respond(['msg' => 'Inserted Successfully']);
        } else {
            return $this->fail(['msg' => 'Error occurred']);
        }
    }
    

}
