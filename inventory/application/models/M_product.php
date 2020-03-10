<?php

class M_product extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("GMT");
    }

    function created() {
        //////CURRENT GMT DATE TIME(2015-09-23 14:15:07)
        return date('Y-m-d H:i:s');
    }

    function product_list() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('archived', 0);
        $result = $this->db->get();
        $productList = $result->result_array();
        // $i = 0;
//        foreach ($productList as $product)
        for ($i=0 ; $i< count($productList) ; $i++)
        {
            $product_id = $productList[$i]['product_id'];
            $work_step_inventory = Work_Step_Inventory;
            $query_statement = "select sum(b.batch_Qty) as no_in_inventory from batch b
              left join job_product as jp on b.job_product_id = jp.job_product_id
              left join product as p on p.product_id = jp.product_id
              where b.workstep = $work_step_inventory and p.product_id = $product_id";
            $result=$this->db->query($query_statement)->result_array();
//            $result = $result->result_array();
            $no_in_inventory = $result[0]['no_in_inventory'];
            if (empty($no_in_inventory)) {
                $no_in_inventory = 0;
            }
            $productList[$i]['no_in_inventory'] = $no_in_inventory;
        }

        return $productList;
    }

    function insert_product($param) {

        $data['product_name'] = $param['product_name'];
        $data['note'] = $param['note'];
        $this->db->insert('product', $data);
        $this->session->set_flashdata('success', 'Product Added Successfully');
    }

    function get_product_detail($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_id', $product_id);
        $result = $this->db->get();
        $productinfo = $result->row_array();
        return $productinfo;
    }

    function update_product($param) {

        $data['product_name'] = $param['product_name'];
        $data['note'] = $param['note'];
        $data['archived'] = $param['archived'];

        $this->db->where('product_id', $param['product_id']);
        $this->db->update('product', $data);
        $return['status'] = 1;
        $this->session->set_flashdata('success', 'Product updated successfully');

        return $return;
    }

    function validate_product($param) {
        $this->db->select('product_id');
        $this->db->from('product');
        $this->db->where('product_name', $param['product_name']);
        $this->db->limit(1);
        $result = $this->db->get();
        $customerlist = $result->result_array();
        if (count($customerlist) > 0) {
            $return = error_res("Product name already available");
        } else {
            $return = success_res("");
        }
        return $return;
    }

    function validate_product2($param)
    {
           $this->db->select('product_id');
        $this->db->from('product');
        $this->db->where('product_name', $param['product_name']);
        $this->db->where('product_id !=', $param['product_id']);
        $this->db->limit(1);
        $result = $this->db->get();
        $customerlist = $result->result_array();
        if (count($customerlist) > 0) {
            $return = error_res("Product name already available");
        } else {
            $return = success_res("");
        }
        return $return;
    }


    function getNumberofOffspring($product_id) {
        $this->db->select('count(*)');
        $this->db->from('job_product');
        $this->db->where('product_id', $product_id);
        $result = $this->db->get();
        $result_array = $result->result_array();

        return $result_array[0]['count(*)'];
    }

}
