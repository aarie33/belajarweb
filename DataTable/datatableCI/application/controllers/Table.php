<?php 
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */


class Table extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}

	function index(){
		$this->load->view("table_view");
	}


	function ambil_data(){
		$draw=$_REQUEST['draw'];
		$length=$_REQUEST['length'];
		$start=$_REQUEST['start'];
		$search=$_REQUEST['search']["value"];
		
		$query1 = $this->db->query("SELECT b.br_id, b.br_barcode, b.br_nama, b.br_minimum_stok, SUM(g.gbm_jml_sisa) as bst_stok, g.gbm_id 
        	FROM gdg_brg_masuk_detail g
        	INNER JOIN barang b ON b.br_id = g.br_id
        	group by g.br_id order by bst_stok ASC");

		$total=$query1->num_rows();//$this->db->count_all_results("barang");
		$output=array();
		$output['draw']=$draw;
		$output['recordsTotal']=$output['recordsFiltered']=$total;
		$output['data']=array();

		$where = '';
		if($search!=""){
			// $this->db->like("br_nama",$search);
			$where = "WHERE b.br_nama LIKE '%$search%'";
		}

		// $this->db->limit($length,$start);
		// $this->db->order_by('br_nama','DESC');
		// $query=$this->db->get('barang');
		$query = $this->db->query("SELECT b.br_id, b.br_barcode, b.br_nama, b.br_minimum_stok, SUM(g.gbm_jml_sisa) as bst_stok, g.gbm_id 
        	FROM gdg_brg_masuk_detail g
        	INNER JOIN barang b ON b.br_id = g.br_id
        	$where
        	group by g.br_id order by bst_stok ASC LIMIT $start,$length");
		if($search!=""){
			// $this->db->like("br_nama",$search);
			$where = "WHERE b.br_nama LIKE '%$search%'";
			$jum=$this->db->query("SELECT b.br_id, b.br_barcode, b.br_nama, b.br_minimum_stok, SUM(g.gbm_jml_sisa) as bst_stok, g.gbm_id 
        	FROM gdg_brg_masuk_detail g
        	INNER JOIN barang b ON b.br_id = g.br_id
        	$where
        	group by g.br_id order by bst_stok ASC");//$this->db->get('barang');
			$output['recordsTotal']=$output['recordsFiltered']=$jum->num_rows();
		}

		$nomor_urut=$start+1;
		foreach ($query->result_array() as $barang) {
			$output['data'][]=array($nomor_urut,$barang['br_barcode'],$barang['br_nama']);
			$nomor_urut++;
		}

		echo json_encode($output);
	}

}
?>