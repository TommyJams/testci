<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CFtour extends CI_Controller{

	public function tourPage(){

		$this->load->model('Model');

        $this->load->helper('functions');
        $data['tours'] = json_encode($this->Model->tourDetails());
        $data['featuredCampaigns'] = json_encode($this->Model->getFeaturedCampaign());

		$this->load->view('tours_view', $data);
	}

	public function validateDetails(){

		error_log("Validate");
		
		$this->load->model('Model');
      	$campaign_id = $this->Model->formDetails();

      	$response['error']=0;
      	$response['id']=$campaign_id;
      	
      	createResponse($response);
	}

	public function campaignEditPage(){

        $tour_id = $this->uri->segment(2);

        $this->load->model('Model');
        $data['getTourDetail'] = json_encode($this->Model->getTourDetail($tour_id));

		$this->load->view('campaignedit_view', $data);
	}
}
?>
