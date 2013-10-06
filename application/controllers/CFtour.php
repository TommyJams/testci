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
		
		$this->load->helper('functions');

		$response=array('error'=>0,'info'=>null);

		$values=array
		(
			'video-link'	=> $_POST['v-link'],
			'sociallink-1'	=> $_POST['sociallink-1'],
			'sociallink-2'	=> $_POST['sociallink-2'],
			'sociallink-3'	=> $_POST['sociallink-3'],
			'maxIndex'		=> $_POST['maxIndex'],
			'index'			=> $_POST['index'],
			'artistName'	=> $_POST['artistName'],
			'target'		=> $_POST['target']	
		);

		if(isGPC()) $values=array_map('stripslashes',$values);
	
		if(isEmpty($values['artistName']))
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'artistName','message'=>CONTACT_FORM_MSG_INVALID_DATA_NAME);
		}

		if(isEmpty($values['target']))
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'target','message'=>CONTACT_FORM_MSG_INVALID_TARGET);
		}
	
	/*	if(!validateEmail($values['video-link']))
		{
 			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'video-link','message'=>CONTACT_FORM_MSG_INVALID_DATA_MAIL);
		}
	
		if(!validateEmail($values['sociallink-1']))
		{
 			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'sociallink-1','message'=>CONTACT_FORM_MSG_INVALID_DATA_MAIL);
		}

		if(!validateEmail($values['sociallink-2']))
		{
 			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'sociallink-2','message'=>CONTACT_FORM_MSG_INVALID_DATA_MAIL);
		}
		
		if(!validateEmail($values['sociallink-3']))
		{
 			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'sociallink-3','message'=>CONTACT_FORM_MSG_INVALID_DATA_MAIL);
		}	*/
	
		if($response['error']==1) createResponse($response);

		else
		{
			$this->load->model('Model');
      		$campaign_id = $this->Model->formDetails();
      	
      		redirect(base_url()."campaign/$campaign_id");
      	}
	}

	public function insertCampaignDetail(){

		$this->load->model('Model');
      	$campaign_id = $this->Model->formDetails();
      	
      	redirect(base_url()."campaign/$campaign_id");
      	//$this->campaignPage($campaign_id);
	}

	public function campaignEditPage(){

        $tour_id = $this->uri->segment(2);

        $this->load->model('Model');
        $data['getTourDetail'] = json_encode($this->Model->getTourDetail($tour_id));

		$this->load->view('campaignedit_view', $data);
	}
}
?>
