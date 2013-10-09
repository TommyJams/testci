<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CFfans extends CI_Controller{

	public function fanPage(){

		$this->load->model('Model');
        $data['featuredCampaigns'] = json_encode($this->Model->getFeaturedCampaign());
		$this->load->view('fanPage_view', $data);
	}

	public function campaignPage(){

		// Loading Model class
		$this->load->model('Model');

		// Inserting values in CampaignCF
      	//$campaign_id = $this->Model->formDetails();

      	$campaign_id = $this->uri->segment(2);
		 
		error_log("Camp Id: ".$campaign_id);

        $data['campaign'] = json_encode($this->Model->campaignDetails($campaign_id));
		$this->load->view('campaign_view', $data);		
	}

	public function campaignEvent(){

		// Get these from http://developers.facebook.com
		$api_key = '248776888603319';
		$secret  = '50f31c2706d846826bead008392e8969';

		include_once '/src/facebook.php';

		$facebook = new Facebook($api_key, $secret);
		$user = $facebook->getUser();

		$data['user'] = $user;

		$this->load->view('campaignevent_view', $data);
	}
}
