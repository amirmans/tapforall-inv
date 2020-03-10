<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jobschedule extends CI_Controller {

    public function __construct() {
        parent::__construct();
        ////////////DEFAULT LOAD BELOW FUNCTIONLITY WHEN CALL V1 CONTROLLER
        /////// LOAD LIBRARY VALIDATION CLASS
        $this->load->library('validation');
        ///// LOAD MODEL CLASS
        $this->load->model('m_jobschedule');
        ////// RESONSE HEADER CONTEN TYPRE SET FROM DEFAULT(TEXT/HTML) TO APPLICATION/JSON
    }

    function index() {

        $data["jobschedules"] = $this->m_jobschedule->jobschedule_list();
        $this->load->view('v_jobschedule_list', $data);
    }

    function add_jobschedule() {
        $data["jobs"] = $this->m_jobschedule->job_list($param); //TODO
        $data["products"] = $this->m_jobschedule->products_list();
        
        $job_id = $this->session->flashdata('job_id');
        if (isset($job_id) && $job_id != '') {
            $data['job_id'] = $job_id;
        }
        
          $product_id= $this->session->flashdata('product_id');
        if (isset($product_id) && $product_id != '') {
            $data['product_id'] = $product_id;
        }
        $this->load->view('v_add_jobschedule', $data);
    }

    function edit_jobschedule($jobschedule_id) {
        $data["jobs"] = $this->m_jobschedule->job_list();
        $data["products"] = $this->m_jobschedule->products_list();
        $data['jobschedule'] = $this->m_jobschedule->get_jobschedule_detail($jobschedule_id);
        $this->load->view('v_edit_jobschedule', $data);
    }

    function insert_jobschedule() {
        $param = $_REQUEST;
        $response = $this->m_jobschedule->insert_jobschedule($param);
        $this->session->set_flashdata('job_id', $param['job_id']);
        $this->session->set_flashdata('product_id', $param['product_id']);

        if ($response['status'] == 0) {
            redirect('jobschedule/add_jobschedule');
        }
        redirect('jobschedule');
    }

    function insert_jobschedule_and_continue() {
        $param = $_REQUEST;
        $response = $this->m_jobschedule->insert_jobschedule($param);
        $this->session->set_flashdata('job_id', $param['job_id']);
        $this->session->set_flashdata('product_id', $param['product_id']);
        redirect('jobschedule/add_jobschedule');
    }

    function update_jobschedule() {
        $param = $_REQUEST;
        $response = $this->m_jobschedule->update_jobschedule($param);
        redirect('jobschedule');
    }

    function get_available_batches()
    {
        $param = $_REQUEST;

        if (!empty($param["job_id"]) && !empty($param["product_id"])) {
            $response = $this->m_jobschedule->get_available_batches($param);
            echo json_encode($response);
        }
    }

    function get_available_job_ids() {
        $param = $_REQUEST;

        $data = $this->m_jobschedule->job_list($param);
        echo json_encode($data);
    }


    function check_jobshipping_number_availability() {
        $param = $_REQUEST;
        $response = $this->m_jobschedule->check_jobshipping_number_availability($param);
        echo json_encode($response);
    }

}
