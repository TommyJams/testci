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
    
    <? $tours = (json_decode($tours));
    foreach($tours as $tour){ ?>
    <?
      $tour_id = $tour->tour_id;
      $tour_name = $tour->tour_name;
      $applyBy = $tour->applyBy;
      $startCamp = $tour->startCamp;
      $endCamp = $tour->endCamp;
      $tourDate = $tour->tourDate;
      $target = $tour->target;
      $venues = $tour->venues;
      $login_url = $tour->login_url;
    ?>
    <div class="d-tj-box " >
      <div class="row d-tj-tour">
        <div class="col-sm-12 col-xs-12 col-md-6">
          <div class="row" style="margin:0;">
            
              <h3><? print($tour_name); ?></h3>
            
          </div>
          <div class="row text-center">
            <? foreach($venues as $venue){ ?>
            <?
              $venue_name = $venue->venue_name;
              $city = $venue->city;
              $image = $venue->image;
            ?>
            <div class="col-md-6 col-sm-6  d-tj-tour-left" >  
            <div style="background:black">
            <img src="img/temp/<? print($image); ?>" alt="">
            </div>
              <h4>
                <span ><? print($venue_name); ?></span> <? print($city); ?>
              </h4> 
            </div>
            <? 
              } 
            ?>
          </div>
          
        </div>
        <div class="col-sm-12 col-md-6 d-tj-black-box-container">
          <div class="d-tj-black-box d-tj-tour-right">
            <h4 class="raise" >APPLY BY: <? print($applyBy); ?></h4>
            <h4 class="tgt" >START CAMPAIGN: <? print($startCamp); ?></h4>
            <h3>TARGET: <? print($target); ?></h3>
            <div class="text-center d-tj-offset-top-40">
              <input type="button" onclick="window.location.href='<?print($login_url);?>'" value="APPLY NOW">
            <!--  <a type="button" href="editcampaign/<?php // echo $tour_id ?>">APPLY NOW</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <? 
    } 
    ?>
    
    <!--cirle connect-->
    <div class="d-tj-black-box d-tj-offset-top-40 d-tj-circle" >
      <h3>How it works?</h3>
      <div class="visible-lg visible-md d-tj-bg-strip" ></div>
      <div class="row " >
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/down/a.png)"></div>
          <h5 style="color: #000000;">
           <b>Evaluate</b><br>
          Check out the touring venues, see how much money you need to raise via the campaign, and evaluate whether you are up for the effort
          </h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/down/b.png)"></div>
          <h5 style="color: #000000;">
            <b>Launch Campaign</b><br>
            Click the Apply Now button for the respective tour, create a video to be added as your campaign video, fill in all your details, and launch your campaign
          </h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/down/c_1.png)"></div>
          <h5 style="color: #000000;">
          <b>Sell Tickets</b><br>
          Share the campaign with your fans, find innovative ways to promote the campaign, and sell enough tickets to reach the campaign target.
          </h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/down/d.png)"></div>
          <h5 style="color: #000000;">
          <b>Tour</b><br>
          Sit back and relax, while we take you on the tour of your life.
          </h5>
        </div>
      </div>
      <div class="text-center d-tj-offset-top-10 " >
        <input class="apply-btn" style="" onclick="window.location.href='<?print($login_url);?>'" type="button" value="APPLY Now">
      </div>
    </div>
    <!-- /circle-connect-->

    <!-- tour-->
    <div class="d-tj-3-col d-tj-offset-top-30" >
      <div class="d-tj-slide">
        <div class="list_carousel responsive" style="position:relative">
          <ul id="foo5">            
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
              <li>
              <div class=" col-md-12" style="padding: 5px;">
                <h4 class="d-tj-slide-head" ><? print($artist_name); ?></h4>
                <div class="d-tj-slide-body " style="">
                  <div class="d-tj-slide-img" style="background-image:url(img/temp/66.jpg)">
                    <div class="d-tj-slide-hover-img hide"> <img src="img/tick.png" alt=""/> </div>
                  </div>
                  <div class="d-tj-progress">
                    <div class="d-tj-progress-g" style="width:<? print($funded); ?>%;"> </div>
                  </div>
                  <div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6">
                      <ul class="list-unstyled  " >
                        <li>
                          <p><? print($funded); ?>% </p>
                        </li>
                        <li >
                          <p >FUNDED </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6" >
                      <ul class="list-unstyled ">
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
             </li> 
            <? } ?>
          </ul>
          <div class="clearfix"></div>
          <a id="prev5" class="prev" href="#" ></a> <a id="next5" class="next" href="#"  ></a> </div>
      </div>
    </div>
    <!-- /tour--> 

    <div class="d-tj-black-box d-tj-offset-top-30 d-tj-why">
      <h3 style="margin-top: 0px;">WHY CROWDFUND ?</h3>
      <div class="row d-tj-offset-top-40">
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/up/1.png)"></div>
          <h5 ><b>Money</b><br>
            Earn what you deserve. Tired of haggling with the venues over your fee? Simply connect with your fans, and keep all the money that you raise!
          </h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/up/2.png)"></div>
          <h5 ><b>Cross-city tours</b><br>
            It is your chance to go out to different cities, perform in front of different audiences and make that tour you have always dreamt of a reality.
          </h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/up/3.png)"></div>
          <h5><b>Audience</b><br>
            Engage with your audience, share merchandise along with your tickets, connect with them on the day of your performance by using innovative ideas such as singing a song and getting a photograph with the band.
          </h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/up/4.png)"></div>
          <h5 ><b>Promotion</b><br>
            Be promoted by multiple channels in multiple cities as all the forces come together to make your tour a reality.
          </h5>
        </div>
      </div>
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
			$(".d-tj-slide-img").hover(
               function () {
                $(this).find('.d-tj-slide-hover-img').removeClass('hide');
                },
  				function () {
   				$(this).find('.d-tj-slide-hover-img').addClass('hide');
				 }
);	

$('#foo5').carouFredSel({
	
					width: '100%',
					prev: '#prev5',
					next: '#next5',
					scroll: 1
				});
	});
</script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> 
<script type="text/javascript" language="javascript" src="/script/jquery.carouFredSel.packed.js"></script> 
<script type="text/javascript" src="/script/jquery.easing.js"></script> 
<script type="text/javascript" src="/script/jquery.supersized.min.js"></script> 
<script type="text/javascript" src="/script/jquery.supersized.shutter.min.js"></script> 
<script src="/script/tj.js"></script>
</body>
</html>