<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M1 extends CI_Model{

	public function screen_second(){

		$this->load->database($db);

		$query = $this->db->query("SELECT * FROM toursCF;");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
   				$tourid = $row['tour_id'];
   				$tourname = $row['tour_name'];
   				$applyBy = $row['applyBy'];
   				$startCamp = $row['startCamp'];
   				$endCamp = $row['endCamp'];
   				$tourDate = $row['tourDate'];
   				$target = $row['target'];

   				$query1 = $this->db->query("SELECT * FROM venueCF WHERE tour_id = '$tourid';");
   				if ($query1->num_rows() > 0)
				{	
					foreach ($query1->result() as $row)
					{
						
					}
				}

			}
		}
	}




}