<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benchmark extends CI_Controller {

	public function index()
	{
		$t = microtime(true); 
		for($i=0; $i<10000; $i++):
			$this->db->query("SELECT * FROM `authors` WHERE CONCAT_WS('-', id,first_name,last_name,email,birthdate,added) LIKE ('%aaron%') ORDER BY `first_name` ASC ");
		endfor;
		$t2 = microtime(true); 
		echo $t."<br>".$t2."<br>".($t2-$t)."<br>";
	}
}
