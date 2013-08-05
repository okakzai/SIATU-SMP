<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modeltes extends CI_Model {
	function simpan($data){
		$this->db->insert('tes',$data);
		if ($this->db->affected_rows()) return '1';
		else return'0';
	}
}
