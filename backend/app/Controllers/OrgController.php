<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RestFul\ResourceController;
use App\Models\OrgModel;
use App\Models\OrgFormModel;

class OrgController extends ResourceController
{
    use ResponseTrait;

    private $orgModel; // Define the property

    public function __construct()
    {
        $this->orgModel = new OrgModel();
    }

    public function deleteTask($taskId)
    {
        $task = $this->orgModel->find($taskId);

        if ($task) {
            $this->orgModel->delete($taskId);
            return $this->respond(['success' => true, 'message' => 'Task deleted successfully']);
        } else {
            return $this->respond(['success' => false, 'message' => 'Task not found']);
        }
    }

    public function approveEvent()
    {
        $request = $this->request;
        $response = ['message' => 'Invalid request']; // Default response

        // Assuming you're using POST data
        $eventId = $request->getPost('eventId');

        if (!empty($eventId)) {
            $this->orgModel->approveEvent($eventId);
            $response = ['message' => 'Event approved successfully'];
        }

        return $this->respond($response);
    }

    public function getOrgData()
    {
        $data = $this->orgModel->findAll();
        return $this->respond($data, 200);
    }

    public function getOrgInfo()
    {
        $main = new OrgFormModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }

    public function insertEvent()
    {
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
