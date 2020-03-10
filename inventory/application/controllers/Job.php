<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Job extends CI_Controller {

    public function __construct() {
        parent::__construct();
        ////////////DEFAULT LOAD BELOW FUNCTIONALITY WHEN CALL V1 CONTROLLER
        /////// LOAD LIBRARY VALIDATION CLASS
        $this->load->library('validation');
        ///// LOAD MODEL CLASS
        $this->load->model('m_job');
        ////// RESPONSE HEADER CONTENT TYPE SET FROM DEFAULT(TEXT/HTML) TO APPLICATION/JSON
    }

    function index() {
        $data["jobs"] = $this->m_job->job_list();
        $this->load->view('v_job_list', $data);
    }

    function add_job() {
        $data["customers"] = $this->m_job->customer_list();
        $this->load->view('v_add_job', $data);
    }

    function edit_job($job_id) {
        $data["customers"] = $this->m_job->customer_list();
        $data['job'] = $this->m_job->get_job_detail($job_id);

        $this->load->view('v_edit_job', $data);
    }

    function insert_job() {
        $param = $_REQUEST;
        $response = $this->m_job->insert_job($param);
        redirect('job');
    }

    function insert_job_and_continue() {
        $param = $_REQUEST;
        $response = $this->m_job->insert_job($param);
        redirect('job/add_job');
    }

    function update_job() {
        $param = $_REQUEST;
        $response = $this->m_job->update_job($param);

        redirect('job');
    }
    function check_jobnumber_availability() {
        $param = $_REQUEST;
        $response = $this->m_job->check_jobnumber_availability($param);
        echo json_encode($response);
    }

    function getNumberofOffspring($job_id) {
        $job_product_count = $this->m_job->getNumberofOffspring($job_id);

        echo $job_product_count;
    }

}
