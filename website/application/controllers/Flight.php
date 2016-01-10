<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Flight extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Flight_Model');
    }

    public function flight_ctrl() {
        $data["flight"] = $this->Flight_Model->get_flight();
        $this->load->view('result', $data);
    }

}
