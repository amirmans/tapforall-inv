<?php

class M_location extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("GMT");
    }

    function created() {
        //////CURRENT GMT DATE TIME(2015-09-23 14:15:07)
        return date('Y-m-d H:i:s');
    }

    function location_list() {
        $this->db->select('*');
        $this->db->from('inventory_location');
        $this->db->where('archived', 0);
        $result = $this->db->get();
        $customerlist = $result->result_array();
        return $customerlist;
    }

    function insert_location($param) {

        $data['name'] = $param['location_name'];
        $data['note'] = $param['note'];
        $this->db->insert('inventory_location', $data);
        $this->session->set_flashdata('success', 'Location Added Successfully');
    }

    function get_location_detail($inventory_location_id) {
        $this->db->select('*');
        $this->db->from('inventory_location');
        $this->db->where('inventory_location_id', $inventory_location_id);
        $result = $this->db->get();
        $locationinfo = $result->row_array();
        return $locationinfo;
    }

    function update_location($param) {

        $data['name'] = $param['location_name'];
        $data['note'] = $param['note'];
        $data['archived'] = $param['archived'];
        if (empty($data['archived'])) {
            $data['archived'] = 0;
        }

        $this->db->where('inventory_location_id', $param['inventory_location_id']);
        $this->db->update('inventory_location', $data);
        $return['status'] = 1;
        $this->session->set_flashdata('success', 'Location updated successfully');

        return $return;
    }

    function validate_location($param) {


        $this->db->select('inventory_location_id');
        $this->db->from('inventory_location');
        $this->db->where('name', $param['location_name']);
        $this->db->limit(1);
        $result = $this->db->get();
        $customerlist = $result->result_array();
        if (count($customerlist) > 0) {
            $return = error_res("Location name already available");
        } else {
            $return = success_res("");
        }
        return $return;
    }

    function validate_location2($param) {
        $this->db->select('inventory_location_id');
        $this->db->from('inventory_location');
        $this->db->where('name', $param['location_name']);
        $this->db->where('inventory_location_id !=', $param['inventory_location_id']);
        $this->db->limit(1);
        $result = $this->db->get();
        $customerlist = $result->result_array();
        if (count($customerlist) > 0) {
            $return = error_res("Location name already available");
        } else {
            $return = success_res("");
        }
        return $return;
    }


    function getNumberofOffspring($location_id) {
        $this->db->select('count(*)');
        $this->db->from('job_product');
        $this->db->where('inventory_location_id', $location_id);
        $result = $this->db->get();
        $result_array = $result->result_array();

        return $result_array[0]['count(*)'];
    }

}
