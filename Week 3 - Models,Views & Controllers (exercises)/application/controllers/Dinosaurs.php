<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinosaurs extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('period_model');
    }

    public function periods(){
        $this->load->view('periods');
    }

    public function getInfo($period){
        $data['period_info'] = $this->period_model->get_period_info($period);
        $this->load->view('period_info', $data);
    }


}

?>