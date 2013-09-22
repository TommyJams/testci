<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CFtour extends CI_Controller{

	public function tourPage(){

		$this->load->model('Model');

        $this->load->helper('functions');
        $data['tours'] = createResponse($this->Model->tourDetails());

		$this->load->view('tours_view', $data);
	}

	public function campaignPage(){

	//	$this->load->model('model/campaignDetails');

		$this->load->view('campaign_view');
	}
}
?>