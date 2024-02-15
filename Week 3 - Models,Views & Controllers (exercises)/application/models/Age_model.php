<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Age_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function calculate_age($dateOfBirth) {
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        return $diff->format('%y');
    }
}
?>
