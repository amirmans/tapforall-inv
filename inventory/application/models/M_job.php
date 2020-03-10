<?php

class M_job extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("GMT");
    }

    function created() {
        //////CURRENT GMT DATE TIME(2015-09-23 14:15:07)
        return date('Y-m-d H:i:s');
    }

    function job_list() {
        $this->db->select('*');
        $this->db->from('job as j');
        $this->db->join('customer as c', 'c.customer_id = j.customer_id', 'left');
        $this->db->where('c.archived', 0);
        $this->db->where('j.archived', 0);

        $result = $this->db->get();
        $customerlist = $result->result_array();

        return $customerlist;
    }

    function customer_list() {
        $this->db->select('customer_id,customer_name');
        $this->db->from('customer');
        $this->db->where('archived', 0);
        $result = $this->db->get();
        $customerlist = $result->result_array();
        return $customerlist;
    }

    function insert_job($param) {
        if ($param['has_shipping_shedule'] != "1") {
            $param['has_shipping_shedule'] = 0;
        } else {
            $param['has_shipping_shedule'] = 1;
        }

        $data['has_shipping_shedule'] = $param['has_shipping_shedule'];
        $data['job_id'] = $param['job_number'];
        $data['customer_job_id'] = $param['customer_job_id'];
        $data['customer_id'] = $param['customer_id'];
        $data['order_date'] = $param['order_date'];
        $data['due_date'] = $param['due_date'];
        $data['note'] = $param['note'];
        $data['archived'] = "0";
        $this->db->insert('job', $data);
        $this->session->set_flashdata('success', 'Job Added Successfully');
    }

    function get_job_detail($job_id) {
        // we don't need to check for archived field, this job has already passed the test.
        $this->db->select('*');
        $this->db->from('job as j');
        $this->db->join('customer as c', 'c.customer_id = j.customer_id', 'left');
        $this->db->where('j.job_id', $job_id);
        $result = $this->db->get();
        $jobinfo = $result->row_array();
        return $jobinfo;
    }

    function update_job($param) {

        $data['customer_job_id'] = $param['customer_job_id'];
        $data['customer_id'] = $param['customer_id'];
        $data['order_date'] = $param['order_date'];
        $data['due_date'] = $param['due_date'];
        $data['note'] = $param['note'];
        $data['has_shipping_shedule'] = $param['has_shipping_shedule'];
        $data['archived'] = $param['archived'];
        if (empty($data['archived'])) {
            $data['archived'] = 0;
        }

        $this->db->where('job_id', $param['job_id']);
        $this->db->update('job', $data);
        $return['status'] = 1;
        $this->session->set_flashdata('success', 'Job updated successfully');

        return $return;
    }

    function new_job_id() {
        $this->db->select('job_id');
        $this->db->from('job');
        $this->db->limit(1);
        $this->db->order_by('job_id', 'desc');
        $result = $this->db->get();
        $job_id = $result->result_array();
        return $job_id[0]['job_id'] + 1;
    }

    function check_jobnumber_availability($param) {
        $this->db->select('job_id');
        $this->db->from('job');
        $this->db->where('job_id', $param['job_id']);
        $result = $this->db->get();
        $job_id = $result->result_array();
        if (count($job_id) > 0) {
            $return['is_exist'] = 1;
        } else {
            $return['is_exist'] = 0;
        }
        return $return;
    }

    function getNumberofOffspring($job_id) {
        $this->db->select('count(*)');
        $this->db->from('job_product');
        $this->db->where('job_id', $job_id);
        $result = $this->db->get();
        $result_array = $result->result_array();

        return $result_array[0]['count(*)'];
    }

}
