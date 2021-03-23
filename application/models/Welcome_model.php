<?php defined('BASEPATH') or exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getRow($table = '', $dt = null, $order = null)
	{
		$this->db->select("$table.*");
		$this->db->from($table);


		if ($dt['keyword'] != ''):
			$keyword = $dt['keyword'];
			if ($keyword) {
				$this->db->like("$table.dni", $keyword);
				$this->db->or_like("$table.nombres", $keyword);
				$this->db->or_like("$table.ape_pat", $keyword);
				$this->db->or_like("$table.ape_mat", $keyword);
				$this->db->or_like("concat($table.nombres, ' ', $table.ape_pat, ' ', $table.ape_mat)", $keyword);
			}
		endif;

		if (isset($order) && !empty($order)):
			$this->db->order_by($order);
		endif;

		$query = $this->db->get();

		return ($query->num_rows() ? $query->result() : array());

	}
}

