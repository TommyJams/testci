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
		$this->load->model('Model');
      	$form_data = $this->Model->formDetails();

		$campaign_id = $form_data;
		error_log($campaign_id);

		$this->load->model('Model');

        $this->load->helper('functions');
        $data['campaign'] = json_encode($this->Model->campaignDetails($campaign_id));

		$this->load->view('campaign_view', $data);
	}

	public function formValues(){

      	$this->load->model('Model');
      	$data = ($this->Model->formDetails());
      	//$this->Model->formDetails();

      	$this->campaignPage($data);
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
        //$tour_id = $this->input->post("tour_id");
        $data['tour_id'] = $this->uri->segment(3);

		$this->load->view('campaignedit_view', $data);
	}
}
?>