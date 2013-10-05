<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CFtour extends CI_Controller{

	public function tourPage(){

		$this->load->model('Model');

        $this->load->helper('functions');
        $data['tours'] = json_encode($this->Model->tourDetails());
        $data['featuredCampaigns'] = json_encode($this->Model->getFeaturedCampaign());

		$this->load->view('tours_view', $data);
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

	public function insertCampaignDetail(){

		$response=array('error'=>0,'info'=>null);

		$values=array
		(
			'video-link'	=> $_POST['v-link'],
			
		);
	
		if(isGPC()) 
			$values=array_map('stripslashes',$values);
	
		/**************************************************************************/
	
		if(!validateEmail($values['video-link']))
		{
 			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'newsletter-form-mail','message'=>NEWSLETTER_FORM_MSG_INVALID_DATA_MAIL);
			createResponse($response);
		}

      	$this->load->model('Model');
      	$campaign_id = $this->Model->formDetails();
      	
      	redirect(base_url()."campaign/$campaign_id");
      	//$this->campaignPage($campaign_id);
	}

	public function fanPage(){

		$this->load->model('Model');

        $data['featuredCampaigns'] = json_encode($this->Model->getFeaturedCampaign());

		$this->load->view('fanPage_view', $data);
	}

	public function campaignEditPage(){

        $tour_id = $this->uri->segment(2);

        $this->load->model('Model');
        $data['getTourDetail'] = json_encode($this->Model->getTourDetail($tour_id));

		$this->load->view('campaignedit_view', $data);
	}
}
?>