<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Location extends CI_Controller {

    public function __construct() {
        parent::__construct();
        ////////////DEFAULT LOAD BELOW FUNCTIONLITY WHEN CALL V1 CONTROLLER
        /////// LOAD LIBRARY VALIDATION CLASS
        $this->load->library('validation');
        ///// LOAD MODEL CLASS
        $this->load->model('m_location');
        ////// RESONSE HEADER CONTEN TYPRE SET FROM DEFAULT(TEXT/HTML) TO APPLICATION/JSON
    }

    function index() {
        $data["locations"] = $this->m_location->location_list();
        $this->load->view('v_location_list', $data);
    }

    function add_location() {
        $this->load->view('v_add_location');
    }

    function edit_location($inventory_location_id) {
        $data['location'] = $this->m_location->get_location_detail($inventory_location_id);
        $this->load->view('v_edit_location', $data);
    }

    function insert_location() {
        $param = $_REQUEST;
        $response = $this->m_location->insert_location($param);
        redirect('location');
    }

    function insert_location_and_continue() {
        $param = $_REQUEST;
        $response = $this->m_location->insert_location($param);
        redirect('location/add_location');
    }

    function update_location() {
        $param = $_REQUEST;
        $response = $this->m_location->update_location($param);
        redirect('location');
    }

    function validate_location() {
        $param = $_REQUEST;
 
        $response = $this->m_location->validate_location($param);
        echo json_encode($response);
    }
    
    function validate_location2()
    {
                $param = $_REQUEST;
        $response = $this->m_location->validate_location2($param);
        echo json_encode($response);
    }

    function getNumberofOffspring($location_id) {
        $job_product_count = $this->m_location->getNumberofOffspring($location_id);

        echo $job_product_count;
    }

}
