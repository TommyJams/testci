<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CFtour extends CI_Controller{

	public function tourPage(){

	//	$this->load->model('model/tourDetails');

		$this->load->view('tours_view');
	}

	public function campaignPage(){

	//	$this->load->model('model/campaignDetails');

		$this->load->view('campaign_view');
	}
}
?>