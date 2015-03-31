<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Trimestre extends CI_Model
{
	function todos()
	{
		$q = $this->db->get('trimestre');
		return $q->result();
	}
}