<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        
		function getAll(){
			$this->db->select('T, Station,Timeout,To_Station,out_Station,Station_destination,To_time,Note');
			$this->db->where('Note','รถดีเซลราง');
			$result = $this->db->get('train');
			return $result;
		}

        function insert($data){
			$this->db->insert('train',$data);
		}
		

		
        
		
}