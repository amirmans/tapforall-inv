<?php

class M_jobproduct extends CI_Model {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set("GMT");
	}

	function created() {
		//////CURRENT GMT DATE TIME(2015-09-23 14:15:07)
		return date('Y-m-d H:i:s');
	}

	function jobproduct_list() {
		$this->db->select('*');
		$this->db->from('job_product as jp');
		$this->db->join('product as p', 'p.product_id = jp.product_id', 'left');
		$this->db->join('job as j', 'jp.job_id = j.job_id', 'left');
		$this->db->where('p.archived', 0);
		$this->db->where('jp.archived', 0);
		$this->db->where('j.archived', 0);
		$this->db->order_by("jp.job_product_id", "desc");
		//$this->db->limit(10);
		$result = $this->db->get();
		$jobproduct_list = $result->result_array();
		$sql = $this->db->last_query(); // this is just debugging
		return $jobproduct_list;
	}

	function get_job_product_data($param) {
		$this->db->select('sum(total_items)as sum_total_items,sum(batch_size)as sum_batch_size');
		$this->db->from('job_product');
		$this->db->where('job_id', $param['job_id']);
		$this->db->where('product_id', $param['product_id']);
		$this->db->where('archived', 0);
		$result = $this->db->get();
		$sql = $this->db->last_query(); // this is just debugging
		$row = $result->result_array();
		if ($row[0]['sum_total_items'] == NULL) {
			$row[0]['sum_total_items'] = 0;
		}
		if ($row[0]['sum_batch_size'] == NULL) {
			$row[0]['sum_batch_size'] = 0;
		}
		return $row[0];
	}

	function customer_list() {
		$this->db->select('customer_id,customer_name');
		$this->db->from('customer');
		$this->db->where('archived', 0);
		$result = $this->db->get();
		$customerlist = $result->result_array();
		return $customerlist;
	}

	function insert_jobproduct($job_product_result) {
//        if ($param['customer_owned'] == "1") {
//            $param['customer_owned'] = 0;
//        } else {
//            $param['customer_owned'] = 1;
//        }

		$data['customer_owned'] = $job_product_result['customer_owned'];
		$data['product_id'] = $job_product_result['product_id'];
		$data['job_id'] = $job_product_result['job_id'];
		$data['inventory_location_id'] = $job_product_result['inventory_location_id'];
		$data['price_per_item'] = $job_product_result['price_per_item'];
//        $data['start_time'] = $job_product_result['start_time'];
//        $data['end_time'] = $job_product_result['end_time'];
		$data['workstep'] = $job_product_result['workstep'];
		$data['total_items'] = $job_product_result['total_items'];
		$data['batch_size'] = $job_product_result['batch_size'];
		$data['notes'] = $job_product_result['notes'];
		$data['archived'] = "0";

		$this->db->insert('job_product', $data);

		$job_product_result["job_product_id"] = $this->db->insert_id();
		$job_product_id = $job_product_result["job_product_id"];
		return;
	}

	function job_list() {
		$this->db->select('j.job_id,c.customer_name');
		$this->db->from('job as j');
		$this->db->join('customer as c', 'c.customer_id=j.customer_id', 'left');
		$this->db->where('j.archived', 0);
		$this->db->where('c.archived', 0);
        $this->db->limit(50);

        $this->db->order_by('j.priority', 'desc');
		$this->db->order_by("j.job_id", "desc");

		$result = $this->db->get();
		$job = $result->result_array();
		return $job;
	}

	function all_job_list() {
		$this->db->select('job_id,c.customer_name');
		$this->db->from('job as j');
		$this->db->join('customer as c', 'c.customer_id=j.customer_id', 'left');
		$this->db->where('c.archived', 0);
		$this->db->where('j.archived', 0);
		$this->db->limit(50);
		$this->db->order_by("job_id", "desc");
		$result = $this->db->get();
		$job = $result->result_array();
		return $job;
	}

	function products_list() {
		$this->db->select('p.product_id,p.product_name');
		$this->db->from('product as p');
		$this->db->where('p.archived', 0);
        $this->db->order_by("p.priority", "desc");
		$result = $this->db->get();
		$product = $result->result_array();
		return $product;
	}

	function locations_list() {
		$this->db->select('*');
		$this->db->from('inventory_location');
		$this->db->where('archived', 0);
		$result = $this->db->get();
		$location = $result->result_array();
		return $location;
	}

	function steps_list() {
		$this->db->select('*');
		$this->db->from('workstep_info');
		$result = $this->db->get();
		$steps = $result->result_array();
		return $steps;
	}

	function generate_batch($job_product_result) {

		$this->db->select('job_product_id');
		$this->db->from('job_product');
		$this->db->where('job_id',  $job_product_result['job_id']);
		$this->db->where('product_id',  $job_product_result['product_id']);
		$this->db->limit(1);
		$result = $this->db->get();
		$validate = $result->result_array();
		if(count($validate)>0)
		{
			$return= error_res("Job id- Product id already available");
			return $return;
		}

		 if ($job_product_result['customer_owned'] != "1") {
			$data['customer_owned'] = 0;
		} else {
			$data['customer_owned'] = 1;
		}
		$data['product_id'] = $job_product_result['product_id'];
		$data['job_id'] = $job_product_result['job_id'];
		$data['inventory_location_id'] = $job_product_result['inventory_location_id'];
		$data['price_per_item'] = $job_product_result['price_per_item'];
//        $data['start_time'] = $job_product_result['start_time'];
//        $data['end_time'] = $job_product_result['end_time'];
		// $data['workstep'] = $job_product_result['workstep'];
		$data['total_items'] = $job_product_result['total_items'];
		$data['batch_size'] = $job_product_result['batch_size'];
		//$data['notes'] = $job_product_result['notes'];
		$this->db->insert('job_product', $data);
		$job_product_result["job_product_id"] = $this->db->insert_id();
		$job_product_id = $job_product_result["job_product_id"];

		$number_of_batches = floor($job_product_result["total_items"] / $job_product_result["batch_size"]) + 1;
		$nItemsInLastBatch = intval($job_product_result["total_items"]) % intval($job_product_result["batch_size"]);
		if ($nItemsInLastBatch == 0) {
			$number_of_batches--;
			$nItemsInLastBatch = $job_product_result["batch_size"];
			/// Comment above line - generate_batch_changes
		}

		// finding customer name
		$job_id = $job_product_result['job_id'];
		"select c.customer_name, j.* from job j, customer c where j.job_id = $job_id and j.customer_id = c.customer_id;";
		$this->db->select('c.customer_name');
		$this->db->from('job j, customer c');
		$this->db->where("j.job_id = $job_id and j.customer_id = c.customer_id");
		$result = $this->db->get();
		$customer_name = $result->result_array()[0]["customer_name"];



		$this->db->select('count(*) as count_batch');
		$this->db->from('batch');
		$this->db->where('job_product_id', $job_product_id);
		$result = $this->db->get();
		$row_batche = $result->result_array();

//        $queryForExistingBatches = "select count(*) from batch where  job_product_id = $job_product_id;";
//        $numberOfexistingBatchesResult = getDBresult($queryForExistingBatches);
//
		$numberOfExistingBatches = $row_batche[0]['count_batch'];

		$batchIDs = array();

		// $prepared_stmt = "INSERT INTO batch (job_product_id, batch_qty, start_time) VALUES (?,?,now())";
		for ($i = $numberOfExistingBatches; $i < $number_of_batches; $i++) {
			$inset_data = array();
			$inset_data['job_product_id'] = $job_product_result["job_product_id"];
			$batch_qty = $job_product_result["batch_size"];
			if ($i == $number_of_batches - 1) {
				$batch_qty = $nItemsInLastBatch;
			}

			///else{ $batch_qty = $job_product_result["batch_size"]; c
			// comment below line  } -generate_batch_changes

			$batch_qty = $job_product_result["batch_size"];
			$inset_data['inventory_location_id'] = $job_product_result["inventory_location_id"];
			$inset_data['workstep'] = $job_product_result["workstep"];
			$inset_data['batch_qty'] = $batch_qty;
			$this->db->set('start_time', 'NOW()', FALSE);
			if ($job_product_result['workstep'] == 1) {
				$this->db->set('production_time', 'NOW()', FALSE);
			}
			$this->db->insert('batch', $inset_data);
			$batchIDs[] = $this->db->insert_id();
		}
		$batchIDsWithInfo["batches"] = $batchIDs;
		// $batchIDs = array("10054","10053","10052");
		$string = "";
		if (count($batchIDs) > 0) {
			$this->db->select('b.batch_id,c.contact_name,p.product_name,jp.job_id,b.batch_Qty,b.timestamp');
			$this->db->from('batch as b');
			$this->db->join('job_product as jp', 'jp.job_product_id = b.job_product_id', 'left');
			$this->db->join('job as j', 'j.job_id = jp.job_id', 'left');
			$this->db->join('customer as c', 'c.customer_id = j.customer_id', 'left');
			$this->db->join('product as p', 'p.product_id = jp.product_id', 'left');
			$this->db->where_in('b.batch_id', $batchIDs);
			$this->db->order_by("batch_id", "asc");
			$result = $this->db->get();
			$row_batche = $result->result_array();
			$string .= "Batch No,Customer,Product,Job no,Batch Qty,Current Timestamp \n ";
			for ($i = 0; $i < count($row_batche); $i++) {
				$string.=$row_batche[$i]['batch_id'] . "," . $customer_name . "," . $row_batche[$i]['product_name'] . "," . $row_batche[$i]['job_id'] . "," . $row_batche[$i]['batch_Qty'] . "," . $row_batche[$i]['timestamp'] . " \n";
			}
		}



//        $batchIDsWithInfo["TotalBatches"] = $number_of_batches;
//        $batchIDsWithInfo["Number of batch IDs generated"] = $number_of_batches - $numberOfExistingBatches;
//        $batchIDsWithInfo["job_product_id"] = $job_product_id;
//        $string = "batches :" . implode(",", $batchIDsWithInfo["batches"]);
//        $string.="\n TotalBatches :" . $batchIDsWithInfo["TotalBatches"];
//        $string.="\n Number of batch IDs generated :" . $batchIDsWithInfo["Number of batch IDs generated"];
//        $string.="\n job_product_id :" . $batchIDsWithInfo["job_product_id"];


		return $string;
	}

	function get_jobproduct_detail($jobproduct_id) {

		$this->db->select('*');
		$this->db->from('job_product as j');
		//  $this->db->join('product as p', 'p.product_id = j.product_id', 'left');
		$this->db->where('j.job_product_id', $jobproduct_id);
		$this->db->limit(1);
		$result = $this->db->get();
		$jobproductinfo = $result->row_array();

		return $jobproductinfo;
	}

	function update_jobproduct($job_product_result) {
	   if ($job_product_result['customer_owned'] != "1") {
			$data['customer_owned'] = 0;
		} else {
			$data['customer_owned'] = 1;
		}

		//$data['product_id'] = $job_product_result['product_id'];
	 //   $data['job_id'] = $job_product_result['job_id'];
		$data['inventory_location_id'] = $job_product_result['inventory_location_id'];
		$data['price_per_item'] = $job_product_result['price_per_item'];
	  //  $data['workstep'] = $job_product_result['workstep'];
	   // $data['total_items'] = $job_product_result['total_items'];
	  //  $data['batch_size'] = $job_product_result['batch_size'];
		$data['notes'] = $job_product_result['notes'];
		$data['archived'] = $job_product_result['archived'];


		$this->db->where('job_product_id', $job_product_result['job_product_id']);
		$this->db->update('job_product', $data);
		$data=array();
		$data['inventory_location_id'] = $job_product_result['inventory_location_id'];
		 $this->db->where('job_product_id', $job_product_result['job_product_id']);
		$this->db->update('batch', $data);
		$return['status'] = 1;
		$this->session->set_flashdata('success', 'Job product updated successfully');

		return $return;
	}

}

