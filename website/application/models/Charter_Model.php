<?php

class Charter_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function Function_Name() {
        $query = $this->db->query('SELECT * FROM tablename');
        return $query->result_array();
    }

}
