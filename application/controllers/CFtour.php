<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CFtour extends CI_Controller{

	public function tourPage(){

		$this->load->model('Model');

        $this->load->helper('functions');
        $data['tours'] = json_encode($this->Model->tourDetails());

		$this->load->view('tours_view', $data);
	}

	public function campaignPage(){

		$this->load->model('Model');

        $this->load->helper('functions');
        $data['campaign'] = json_encode($this->Model->campaignDetails());

		$this->load->view('campaign_view', $data);
	}
}
?>