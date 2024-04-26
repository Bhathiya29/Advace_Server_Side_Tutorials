<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moviemodel extends CI_Model {

    public function get_movies_by_genre($genre) {
        $this->db->where('genre', $genre);
        $query = $this->db->get('Films');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_all_movies() {
        $query = $this->db->get('Films');
        return $query->result_array();
    }
}
