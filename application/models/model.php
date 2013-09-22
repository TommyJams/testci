<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model{

	public function tourDetails(){

		$this->load->database($db);

		$query = $this->db->query("SELECT * FROM toursCF;");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
   				$tour_id = $row['tour_id'];
   				$tour_name = $row['tour_name'];
   				$applyBy = $row['applyBy'];
   				$startCamp = $row['startCamp'];
   				$endCamp = $row['endCamp'];
   				$tourDate = $row['tourDate'];
   				$target = $row['target'];

   				// 3D array formation; Getting venue details
   				$query1 = $this->db->query("SELECT * FROM venueCF WHERE tour_id = '$tourid';");
   				if ($query1->num_rows() > 0)
				{	
					foreach ($query1->result() as $row)
					{
						$venue_name = $row['venue_name'];
						$image = $row['image'];
						$desc = $row['desc'];
						$link = $row['link'];	
						$city = $row['city'];
						$contact = $row['contact'];
					}
				}

			}
		}

		// Getting on-going campaign details 
		$query1 = $this->db->query("SELECT * FROM campaignCF;");
		if ($query1->num_rows() > 0)
		{
			foreach ($query1->result() as $row)
			{
				$campaign_id = $row['campaign_id'];
   				$tour_id = $row['tour_id'];
   				$tour_name = $row['tour_name'];
   				$artist_id = $row['artist_id'];
   				$artist_name = $row['artist_name'];
   				$target = $row['target'];
   				$raised = $row['raised'];
   				$endCamp = $row['endCamp'];
   			}
   		}
   			
   		$todayDate = date("Y-m-d");	
   		$diff = abs(strtotime($endCamp) - strtotime($todayDate));
		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		$funded = (( $raised/$target ) * 100);
		$days_to_go = $days;

		// In which format and how to return values to controller
	}

	public function campaignDetails(){

		$query = $this->db->query("SELECT * FROM campaignCF;");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$campaign_id = $row['campaign_id'];$tour_id = $row['tour_id'];$tour_name = $row['tour_name'];
   				$artist_id = $row['artist_id'];$artist_name = $row['artist_name'];$deadline = $row['deadline'];
   				$target = $row['target'];$raised = $row['raised'];$totalPledges = $row['totalPledges'];
   				$startCamp = $row['startCamp'];$endCamp = $row['endCamp'];$videoLink = $row['videoLink'];
   				$fb = $row['fb'];$twitter = $row['twitter'];$website = $row['website'];
   				$scloud = $row['soundcloud'];$rever = $row['reverbnation'];$youtube = $row['youtube'];
   				$myspace = $row['myspace'];$image1 = $row['image1'];$image2 = $row['image2'];
   				$image3 = $row['image3'];$status = $row['status'];$tourDate = $row['tourDate'];

   				// 3D array formation; Getting amount details
   				$query1 = $this->db->query("SELECT * FROM pledgeCF WHERE campaign_id = '$campaign_id';");
				if ($query1->num_rows() > 0)
				{
					foreach ($query1->result() as $row)
					{
						$amount = $row['amount'];
						$desc = $row['desc'];
					}
				}

				// 3D array formation; Getting venue details
				$query2 = $this->db->query("SELECT * FROM pledgeCF WHERE tour_id = '$tour_id';");
				if ($query2->num_rows() > 0)
				{
					foreach ($query2->result() as $row)
					{
						$venue_name = $row['venue_name'];
						$image = $row['image'];
						$desc = $row['desc'];
						$link = $row['link'];	
						$city = $row['city'];
						$contact = $row['contact'];
					}
				}
   			}
   		}
   			
   		$todayDate = date("Y-m-d");	
   		$diff = abs(strtotime($endCamp) - strtotime($todayDate));
		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
		$days_to_go = $days;

		// In which format and how to return values to controller
	}
}
?>