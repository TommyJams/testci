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

		//$campaign_id = $this->uri->segment(2);
		$campaign_id = 1;

		$this->load->model('Model');

        $this->load->helper('functions');
        $data['campaign'] = json_encode($this->Model->campaignDetails($campaign_id));

		$this->load->view('campaign_view', $data);
	}

	public function fanPage(){

		$this->load->model('Model');

        $this->load->helper('functions');
        $data['featuredCampaigns'] = json_encode($this->Model->getFeaturedCampaign());

		$this->load->view('fanPage_view', $data);
	}

	public function campaignEditPage(){

		//$this->load->model('Model');

        //$this->load->helper('functions');
        //$data['featuredCampaigns'] = json_encode($this->Model->getFeaturedCampaign());

		$this->load->view('campaignedit_view');

	}

	public function formValues(){

		$form_data = $this->input->post();
      	// or just the username:
      	$target = $this->input->post("target");

      	error_log($target);
	}
}
?>