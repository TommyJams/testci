<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crowdfund extends CI_Controller{

	public function crowdFundPage(){

		$this->load->model('m1');

		$SQLs = "SELECT * FROM `".DATABASE."`.`toursCF` WHERE tour_id='$tour_id'";
		$results = mysql_query($SQLq);	
		if (mysql_num_rows($results) == 1) 
		{
	 		$found = mysql_fetch_array($results);
			$tour_name=$found["tour_name"];
			$applyBy=$found["applyBy"];
			$startCamp=$found["startCamp"];
			$endCamp=$found["endCamp"];
			$tourDate=$found["tourDate"];
		}

		$SQLs = "SELECT * FROM `".DATABASE."`.`venueCF` WHERE tour_id='$tour_id'";
	    $results = mysql_query($SQLs);
		while ($a = mysql_fetch_assoc($results))
	    {
	    	$gig_id=$a["gig_id"];

	    }


		$this->load->view('crowdfund_view');
	}
}
?>