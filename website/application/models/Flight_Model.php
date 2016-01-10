<?php

class Flight_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_flight() {
        $query = $this->db->get('fake');
        return $query->result_array();
    }

}
