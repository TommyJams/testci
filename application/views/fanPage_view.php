<!DOCTYPE html>
<html>
<head>
<title>TommyJams - Apply Now</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<link href="/stylecf/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/stylecf/tj.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="/stylecf/supersized.css" type="text/css" media="screen" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="d-tj-bg-overlay">
  <div class="container d-tj-container"> <a href="http://www.tommyjams.com/" class="d-tj-logo"><img src="img/tj.jpg" height="64" alt=""/></a> 
    <!--top 2 col-->
   <div class="d-tj-black-box d-tj-offset-top-40 d-tj-why">
      <h3 style="margin-top: 0px;">WHY CROWDFUND ?</h3>
      <div class="row d-tj-offset-top-40">
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/up/1.png)"></div>
          <h5 >Money</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/up/2.png)"></div>
          <h5 >Cross-city tours</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/up/3.png)"></div>
          <h5>Greater Connect with Audience</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/up/4.png)"></div>
          <h5 >Promotion</h5>
        </div>
      </div>
    </div>
    <!--/top 2 col--> 
    <!-- tour-->
    <div class="d-tj-3-c-campaign campaign-tiles-box">
    <div class="row">
      <div class="col-md-12 campaign-tiles" >
        <?
          $featuredCampaigns = (json_decode($featuredCampaigns)); 
          foreach($featuredCampaigns as $campaign){ ?>
          <?
            $campaign_id = $campaign->campaign_id;
            $artist_id = $campaign->artist_id;
            $artist_name = $campaign->artist_name;
            $funded = $campaign->funded;
            $days_to_go = $campaign->days_to_go;
          ?>
        <div class="col-md-3 col-sm-4 col-xs-6 d-tj-offset-top-30 c-tile">
                <h4 class="d-tj-slide-head" ><? print($artist_name); ?></h4>
                <div class="d-tj-slide-body " >
                  <div class="d-tj-campaign-slide-img" style="background-image:url(img/temp/3.jpg)">
                    <div class="d-tj-campaign-slide-hover-img hide"> <img src="img/tick.png" alt=""/> </div>
                  </div>
                  <div class="d-tj-progress">
                    <div class="d-tj-progress-g" style="width:<? print($funded); ?>%;"> </div>
                  </div>
                  <div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6">
                      <ul class="list-unstyled">
                        <li>
                          <p><? print($funded); ?>% </p>
                        </li>
                        <li>
                          <p >FUNDED </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6" >
                      <ul class="list-unstyled">
                        <li>
                          <p><? print($days_to_go); ?> </p>
                        </li>
                        <li>
                          <p>DAYS TO GO </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <? } ?>
      </div> <div class="clearfix"></div>
      </div>
    </div>
    <!-- /tour--> 
<!--bottom 1 col-->
    <div class="col-md-12 d-tj-offset-top-40 who-campaigns-box">
      <div class="who-campaigns">
        <h3>WHO CAMPAIGNS ?</h3> 
        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</h5>
        <div class="text-center ">
        <input class="apply-btn" style="" onClick="window.location.href='/tours'" type="button" value="LEARN MORE">
      </div>   
      </div>
    </div>
    <!--/bottom 1 col--> 
    
  </div>
  <footer class="d-tj-footer">
    <div class="col-md-12 col-sm-12 col-xs-12 footer-main">
      <div class="col-md-3 col-sm-12 col-xs-12 footer-top">
        <div class="col-md-12 f-logo"> <a href="http://www.tommyjams.com/"><img src="img/tj.jpg" height="50" alt=""> </a> </div>
        <div class="col-md-12 f-social">
          <ul class=" list-unstyled social-list clear-fix">
            <li><a href="http://www.facebook.com/tommyjams.live" title="" alt="Facebook" target="_blank" class="social-list-facebook" data-original-title="Facebook"></a></li>
            <li><a href="http://twitter.com/TommyJams" title="" alt="Twitter" target="_blank" class="social-list-twitter" data-original-title="Twitter"></a></li>
            <li class="f-like">
              <iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Ftommyjams.live&amp;width=100&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;send=false&amp;appId=625320827487862" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 f-links ">
        <div class="col-md-3 col-sm-3 col-xs-3 f-artist text-center">
          <ul class="list-unstyled">
            <li>
              <h4>ARTIST</h4>
            </li>
            <li> <a href="/tours">CROWDFUND</a> </li>
          <li> <a href="/index">BOOK EVENTS</a> </li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3 f-venues text-center">
        <ul class="list-unstyled">
          <li>
            <h4 >VENUES</h4>
          </li>
          <li> <a href="/index">BOOK ARTIST</a> </li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3 f-fans text-center">
        <ul class="list-unstyled">
          <li>
            <h4 >FANS</h4>
          </li>
          <li> <a href="/fans">CAMPAIGN</a> </li>
          <li> <a href="/radioone">RADIO ONE</a> </li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3 f-help text-center">
        <ul class="list-unstyled">
          <li>
            <h4 >HELP</h4>
          </li>
          <li> <a href="/help">CONTACT US</a> </li>
          <li> <a href="/aboutus">ABOUT US</a> </li>
          <li> <a href="/press">PRESS</a> </li>
          <li> <a href="/advertise">ADVERTISE</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12 f-ms"> <a><img src="img/m-s-ventures.png" style=""/></a> </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 f-copy">
      <p>COPYRIGHT 2013 - ALL RIGHTS RESERVED</p>
    </div>
  </footer>
</div>
<script src="/script/jquery.js"></script> 
<script src="/script/bootstrap.min.js"></script> 

<script>
		$(document).ready(function(){
			
			$(".d-tj-campaign-slide-img").hover(
               function () {
				   
                $(this).find('.d-tj-campaign-slide-hover-img').removeClass('hide');
                },
  				function () {
   				$(this).find('.d-tj-campaign-slide-hover-img').addClass('hide');
				 }
);	
 
	});
</script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> 

<script type="text/javascript" src="/script/jquery.easing.js"></script> 
<script type="text/javascript" src="/script/jquery.supersized.min.js"></script> 
<script type="text/javascript" src="/script/jquery.supersized.shutter.min.js"></script> 



<script src="/script/tj.js"></script>
</body>
</html>