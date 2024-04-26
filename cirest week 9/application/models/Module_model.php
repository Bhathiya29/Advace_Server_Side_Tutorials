<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module_model extends CI_Model {

    public function get_modules() {
        return $this->db->get('modules')->result();
    }

    public function get_module($id) {
        return $this->db->get_where('modules', array('id' => $id))->row();
    }

}
