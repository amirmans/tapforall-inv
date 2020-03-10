<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        ////////////DEFAULT LOAD BELOW FUNCTIONLITY WHEN CALL V1 CONTROLLER
        /////// LOAD LIBRARY VALIDATION CLASS
        $this->load->library('validation');
        ///// LOAD MODEL CLASS
        $this->load->model('m_product');
        ////// RESONSE HEADER CONTEN TYPRE SET FROM DEFAULT(TEXT/HTML) TO APPLICATION/JSON
    }

    function index() {
        $data["products"] = $this->m_product->product_list();
        $this->load->view('v_product_list', $data);
    }

    function add_product() {
        $this->load->view('v_add_product');
    }

    function edit_product($inventory_product_id) {
        $data['product'] = $this->m_product->get_product_detail($inventory_product_id);
        $this->load->view('v_edit_product', $data);
    }

    function insert_product() {
        $param = $_REQUEST;
        $response = $this->m_product->insert_product($param);
        redirect('product');
    }

    function insert_product_and_continue() {
        $param = $_REQUEST;
        $response = $this->m_product->insert_product($param);
        redirect('product/add_product');
    }

    function update_product() {
        $param = $_REQUEST;
        $response = $this->m_product->update_product($param);
        redirect('product');
    }

    function validate_product() {
        $param = $_REQUEST;
  
        $response = $this->m_product->validate_product($param);
        echo json_encode($response);
    }
    
    function validate_product2()
    {
           $param = $_REQUEST;
  
        $response = $this->m_product->validate_product2($param);
        echo json_encode($response);
    }

    function getNumberofOffspring($product_id) {
        $job_product_count = $this->m_product->getNumberofOffspring($product_id);

        echo $job_product_count;
    }

}
