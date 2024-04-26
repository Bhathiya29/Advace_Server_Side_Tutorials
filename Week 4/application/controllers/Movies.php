<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

    public function index() {
        $this->load->view('movies_search');
    }

    public function search() {
        $this->load->library('input'); // importing input library to stop the error input not defined
        $genre = $this->input->get('genre'); // Make sure 'genre' is set in your form
        $this->load->model('Moviemodel');
        $data['movies'] = $this->Moviemodel->get_movies_by_genre($genre);
        $this->load->view('search_results', $data);
    }

    public function allmovies() {
        $this->load->model('Moviemodel');
        $data['movies'] = $this->Moviemodel->get_all_movies();
        $this->load->view('all_movies', $data);
    }
}
