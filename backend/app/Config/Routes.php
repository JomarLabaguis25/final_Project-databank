<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/getData', 'JobController::getData');       
$routes->match(['get', 'post'], '/getNews', 'JobController::getNews');
$routes->match(['get', 'post'], '/postJob', 'JobController::postJob');
$routes->get('/getWeb', 'MainController::getWeb');       
$routes->match(['get', 'post'], '/getWebInfo', 'MainController::getWebInfo');
$routes->get('/getOrgData', 'OrgController::getOrgData');   
$routes->delete('deleteData/(:num)', 'OrgController::deleteData/$1'); 
$routes->delete('DeleteData/(:num)', 'JobController::DeleteData/$1');
$routes->get('/getcategories','JobController::getcategories');
$routes->get('/getinformation/(:any)','JobController::getinformation/$1');
$routes->get('/getjobs/(:any)','JobController::getjobs/$1');
$routes->get('/getOrgCate','OrgController::getOrgCate');
$routes->get('/getCate/(:any)','JobController::getCate/$1');
// $routes->post('/register', 'MainController::register');
$routes->get('/getInfos', 'InfoController::getInfos');       
$routes->get('/getDis', 'MainController::getDis');       
$routes->get('/getHandbook/(:num)','MainController::getHandbook/$1');
$routes->post('/del', 'RegAccController::del');
$routes->post('/api/update-profile/(:num)', 'MainController::/update-profile/$1');
$routes->get('/getAccount','RegAccController::getAccount');
$routes->post('updateData/(:num)', 'MainController::/updateData/$1');

// Alumni Verification
$routes->match(['get', 'post'], '/register', 'FormController::register');
$routes->match(['get', 'post'], '/login', 'FormController::login');
$routes->match(['get', 'post'], '/verification', 'FormController::verification');

$routes->get('/getScholar','MainController::getScholar');
$routes->post('/del', 'MainController::del');
$routes->post('/del', 'JobController::del');
$routes->post('submitForm', 'InquireController::submitForm');

// Org Validation
$routes->match(['get', 'post'], '/Orgregister', 'OrgFormController::Orgregister');
$routes->match(['get', 'post'], '/Orglogin', 'OrgFormController::Orglogin');
$routes->match(['get', 'post'], '/Orgverification', 'OrgFormController::Orgverification');
$routes->get('/getPay', 'MainController::getPay');


$routes->get('/getCateinformation/(:any)','OrgController::getCateinformation/$1');
$routes->get('/getOrginformation/(:any)','OrgController::getOrginformation/$1');
$routes->get('/getorgcategories','OrgController::getorgcategories');

$routes->get('/', 'InquireController::getAllInfo'); // Route to get all info data
    $routes->put('update/(:num)', 'InquireController::updateInfo/$1'); // Route to update info data by ID
    $routes->delete('delete/(:num)', 'InquireController::deleteInfo/$1'); // Route to delete info data by ID

 $routes->get('/getInquire', 'MainController::getInquire');
 $routes->post('/submit-form', 'InquireController::insertFormData');

 $routes->match(['get', 'post'], '/insertScholar', 'MainController::insertScholar');
$routes->match(['get', 'post'], '/addScholar', 'MainController::addScholar');
$routes->match(['get', 'post'], '/insertEvent', 'OrgController::insertEvent');
$routes->match(['get', 'post'], '/insert', 'JobController::insert');
