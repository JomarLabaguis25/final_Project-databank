<?php

namespace App\Controllers;
use Illuminate\Http\Request;
use App\Controllers\BaseController;
use App\Models\DisciplineModel;
use App\Models\HandbookModel;
use App\Models\USGModel;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MainModel;
use App\Models\PayModel;
use App\Models\ScholarModel;
use App\Models\JobModel;


class MainController extends ResourceController
{
    protected $main;

    public function getWebInfo(){
        $job = new MainModel();
        $data = $job->find(1);
        return $this->respond($data, 200);
    }
    public function deleteData($id)
{
    $main = new MainModel();
    $data = $main->deleteData($id);

    return $this->respond($data, 200);
}

// New method to add account
public function addData()
{
    $request = \Config\Services::request();

    $name = $request->getPost('name');
    $email = $request->getPost('email');

    $main = new MainModel();
    $data = $main->addData($name, $email);

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
    // public function getHandbook(){
    //     $job = new HandbookModel();
    //     $data = $job->findAll();
    //     return $this->respond($data, 200);
    // }
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
    public function dele(){
        $json = $this->request->getJSON();
        $id = $json->id;
        $regaccModel = new ScholarModel();
        $r = $regaccModel->delete($id);
        return $this->respond($r, 200);

    }
    public function deleted(){
        $json = $this->request->getJSON();
        $id = $json->id;
        $scholarModel = new JobModel();
        $r = $scholarModel->delete($id);
        return $this->respond($r, 200);

    }
    public function getPay()
    {
        $main = new PayModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function getUSG()
    {
        $main = new USGModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }

    // Assuming your API endpoint is 'insert'
// You might need to adjust the route according to your server setup
private $payModel;
private $scholarModel;

    public function __construct() {
        // Assuming PayModel is already connected to the database
        $this->payModel = new PayModel();
        $this->scholarModel = new ScholarModel();

    }

    public function insertScholar() {
        $json = $this->request;

        $data = [
            'id' => $json->getVar('id'),
            's_name' => $json->getVar('s_name'),
            'location' => $json->getVar('location'),
            'p_date' => $json->getVar('p_date'),
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

    // Other methods of your class go here...
    
    public function uploadFile()
{
    $file = $this->request->getFile('uploadedFile');

    if ($file && $file->isValid()) {
        // Define allowed file extensions for PDF and Excel files
        $allowedExtensions = ['pdf', 'xls', 'xlsx'];

        // Get the file extension
        $fileExtension = $file->getExtension();

        // Check if the file extension is allowed
        if (in_array($fileExtension, $allowedExtensions)) {
            // Generate a random name for the file
            $fileName = $file->getRandomName();

            // Move the uploaded file to the appropriate directory
            $file->move(ROOTPATH . 'public/uploads/pdf/', $fileName);

            return $this->respond(['status' => 'success', 'msg' => 'File uploaded successfully', 'fileName' => $fileName]);
        } else {
            return $this->respond(['status' => 'error', 'msg' => 'Invalid file extension'], 400);
        }
    } else {
        return $this->respond(['status' => 'error', 'msg' => 'Invalid file'], 400);
    }
}


    public function getPdfFiles()
    {
        // Retrieve the list of uploaded PDF files
        $pdfFiles = scandir(ROOTPATH . 'public/uploads/pdf/');
        $pdfFiles = array_diff($pdfFiles, ['.', '..']); // Remove '.' and '..' from the list

        $pdfFilesData = [];
        foreach ($pdfFiles as $fileName) {
            $pdfFilesData[] = ['name' => $fileName];
        }

        return $this->respond($pdfFilesData);
    }

    public function downloadPdf($fileName)
{
    // Set the appropriate headers for PDF file download
    $headers = [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="' . urlencode($fileName) . '"',
    ];

    // Send the file to the client using CodeIgniter's forceDownload method
    return $this->response->download(FCPATH . 'uploads/pdf/' . $fileName, null, true, $headers);

    // Change the third argument to true or false as needed
}



}

