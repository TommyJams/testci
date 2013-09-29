<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model{

	public function tourDetails(){

		$query = $this->db->query("SELECT * FROM toursCF;");
		if ($query->num_rows() > 0)
		{
            $qresult = $query->result();
			foreach ($qresult as $row)
			{
   				$tour_id = $row->tour_id;
   				$tour_name = $row->tour_name;
   				$applyBy = $row->applyBy;
   				$startCamp = $row->startCamp;
   				$endCamp = $row->endCamp;
   				$tourDate = $row->tourDate;
   				$target = $row->target;

   				// 3D array formation; Getting venue details
                $venues = null;
   				$query1 = $this->db->query("SELECT * FROM venueCF WHERE tour_id = '$tour_id';");
   				if ($query1->num_rows() > 0)
				{	
                    $q1result = $query1->result();
					foreach ($q1result as $rowInner)
					{
						$venue_name = $rowInner->venue_name;
						$image = $rowInner->image;
						$desc = $rowInner->desc;
						$link = $rowInner->link;
						$city = $rowInner->city;
						$contact = $rowInner->contact;

                        $venues[] = $rowInner;
					}
				}

			//	$tourRow = array($tour_id, $tour_name, $applyBy, $startCamp, $endCamp, $tourDate, $target, $venues);
                $tourRow = array(
                                    'tour_id' 	=> $tour_id, 
                                    'tour_name' => $tour_name,
                                    'applyBy' 	=> $applyBy, 
                                    'startCamp' => $startCamp, 
                                    'endCamp' 	=> $endCamp, 
                                    'tourDate' 	=> $tourDate, 
                                    'target' 	=> $target,
                                    'venues' 	=> $venues
                                );

                $response[] = $tourRow;
			}

			//Return values to controller
			return $response; 
		}       
	}

	public function getFeaturedCampaign(){

		$days_to_go = 0;
		$query = $this->db->query("SELECT * FROM campaignCF WHERE status=1;");
		if ($query->num_rows() > 0)
		{
			$qresult = $query->result();
			foreach ($qresult as $row)
			{
				$campaign_id = $row->campaign_id;
   				$tour_id = $row->tour_id;
   				$tour_name = $row->tour_name;
   				$artist_id = $row->artist_id;
   				$artist_name = $row->artist_name;
   				$target = $row->target;
   				$raised = $row->raised;
   				$endCamp = $row->endCamp;

		   		$todayDate = date("Y-m-d");	

		   		if($endCamp > $todayDate)
		   		{	
   					$diff = abs(strtotime($endCamp) - strtotime($todayDate));
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					$days_to_go = $days;
				}

				$funded = (( $raised/$target ) * 100);
				$campaignRow = array(
										'campaign_id' => $campaign_id,
										'artist_id'   => $artist_id,
										'artist_name' => $artist_name,
										'funded'      => $funded,
										'days_to_go'  => $days_to_go
									);
							
				$response[] = $campaignRow;
   			}

   			//Return values to controller
			return $response;
   		}
	}

	public function campaignDetails($camp_id){

		error_log($camp_id);
		$days_to_go = 0;
		$query = $this->db->query("SELECT * FROM campaignCF WHERE campaign_id='$camp_id';");
		if ($query->num_rows() > 0)
		{
			$qresult = $query->result();
			foreach ($qresult as $row)
			{
				$campaign_id = $row->campaign_id;$tour_id = $row->tour_id;$tour_name = $row->tour_name;
   				$artist_id = $row->artist_id;$artist_name = $row->artist_name;$deadline = $row->deadline;
   				$target = $row->target;$raised = $row->raised;$totalPledges = $row->totalPledges;
   				$startCamp = $row->startCamp;$endCamp = $row->endCamp;$videoLink = $row->videoLink;
   				$fb = $row->fb;$twitter = $row->twitter;$website = $row->website;$blog = $row->blog;
   				$scloud = $row->soundcloud;$rever = $row->reverbnation;$youtube = $row->youtube;
   				$myspace = $row->myspace;$image1 = $row->image1;$image2 = $row->image2;
   				$image3 = $row->image3;$status = $row->status;$tourDate = $row->tourDate;$desc = $row->desc;
   				$tourDate = $row->tourDate;$gplus = $row->gplus;$campaign_desc = $row->desc;

   				// 3D array formation; Getting amount details
   				$pledges = null;
   				$query1 = $this->db->query("SELECT * FROM pledgeCF WHERE campaign_id = '$campaign_id';");
				if ($query1->num_rows() > 0)
				{
					$q1result = $query1->result();
					foreach ($q1result as $rowPledge)
					{
						$amount = $rowPledge->amount;
						$pledge_desc = $rowPledge->desc;

						$pledges[] = $rowPledge;
					}
				}

				// 3D array formation; Getting venue details
				$venues = null;
				$query2 = $this->db->query("SELECT * FROM venueCF WHERE tour_id = '$tour_id';");
				if ($query2->num_rows() > 0)
				{
					$q2result = $query2->result();
					foreach ($q2result as $rowVenue)
					{
						$venue_name = $rowVenue->venue_name;
						$image = $rowVenue->image;
						$venue_desc = $rowVenue->desc;
						$link = $rowVenue->link;	
						$city = $rowVenue->city;
						$contact = $rowVenue->contact;

						$venues[] = $rowVenue;

					}
				}
   				
   				$todayDate = date("Y-m-d");	

   				if($endCamp > $todayDate)
		   		{	
   					$diff = abs(strtotime($endCamp) - strtotime($todayDate));
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					$days_to_go = $days;
				}

				$campaignDetails = array(
											'campaign_id' 	=> $campaign_id,
											'videoLink'		=> $videoLink,
											'raised' 		=> $raised,
											'target' 		=> $target,
											'totalPledges' 	=> $totalPledges,
											'artist_id'   	=> $artist_id,
											'artist_name' 	=> $artist_name,
											'campaign_desc' => $campaign_desc,
											'venues' 		=> $venues,
											'pledges' 		=> $pledges,
											'fb' 			=> $fb,
											'twitter' 		=> $twitter,
											'blog' 			=> $blog,
											'website' 		=> $website,
											'scloud' 		=> $scloud,
											'rever' 		=> $rever,
											'youtube' 		=> $youtube,
											'myspace' 		=> $myspace,
											'gplus' 		=> $gplus,
											'image1' 		=> $image1,
											'image2' 		=> $image2,
											'image3' 		=> $image3,
											'status' 		=> $status,
											'tourDate' 		=> $tourDate,
											'days_to_go'  	=> $days_to_go
										);
							
				$response[] = $campaignDetails;
   			}
   		
   			//Return values to controller
			return $response;
   		}		
	}

	public function formDetails(){

		$target = $this->input->post("target");

		$query = $this->db->query("INSERT INTO `campaignCF` (`target`) VALUES('$target')");

		$query1 = $this->db->query("SELECT * FROM campaignCF ORDER BY campaign_id DESC LIMIT 1");
		if ($query1->num_rows() > 0)
		{
			$q1result = $query1->result();
			foreach ($q1result as $row)
			{
				$campaign_id = $row->campaign_id;
			}

			return $campaign_id;
		}
	}
}
?>