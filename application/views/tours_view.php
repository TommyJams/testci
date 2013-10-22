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
    
    <!--cirle connect-->
    <div class="d-tj-black-box d-tj-offset-top-30 d-tj-circle" >
      <h3>EVENTS</h3>
      <div class="visible-lg visible-md d-tj-bg-strip" ></div>
      <div class="row " >
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/down/a.png)"></div>
          <h5>
           Evaluate and Launch tour
          </h4>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/down/b.png)"></div>
          <h5>
            Launch Campaign
          </h4>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/down/c_1.png)"></div>
          <h5>
          Sell Tickets
          </h4>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/down/d.png)"></div>
          <h5>
          Tour!
          </h4>
        </div>
      </div>
      <div class="text-center d-tj-offset-top-10 " >
        <input class="apply-btn" style="" onclick="window.location.href='<?print($login_url);?>'" type="button" value="APPLY Now">
      </div>
    </div>
    <!-- /circle-connect-->
    <footer class="footer-container">
      <div class="col-md-6 col-sm-6 col-xs-6 footer-p">
        <p >Copyright &copy; 2013 - All Rights Reserved</p>
      </div>
      <div class="col-md-6 col-sm-6 social col-xs-6 footer-p" >
        <div class="pull-right"> <a class=" social-icons" href="https://www.facebook.com/tommyjams.live" target="_blank" style="cursor:pointer;background:url(img/fb-icon.png) no-repeat;"></a> <a class=" social-icons" href="http://twitter.com/TommyJams" target="_blank" style="cursor:pointer;background:url(img/tw-icon.png) no-repeat;"></a> <a class=" social-icons" href="http://www.tommyjams.com/blog" target="_blank" style="cursor:pointer;background:url(img/blog-icon.png) no-repeat;"></a> </div>
      </div>
    </footer>
  </div>
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