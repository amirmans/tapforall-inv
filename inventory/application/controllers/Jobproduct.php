<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Jobproduct extends CI_Controller {

	public function __construct() {
		parent::__construct();
		////////////DEFAULT LOAD BELOW FUNCTIONLITY WHEN CALL V1 CONTROLLER
		/////// LOAD LIBRARY VALIDATION CLASS
		$this->load->library('validation');
		///// LOAD MODEL CLASS
		$this->load->model('m_jobproduct');
		////// RESONSE HEADER CONTEN TYPRE SET FROM DEFAULT(TEXT/HTML) TO APPLICATION/JSON
	}

	function index() {

		$data["jobproducts"] = $this->m_jobproduct->jobproduct_list();
		$this->load->view('v_jobproduct_list', $data);
	}

	function add_jobproduct() {
		$data["jobs"] = $this->m_jobproduct->job_list();
		$data["products"] = $this->m_jobproduct->products_list();
		$data["locations"] = $this->m_jobproduct->locations_list();
		$data["steps"] = $this->m_jobproduct->steps_list();
		// $data["job_product_info"] = $this->m_jobproduct->job_product_info();
		$this->load->view('v_add_jobproduct', $data);
	}

	function edit_jobproduct($jobproduct_id) {
		$data["jobs"] = $this->m_jobproduct->all_job_list();
		$data["products"] = $this->m_jobproduct->products_list();
		$data["locations"] = $this->m_jobproduct->locations_list();
		$data["steps"] = $this->m_jobproduct->steps_list();
		 $data['jobproduct'] = $this->m_jobproduct->get_jobproduct_detail($jobproduct_id);
		$this->load->view('v_edit_jobproduct', $data);
	}

	function get_job_product_data() {
		$param = $_REQUEST;
		$response = $this->m_jobproduct->get_job_product_data($param);
		echo json_encode($response);
	}

	function insert_jobproduct() {
		$param = $_REQUEST;
		$response = $this->m_jobproduct->insert_jobproduct($param);
		redirect('jobproduct');
	}

	function insert_jobproduct_and_continue() {
		$param = $_REQUEST;
		$response = $this->m_jobproduct->insert_jobproduct($param);
		redirect('jobproduct/add_jobproduct');
	}

	function update_jobproduct() {
		$param = $_REQUEST;
		$response = $this->m_jobproduct->update_jobproduct($param);
		redirect('jobproduct');
	}

	function generate_batch() {
		$param = $_REQUEST;
		$response = $this->m_jobproduct->generate_batch($param);
		echo json_encode($response);
	}

	function download_csv() {
		$param = $_REQUEST;
		$filename= $param['filename'];
		header("Content-type: application/octet-stream");
		header("Content-Disposition: attachment; filename=\"$filename.csv\"");

		echo $param['csv_data'];
	}

}
