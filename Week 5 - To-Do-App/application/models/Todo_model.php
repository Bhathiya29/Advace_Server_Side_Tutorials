<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add_action($user_id, $action_title) {
        $data = array(
            'user_id' => $user_id,
            'action_title' => $action_title,
            'date_added' => date('Y-m-d H:i:s')
        );
        $this->db->insert('todo_actions', $data);
    }

    public function get_actions($user_id) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('todo_actions');
        return $query->result_array();
    }
}
