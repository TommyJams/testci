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

    $campaign_id = $this->uri->segment(2);
    $rsvp = $this->uri->segment(3);

		error_log("Camp Id: ".$campaign_id);

    if(isset($rsvp) && $rsvp == 'rsvp')
    {
      parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);

      /*if(isset($_GET['code']))
      {
          error_log('Authentication Code exists');

          //Validate the code first
          $validCode = $this->Model->validateFBCode($_GET['code']);

          if($validCode == false)
          {
              redirect(base_url().'tours');
          }
          else
          {
              $data['getTourDetail'] = json_encode($this->Model->getTourDetail($tour_id));
              $this->load->view('campaignedit_view', $data);
          }
      }
      else if(isset($_GET['error']))
      {
          error_log('Authentication Error: '.$_GET['error']);
          redirect(base_url().'tours');
      }
      else
      {
          error_log('No Authentication done');
          redirect(base_url().'tours');
      }*/

      $data['fbEvent'] = json_encode($this->Model->joinFBEvent($_GET['code'],$campaign_id));
      $data['campaign'] = json_encode($this->Model->campaignDetails($campaign_id));
      $this->load->view('campaign_view', $data);
    }
    else
    {
      $data['campaign'] = json_encode($this->Model->campaignDetails($campaign_id));
  		$this->load->view('campaign_view', $data);
    }
	}

	public function campaignEvent(){

		require_once('/src/facebook.php');

  		$config = array(
    				'appId' => '248776888603319',
    				'secret' => '50f31c2706d846826bead008392e8969',
  		);

  		$facebook = new Facebook($config);
  		$user_id = $facebook->getUser();

      $data['user_id'] = $user_id;
      $data['facebook'] = $facebook;
      $data['event_id'] = 0;

      $this->load->view('campaignevent_view', $data);     
	}

	public function postLink(){

		require_once('/src/facebook.php');

  		$config = array(
    				'appId' => '248776888603319',
    				'secret' => '50f31c2706d846826bead008392e8969',
  		);

  		$facebook = new Facebook($config);
  		$user_id = $facebook->getUser();

  		$data['user_id'] = $user_id;
  		$data['facebook'] = $facebook;

		  $this->load->view('postlink_view', $data);
	}
}
