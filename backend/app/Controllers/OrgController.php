<?php

namespace App\Controllers;
use CodeIgniter\RestFul\ResourceController;
use App\Models\OrgModel;
use App\Models\OrgCateModel;
use CodeIgniter\HTTP\Response;

use App\Controllers\BaseController;


class OrgController extends ResourceController
{

    public function getOrgData()
    {
        $main = new OrgModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }

    public function deleteData($id)
    {
        $model = new OrgModel();
        $model->delete($id);

        return $this->response->setStatusCode(Response::HTTP_NO_CONTENT);
    }
    public function getOrgCate()
    {
        $main = new OrgCateModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function getCateinformation($id){
        $main = new OrgCateModel();
        $data = $main->where('orgCategory', $id)->findAll();
        return $this->respond($data, 200);
    }
    public function getOrginformation($id){
        $main = new OrgCateModel();
        $data = $main->where('OrgCategory', $id)->findAll();
        return $this->respond($data, 200);
    }
    public function getorgcategories()
    {
        $main = new OrgModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    private $orgModel;

    public function __construct() {
        // Assuming PayModel is already connected to the database
        $this->orgModel = new OrgModel();

    }

    public function insertEvent() {
        $json = $this->request;

        $data = [
            'id' => $json->getVar('id'),
            'eventName' => $json->getVar('eventName'),
            'eventLoc' => $json->getVar('eventLoc'),
            'eventDesc' => $json->getVar('eventDesc'),
            'status' => $json->getVar('status'),
            'eventDate' => $json->getVar('eventDate'),
            'OrgName' => $json->getVar('OrgName'),
        ];

        $u = $this->orgModel->save($data);

        if ($u) {
            return $this->respond(['msg' => 'Inserted Successfully']);
        } else {
            return $this->fail(['msg' => 'Error occurred']);
        }
    }
}
