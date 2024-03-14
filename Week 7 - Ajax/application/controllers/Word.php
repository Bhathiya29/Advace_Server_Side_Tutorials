<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Word extends CI_Controller {

    public function index() {
        $this->load->view('word_view');
    }

    public function get_definition() {
        $word = $this->input->post('word');

        // This is dummy logic wrtten to simulate fetching definition from an API we need an API to make this work
        $definition = $this->get_definition_from_api($word);

        echo $definition;
    }

    // Placeholder function to simulate fetching definition from API
    private function get_definition_from_api($word) {
        // This is dummy logic wrtten to simulate fetching definition from an API we need an API to make this work
        return "Definition of '".$word."' goes here.";
    }
}
