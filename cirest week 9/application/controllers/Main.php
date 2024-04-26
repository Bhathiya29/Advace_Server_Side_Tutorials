<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('main_view');
    }

    public function module_details() {
        $module_code = $this->input->post('module_code');
        $data['module_code'] = $module_code;
        $this->load->view('module_details_view', $data);
    }


}
