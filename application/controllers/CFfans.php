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

		// Inserting values in CampaignCF
    //$campaign_id = $this->Model->formDetails();

    $campaign_id = $this->uri->segment(2);
		 
		error_log("Camp Id: ".$campaign_id);

    $data['campaign'] = json_encode($this->Model->campaignDetails($campaign_id));
		$this->load->view('campaign_view', $data);		
	}

	public function campaignEvent(){

		require_once('/src/facebook.php');

  		$config = array(
    				'appId' => '248776888603319',
    				'secret' => '50f31c2706d846826bead008392e8969',
  		);

  		$facebook = new Facebook($config);
  		$user_id = $facebook->getUser();

      if($user_id)
      {
        // We have a user ID, so probably a logged in user.
        // If not, we'll get an exception, which we handle below.
          try
          {
            $ret_obj = $facebook->api('/me/events', 'POST',
                                    array(
                                      'name' => 'Campaign Event',
                                      'start_time' => '2013-10-10'
                                 ));

            $eventID = $ret_obj['id'];
            error_log("Event ID: ". $eventID);
          } 
          catch(FacebookApiException $e) 
          {
            $login_url = $facebook->getLoginUrl( array('scope' => 'create_event'));

            error_log("Get Type: ".$e->getType());
            error_log("Get Message: ".$e->getMessage());

            $this->load->view('fbEvent_view'); 
            
            //echo 'Please <a href="' . $login_url . '">login.</a>';
          }   
      }
      else 
      {
          // No user, so print a link for the user to login
          // To post to a user's wall, we need publish_stream permission
          // We'll use the current URL as the redirect_uri, so we don't
          // need to specify it here.
          $login_url = $facebook->getLoginUrl( array( 'scope' => 'create_event' ) );
          //echo 'Please <a href="' . $login_url . '">login.</a>';
          $this->load->view('fbEvent_view');
      }

      $registrationParam = $this->uri->segment(3);

      if($registrationParam=='login'){

        $login = 1;
        return $login;
      }
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
