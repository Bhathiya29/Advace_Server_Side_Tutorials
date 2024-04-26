<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Modules extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Module_model');
    }

    public function index_get() {
        $modules = $this->Module_model->get_modules();
        $this->response($modules, REST_Controller::HTTP_OK);
    }

    public function details_get($id) {
        $module = $this->Module_model->get_module($id);
        if ($module) {
            $this->response($module, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'Module not found'], REST_Controller::HTTP_NOT_FOUND);
        }
    }


}
