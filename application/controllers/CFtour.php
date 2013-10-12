<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CFtour extends CI_Controller{

    function __construct()
    {
          // Call the parent constructor
          parent::__construct();

          // Load model
          $this->load->model('Model');
    }

	public function tourPage(){

        $this->load->helper('functions');

        $data['tours'] = json_encode($this->Model->tourDetails());
        $data['featuredCampaigns'] = json_encode($this->Model->getFeaturedCampaign());

		$this->load->view('tours_view', $data);
	}

	public function validateDetails(){
		
		$this->load->helper('functions');

		$response = $this->Model->formDetails();

      	createResponse($response);
	}

	public function campaignEditPage(){

        $tour_id = $this->uri->segment(2);

        $data['getTourDetail'] = json_encode($this->Model->getTourDetail($tour_id));

		$this->load->view('campaignedit_view', $data);
	}
}
?>
