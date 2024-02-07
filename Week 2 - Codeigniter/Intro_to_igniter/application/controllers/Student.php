<?php 

class Student extends CI_Controller{


    public function details(){
        $this->load->view("student_details",array('name'=>'Max','age'=>20,'address'=>'Toronto Canada'));
    }
}