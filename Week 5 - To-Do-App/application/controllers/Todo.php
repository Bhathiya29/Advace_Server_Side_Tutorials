<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {
    
    public function index() {
        $this->load->library('session');
        
        // Generate unique user id if not exists in session
        if (!$this->session->userdata('user_id')) {
            $user_id = uniqid();
            $this->session->set_userdata('user_id', $user_id);
            
            // Log the user id
            $this->load->library('logging');
            $this->logging->log_message('info', 'New user id generated: '.$user_id);
        }
        
        $this->load->view('todo_view');
    }
}
