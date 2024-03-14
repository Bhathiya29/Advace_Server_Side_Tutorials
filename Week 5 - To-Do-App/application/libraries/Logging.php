<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logging {

    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function log_message($level, $message) {
        $this->CI->load->library('logger');
        $this->CI->logger->$level($message);
    }
}
