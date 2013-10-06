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
		 
		error_log($campaign_id);

        $data['campaign'] = json_encode($this->Model->campaignDetails($campaign_id));
		$this->load->view('campaign_view', $data);		
	}
}
