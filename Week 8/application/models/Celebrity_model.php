<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Celebrity_model extends CI_Model {

public function get_celebrity_info($name) {
    $celebrities = array(
        "Emma Stone" => array(
            'name' => "Emma Stone",
            'age' => 35,
            'url' => 'http://www.example.com/emmastone.png',
            'films' => array('Poor Things', 'La La Land', 'The Favourite')
        ),
        "Ryan Gosling" => array(
            'name' => "Ryan Gosling",
            'age' => 40,
            'url' => 'http://www.example.com/ryangosling.png',
            'films' => array('The Notebook', 'La La Land', 'Drive')
        ),
    );

    if (array_key_exists($name, $celebrities)) {
        return $celebrities[$name];
    } else {
        return null;
    }
}
}