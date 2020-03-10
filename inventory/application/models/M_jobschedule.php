<?php

class M_jobschedule extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("GMT");
    }

    function created() {
        //////CURRENT GMT DATE TIME(2015-09-23 14:15:07)
        return date('Y-m-d H:i:s');
    }

    function jobschedule_list() {
        $this->db->select('j.*,p.product_name');
        $this->db->from('job_shipping_schedule as j');
        $this->db->join('job_product as jp', 'jp.job_product_id = j.job_product_id', 'left');
        $this->db->join('product as p', 'p.product_id = jp.product_id', 'left');

        $this->db->where('p.archived', 0);
        $this->db->where('jp.archived', 0);
        $this->db->where('j.archived', 0);

        $this->db->order_by("j.job_shipping_schedule_id", "desc");
        //$this->db->limit(10);
        $result = $this->db->get();
        $jobschedule_list = $result->result_array();

        $last_query=$this->db->last_query();

        return $jobschedule_list;
    }

    function insert_jobschedule($job_schedule_result) {

        $this->db->select('job_product_id');
        $this->db->from('job_product');
        $this->db->where('job_id', $job_schedule_result['job_id']);
        $this->db->where('product_id', $job_schedule_result['product_id']);

        $this->db->where('archived', 0);

        $this->db->limit(1);
        $this->db->order_by("job_product_id", "asc");
        $result = $this->db->get();
        $jobproducts = $result->result_array();

        if (count($jobproducts) > 0) {
            $data['job_shipping_schedule_id'] = $job_schedule_result['job_shipping_schedule_id'];
            $data['job_product_id'] = $jobproducts[0]['job_product_id'];
            $data['job_id'] = $job_schedule_result['job_id'];
            $data['no_batches'] = $job_schedule_result['no_batches'];
            $data['shipping_date'] = $job_schedule_result['shipping_date'];
            $data['shipping_address'] = $job_schedule_result['shipping_address'];
            $data['note'] = $job_schedule_result['note'];
            $data['archived'] = 0; // when we are inserting a new record, for sure it is not archived
            $this->db->insert('job_shipping_schedule', $data);

            //  $job_schedule_result["job_shipping_schedule_id"] = $this->db->insert_id();
            $job_shipping_schedule_id = $job_schedule_result["job_shipping_schedule_id"];

            $data = array(
                'shipping_job_id' => $job_shipping_schedule_id
            );

            $last_query=$this->db->last_query();

            $this->db->where('job_product_id', $jobproducts[0]['job_product_id']);
            $this->db->where("(shipping_job_id = 0 or shipping_job_id Is NULL)");
            $this->db->limit($job_schedule_result['no_batches']);
            $this->db->order_by("batch_id", "asc");
            $this->db->update('batch', $data);

            $this->session->set_flashdata('success', 'Job schedule added successfully');
        } else {
            $response = error_res("failed");
            $this->session->set_flashdata('error', 'Job Product Not found');
        }

        return $response;
    }

    function job_list($param) {
//        $this->db->select('job_id,c.customer_name');
//        $this->db->from('job as j');
//        $this->db->join('customer as c', 'c.customer_id=j.customer_id', 'left');
//
//        $this->db->where('c.archived', 0);
//        $this->db->where('j.archived', 0);
//
//        $this->db->limit(50);
//        $this->db->where('has_shipping_shedule', 1);
//        $this->db->order_by("job_id", "desc");
//        $result = $this->db->get();
//        $job = $result->result_array();
//        return $job;
        $this->db->distinct();
        $this->db->select('j.job_id,c.customer_name');
        $this->db->from('job as j');
        $this->db->join('job_product as jp', 'jp.job_id = j.job_id', 'left');
        $this->db->join('customer as c', 'c.customer_id=j.customer_id', 'left');
        $this->db->join('batch as b', 'b.job_product_id=jp.job_product_id', 'left');

        $this->db->where('c.archived', 0);
        $this->db->where('j.archived', 0);
        $this->db->where('b.workstep', 2);
        $this->db->where('b.shipping_job_id', 0);
        if (!empty($param['product_id'])) {
            $this->db->where('jp.product_id', $param['product_id']);
        }

        $this->db->where('has_shipping_shedule', 1);

        $this->db->limit(50);
        $this->db->order_by('j.priority', 'desc');
        $this->db->order_by("job_id", "desc");

        $result = $this->db->get();
        $job = $result->result_array();

        $zzz = $this->db->last_query();
        return $job;
    }

    function products_list() {
//        $this->db->select('p.product_id,p.product_name');
//        $this->db->from('product as p');
//        $this->db->where('p.archived', 0);
//        $result = $this->db->get();
//        $product = $result->result_array();
//        return $product;

        $this->db->distinct();
        $this->db->select('p.product_id,p.product_name');
        $this->db->from('product as p');
        $this->db->join('job_product as jp', 'jp.product_id = p.product_id', 'left');
        $this->db->join('batch as b', 'b.job_product_id=jp.job_product_id', 'left');
        $this->db->where('p.archived', 0);

        $this->db->where('b.workstep', 2);
        $this->db->where('b.shipping_job_id', 0);
        $this->db->order_by("p.product_name", "asc");
        $result = $this->db->get();
        $product = $result->result_array();

        $zzz = $this->db->last_query();

        return $product;
    }

    function get_jobschedule_detail($jobschedule_id) {
        $this->db->select('*');
        $this->db->from('job_shipping_schedule as j');
        $this->db->where('j.jss_id', $jobschedule_id);
        $this->db->where('j.archived', 0);
        $this->db->limit(1);
        $result = $this->db->get();
        $jobscheduleinfo = $result->row_array();

        $this->db->select('*');
        $this->db->from('job_product as j');
        $this->db->where('j.job_product_id', $jobscheduleinfo['job_product_id']);
        $this->db->limit(1);
        $result = $this->db->get();
        $jobscheduleinfo1 = $result->row_array();
        $jobscheduleinfo['job_product_id'] = $jobscheduleinfo1['product_id'];

        return $jobscheduleinfo;
    }

    function unreserve_batches_for_job_product($shipping_job_id, $job_product_id, $no_batches) {
        $update_data = array(
            'shipping_job_id' => 0
        );

        $where = "job_product_id = $job_product_id AND workstep != 3 and shipping_job_id = $shipping_job_id";
        $this->db->where($where);
        $this->db->update('batch', $update_data);

        $affectedRows = $this->db->affected_rows();
        $last_query=$this->db->last_query();
    }

    function update_jobschedule($job_schedule_result) {

        $this->db->select('job_product_id');
        $this->db->from('job_product');
        $this->db->where('job_id', $job_schedule_result['job_id']);
        $this->db->where('product_id', $job_schedule_result['product_id']);
        $result = $this->db->get();
        $jobproducts = $result->result_array();

        $last_query=$this->db->last_query();

        if (count($jobproducts) > 0) {
            $data['job_product_id'] = $jobproducts[0]['job_product_id'];
            $data['job_id'] = $job_schedule_result['job_id'];
            $data['no_batches'] = $job_schedule_result['no_batches'];
            $data['shipping_date'] = $job_schedule_result['shipping_date'];
            $data['shipping_address'] = $job_schedule_result['shipping_address'];
            $data['note'] = $job_schedule_result['note'];

            $data['archived'] = $job_schedule_result['archived'];
            if ($data['archived'] == 1) {
                $this->unreserve_batches_for_job_product($job_schedule_result['job_shipping_schedule_id'], $data['job_product_id'], $data['no_batches']);
            }

            $this->db->where('jss_id', $job_schedule_result['jss_id']);
            $this->db->update('job_shipping_schedule', $data);
            $return['status'] = 1;
            $this->session->set_flashdata('success', 'Jobschedule updated successfully');
        } else {
            $this->session->set_flashdata('error', 'Job product not found or some data archived');
        }

        return $return;
    }

    function get_available_batches($param) {

        $this->db->select('job_product_id');
        $this->db->from('job_product');
        $this->db->where('job_id', $param['job_id']);
        $this->db->where('product_id', $param['product_id']);
        $this->db->order_by("job_product_id", "asc");
        $this->db->where('archived', 0);
        $result = $this->db->get();
        $jobproducts_id = $result->result_array();
        $job_products_id = $jobproducts_id[0]['job_product_id'];

        $this->db->select('job_product_id,sum(batch_Qty) as total_item_count');
        $this->db->from('batch');

        $where_statement = "workstep < 3 and (shipping_job_id = 0 or shipping_job_id Is NULL) and
        job_product_id = $job_products_id";
        $this->db->where($where_statement);
        $result = $this->db->get();
        $jobproducts = $result->result_array();

        if ($jobproducts[0]['total_item_count'] == NULL) {
            $total_item_count = 0;
        } else {
            $total_item_count = $jobproducts[0]['total_item_count'];
        }

        $this->db->select('job_product_id,sum(batch_Qty) as total_item_count');
        $this->db->from('batch');
        $this->db->where('job_product_id', $job_products_id);
        $this->db->where('workstep', 3);
        $this->db->where('shipping_job_id !=', 0);
        //$this->db->where('product_id', $param['product_id']);
        $result = $this->db->get();
        $jobproducts = $result->result_array();
        if ($jobproducts[0]['used_item_count'] == NULL) {
            $used_item_count = 0;
        } else {
            $used_item_count = $jobproducts[0]['used_item_count'];
        }

        $this->db->select('batch_size');
        $this->db->from('job_product');
        $this->db->where('job_id', $param['job_id']);
        $this->db->where('product_id', $param['product_id']);
        $this->db->limit(1);
        $this->db->order_by("job_product_id", "asc");
        $result = $this->db->get();
        $jobproducts = $result->result_array();
        if ($jobproducts[0]['batch_size'] == NULL) {
            $batch_size = 0;
        } else {
            $batch_size = $jobproducts[0]['batch_size'];
        }

        $return['total_batches'] = $total_item_count - $used_item_count;
        if ($return['total_batches'] < 0) {
            $return['total_batches'] = 0;
        }
        $return['batch_size'] = $batch_size;
        return $return;
        // return $jobproducts;

        if (count($jobproducts) > 0) {
            $jobproducts_ids = array();
            foreach ($jobproducts as $jp) {
                $jobproducts_ids[] = $jp['job_product_id'];
            }
            $this->db->select('count(*) as total_batches');
            $this->db->from('batch');
            $this->db->where('workstep < ', 3);
            $this->db->where_in('job_product_id', $jobproducts_ids);
            $result = $this->db->get();
            $batches = $result->row_array();
            return $batches;
        } else {
            $return['total_batches'] = "0";
            return $return;
        }
    }

    function check_jobshipping_number_availability($param) {
        $this->db->select('job_shipping_schedule_id');
        $this->db->from('job_shipping_schedule');
        $this->db->where('job_shipping_schedule_id', $param['job_shipping_schedule_id']);
        $this->db->where('archived', 0);
        $result = $this->db->get();
        $job_shipping_schedule_id = $result->result_array();
        if (count($job_shipping_schedule_id) > 0) {
            $return['is_exist'] = 1;
        } else {
            $return['is_exist'] = 0;
        }
        return $return;
    }

}
