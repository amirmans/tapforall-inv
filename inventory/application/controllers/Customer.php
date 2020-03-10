<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        ////////////DEFAULT LOAD BELOW FUNCTIONLITY WHEN CALL V1 CONTROLLER
        /////// LOAD LIBRARY VALIDATION CLASS
        $this->load->library('validation');
        ///// LOAD MODEL CLASS
        $this->load->model('m_customer');
        ////// RESONSE HEADER CONTEN TYPRE SET FROM DEFAULT(TEXT/HTML) TO APPLICATION/JSON
    }

    function index() {
        $data["customers"] = $this->m_customer->customer_list();
        $this->load->view('v_customer_list', $data);
    }

    function add_customer() {
        $this->load->view('v_add_customer');
    }

    function edit_customer($customer_id) {
        $data['customer'] = $this->m_customer->get_customer_details($customer_id);
        $this->load->view('v_edit_customer', $data);
    }

    function insert_customer() {
        $param = $_REQUEST;
        $response = $this->m_customer->insert_customer($param);
        redirect('customer');
    }

    function insert_customer_and_continue() {
        $param = $_REQUEST;
        $response = $this->m_customer->insert_customer($param);
        redirect('customer/add_customer');
    }

    function update_customer() {
        $param = $_REQUEST;
        $response = $this->m_customer->update_customer($param);
        redirect('customer');
    }

    function validate_customer() {
        $param = $_REQUEST;
        $response = $this->m_customer->validate_customer($param);
        echo json_encode($response);
    }
    
    function validate_customer2()
    {
        $param = $_REQUEST;
        $response = $this->m_customer->validate_customer2($param);
        echo json_encode($response);
    }

    function getNumberofOffspring($customer_id) {
        $customer_name = urldecode($customer_id);
        $jobs_count = $this->m_customer->getNumberofOffspring($customer_id);

        echo $jobs_count;
    }

}
