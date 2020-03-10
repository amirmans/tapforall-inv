<?php

class M_customer extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("GMT");
    }

    function created() {
        //////CURRENT GMT DATE TIME(2015-09-23 14:15:07)
        return date('Y-m-d H:i:s');
    }

    function customer_list() {
        $this->db->select('customer_id,customer_name,contact_name,contact_email,contact_phone,account_manager');
        $this->db->from('customer');
        $this->db->where('archived', 0);
        $result = $this->db->get();
        $customerlist = $result->result_array();
        return $customerlist;
    }

    function insert_customer($param) {

        $data['customer_name'] = $param['customer_name'];
        $data['contact_name'] = $param['contact_name'];
        $data['contact_email'] = $param['contact_email'];
        $data['contact_phone'] = $param['contact_phone'];
        $data['account_manager'] = $param['account_manager'];
        $data['date_created'] = date('Y-m-d');
        $data['timestamp'] = $this->created();
        $data['archived'] = "0";
        $this->db->insert('customer', $data);
        $this->session->set_flashdata('success', 'Customer Added Successfully');
    }

    function get_customer_details($customer_id) {
        $this->db->select('customer_id,customer_name,contact_name,contact_email,contact_phone,account_manager');
        $this->db->from('customer');
        $this->db->where('customer_id', $customer_id);
        $result = $this->db->get();
        $customerinfo = $result->row_array();
        return $customerinfo;
    }

    function update_customer($param) {

        $data['customer_name'] = $param['customer_name'];
        $data['contact_name'] = $param['contact_name'];
        $data['contact_email'] = $param['contact_email'];
        $data['contact_phone'] = $param['contact_phone'];
        $data['account_manager'] = $param['account_manager'];
        $data['archived'] = $param['archived'];
        if (empty($data['archived'])) {
            $data['archived'] = 0;
        }
        $this->db->where('customer_id', $param['customer_id']);
        $this->db->update('customer', $data);
        $return['status'] = 1;
        $this->session->set_flashdata('success', 'Customer updated successfully');

        return $return;
    }

    function validate_customer($param) {
        $this->db->select('customer_id');
        $this->db->from('customer');
        $this->db->where('customer_name', $param['customer_name']);
        $this->db->limit(1);
        $result = $this->db->get();
        $customerlist = $result->result_array();
        if (count($customerlist) > 0) {
            $return = error_res("Customer name already available");
        } else {
            $return = success_res("");
        }
        return $return;
    }

    function validate_customer2($param) {
        $this->db->select('customer_id');
        $this->db->from('customer');
        $this->db->where('customer_id !=', $param['customer_id']);
         $this->db->where('customer_name', $param['customer_name']);
        $this->db->limit(1);
        $result = $this->db->get();
        $customerlist = $result->result_array();
        if (count($customerlist) > 0) {
            $return = error_res("Customer name already available");
        } else {
            $return = success_res("");
        }
        return $return;
    }

    function getNumberofOffspring($customer_id) {
        $this->db->select('count(*)');
        $this->db->from('job');
        $this->db->where('customer_id', $customer_id);
        $result = $this->db->get();
        $result_array = $result->result_array();

        return $result_array[0]['count(*)'];
    }

}
