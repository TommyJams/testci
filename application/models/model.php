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
   				$tourDate = $row->tourDate;$gplus = $row->gplus;$campaign_desc = htmlspecialchars_decode($row->desc);

   				if(!isset($raised))
                  		{
                    		$raised = 0;
                  		}
                  		if(!isset($totalPledges))
                  		{
                    		$totalPledges = 0;
                  		}

   				// 3D array formation; Getting amount details
   				$pledges = null;
   				$query1 = $this->db->query("SELECT * FROM pledgeCF WHERE campaign_id = '$campaign_id' ORDER BY amount ASC;");
				if ($query1->num_rows() > 0)
				{
					$q1result = $query1->result();
					foreach ($q1result as $rowPledge)
					{
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

   		else
   		{
   			redirect(base_url().'fans');
   		}	
	}

	public function formDetails(){

	    $tour_id = $this->input->post("tour_id");
		$artist_name = $this->input->post("artistName");
		$target = $this->input->post("target");
		$min_target = $this->input->post("min_target");
		$maxIndex = $this->input->post("maxIndex");
        $editorContent = htmlspecialchars($this->input->post("editorContent"));
        $vlink = $this->input->post("v-link");
        $sociallink1 = $this->input->post("sociallink-1");
        $sociallink2 = $this->input->post("sociallink-2");
        $sociallink3 = $this->input->post("sociallink-3");

        $fb = "";
        $twitter = "";
        $soundcloud = "";
        $bandcamp = "";
        $website = "";

        // Loading helper functions
        $this->load->helper('functions');
        $this->load->helper('modelFunctions');

		$response=array('error'=>0,'info'=>null);

		$values=array
		(
			'artistName'	=> $artist_name,
			'target'		=> $target,
			'min_target'	=> $min_target,
			'video-link'	=> $vlink,
			'sociallink1'	=> $sociallink1,
			'sociallink2'	=> $sociallink2,
			'sociallink3'	=> $sociallink3
		);

		if(isGPC()) $values=array_map('stripslashes',$values);
	
		if(isEmpty($values['artistName']))
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'artistName','message'=>CONTACT_FORM_MSG_INVALID_DATA_NAME);
		}

		if( (isEmpty($values['target'])) || ($values['target'] < $values['min_target']) )
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'target','message'=>CONTACT_FORM_MSG_INVALID_TARGET);
		}
	
		if(!IsYoutubeUrl($values['video-link']))
		{
 			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'vd-link','message'=>CONTACT_FORM_MSG_INVALID_VIDEO_LINK);
		}

		// Social Links Check
		$count = 3;
		while($count)
		{
			$sociallink = 'sociallink'.$count;
			$i = IsSocialUrl($values["$sociallink"]);
		
			if($i == 1)
				$fb = $sociallink;
			elseif($i == 2)
				$twitter = $sociallink;
			elseif($i == 3)
				$soundcloud = $sociallink;
			elseif($i == 4)
				$bandcamp = $sociallink;
			elseif($i == 5)
				$website = $sociallink;
			
			// Website link is broken
			elseif($i == 0)
			{
				$response['error']=1;	
				$response['info'][]=array('fieldId'=>'socialLink1','message'=>CONTACT_FORM_MSG_INVALID_SOCIAL_LINK);
			}	
				 
			$count--;
		}
	
		// Returning and triggering callback to show qtip(s)
		if($response['error']==1) 
			createResponse($response);

		// Getting posted Form Data 
		$form_data = json_encode($this->input->post());
		error_log("Form Data: ".$form_data);

        error_log("Editor Content: ".$editorContent);

		$query2 = $this->db->query("SELECT * FROM toursCF WHERE tour_id='$tour_id';");
		if ($query2->num_rows() > 0)
		{
			$q2result = $query2->result();
			foreach ($q2result as $row)
			{
				$tour_name = $row->tour_name;
				$applyBy = $row->applyBy;
				$startCamp = $row->startCamp;
				$endCamp = $row->endCamp;
				$tourDate = $row->tourDate;
			}
		}

		$query = $this->db->query("INSERT INTO `campaignCF` (`tour_id`, `tour_name`, `artist_name`, `target`, `startCamp`, `endCamp`, `tourDate`, `desc`, `fb`, `twitter`, `soundcloud`, `bandcamp`, `website` ) 
					VALUES('$tour_id', '$tour_name', '$artist_name', '$target', '$startCamp', '$endCamp', '$tourDate', '$editorContent', '$fb', '$twitter', '$soundcloud', '$bandcamp', '$website')");

		$query1 = $this->db->query("SELECT * FROM campaignCF ORDER BY campaign_id DESC LIMIT 1");
		if ($query1->num_rows() > 0)
		{
			$q1result = $query1->result();
			foreach ($q1result as $row)
			{
				$campaign_id = $row->campaign_id;
			}

			while($maxIndex)
			{
				$pledgeAmount = 'pledgeAmount'.$maxIndex;
				$desc = 'desc'.$maxIndex;

				$amount = $this->input->post("$pledgeAmount");
				$desc = $this->input->post("$desc");

				if($amount > 0)
				{
					$query2 = $this->db->query("INSERT INTO `pledgeCF` (`campaign_id`, `amount`, `desc`) 
								VALUES('$campaign_id', '$amount', '$desc')");
				}
				
				$maxIndex--;
			}
			
			//Return values to controller
			return $campaign_id;
		}
	}

	public function getTourDetail($tour_id){

		error_log("message: ".$tour_id);

		$query = $this->db->query("SELECT * FROM toursCF WHERE tour_id = '$tour_id';");
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
}
?>