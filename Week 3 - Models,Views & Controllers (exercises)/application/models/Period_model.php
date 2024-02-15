<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Period_model extends CI_Model {

    
    public function __construct() {
        parent::__construct();
    }
    
    public function get_period_info($period) {
        // Period information stored in arrays
        $periods = array(
            'Triassic' => array(
                'land_animals' => 'Archosaurs ("ruling lizards"), therapsids ("mammal-like reptiles")',
                'marine_animals' => 'Plesiosaurs, ichthyosaurs, fish',
                'avian_animals' => '',
                'plant_life' => 'Cycads, ferns, Gingko-like trees, and seed plants'
            ),
            'Jurassic' => array(
                'land_animals' => 'Dinosaurs (sauropods, therapods), Early mammals, Feathered dinosaurs',
                'marine_animals' => 'Plesiosaurs, fish, squid, marine reptiles',
                'avian_animals' => 'Pterosaurs, Flying insects',
                'plant_life' => 'Ferns, conifers, cycads, club mosses, horsetail, flowering plants'
            ),
            'Cretaceous' => array(
                'land_animals' => 'Dinosaurs (sauropods, therapods, raptors, hadrosaurs, herbivorous ceratopsians), Small, tree-dwelling mammals',
                'marine_animals' => 'Plesiosaurs, pliosaurs, mosasaurs, sharks, fish, squid, marine reptiles',
                'avian_animals' => 'Pterosaurs, Feathered birds',
                'plant_life' => 'Huge expansion of flowering plants'
            )
        );
        
        // Check if the period exists in the array
        if (array_key_exists($period, $periods)) {
            return $periods[$period];
        } else {
            return array(); // Return empty array if period not found
        }
    }
}
?>