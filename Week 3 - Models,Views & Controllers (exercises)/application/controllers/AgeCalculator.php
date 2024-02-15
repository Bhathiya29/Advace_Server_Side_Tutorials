<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgeCalculator extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Age_model');
    }
    
    public function index() {
        $this->load->view('age_form');
    }
    
    public function calculate_age() {
        $dateOfBirth = $this->input->post('dob');
        $age = $this->Age_model->calculate_age($dateOfBirth);
        $data['age'] = $age;
        $this->load->view('age_result', $data);
    }
}
?>
