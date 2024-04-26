<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function display_form(){
        $this->load->view('form_view');
    }
    // Controller action to handle form submission
    public function get_celebrity_info() {
        $name = $this->input->post('name');
        $this->load->model('celebrity_model');
        $celebrity_info = $this->Celebrity_model->get_celebrity_info($name);
        echo json_encode($celebrity_info);
    }

    // Controller action to display celeberity listing view
    public function celebrity_listing() {
        $this->load->view('celebrity_listing_view');
    }
}