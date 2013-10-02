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
  <div class="container d-tj-container"> <a href="http://www.tommyjams.com/" class="d-tj-logo"><img src="/img/tj.jpg" height="64" alt=""/></a>
    <?  $campaign = (json_decode($campaign));
        foreach($campaign as $campaign) { ?>
        <?    
          $raised = $campaign->raised;
          $totalPledges = $campaign->totalPledges;
          $target = $campaign->target;
          $days_to_go = $campaign->days_to_go;
          $tourDate = $campaign->tourDate;
          $venues = $campaign->venues;
          $pledges = $campaign->pledges;
          $campaign_desc = $campaign->campaign_desc;
          $fb = $campaign->fb;
          $twitter = $campaign->twitter;
          $blog = $campaign->blog;
          $website = $campaign->website; 
          $scloud = $campaign->scloud;
          $rever = $campaign->rever;
          $youtube = $campaign->youtube;
          $myspace = $campaign->myspace;
          $gplus = $campaign->gplus;
          $artist_name = $campaign->artist_name;
        ?>

    <div class="d-tj-box " >
      <div class="row d-tj-tour">
        <div class="col-sm-12 col-xs-12 col-md-7"> 
          <iframe title="YouTube video player" class="d-tj-video" width="535" height="300" 
          src="http://www.youtube.com/embed/6X3zUh8RqbY?hd=1" frameborder="0" allowfullscreen></iframe>
        <div class="col-sm-12 col-md-5 d-tj-black-box-container" >
          <div class="d-tj-black-box d-tj-tour-right" > 
            <? if(isset($raised)){ ?>
              <h4 class="raise">RAISED : Rs. <? print($raised); ?> [<? print($totalPledges); ?> PLEDGES]</h4>
            <? }?>
            <? if(!isset($raised)){ ?>
              <h4 class="raise">RAISED : Rs. 0<? print($raised); ?> [<? print($totalPledges); ?> PLEDGES]</h4>
            <? }?>    
            <h4 class="tgt" >TARGET : Rs. <? print($target); ?></h4>
            <h3><? print($days_to_go); ?> DAYS TO GO</h3>
            <div class="text-center d-tj-offset-top-40">
              <input type="button" value="PLEDGE NOW">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div  class="d-tj-artist-container d-tj-offset-top-40">
      <div> 
        <!--Artist-->
        <div class="col-md-7 d-tj-artist" >
          <h3 style="margin-top: 5px;"><? print($artist_name); ?></h3>
          <? foreach($venues as $venue){ ?>
            <?
              $venue_name = $venue->venue_name;
              $city = $venue->city;
              $image = $venue->image;
            ?>
          <div class="col-md-12 col-sm-12 col-xs-6 d-tj-venue-box">
            <div class="col-md-4 col-xs-12 col-sm-5 d-tj-p0"> <img src="img/<? print($image); ?>" alt="" style="max-height: 150px;"></div>
            <div class="col-md-1"></div>
            <div class="col-md-7 col-xs-12 col-sm-6 d-tj-p0" >
              <h4 >
                <span ><? print($venue_name); ?> <br>
                </span> <? print($city); ?>
              </h4>
            </div>
          </div>
          <? 
            } 
          ?>
          <div class="clearfix"></div>
          <!--date-->
          <div class="d-tj-offset-top-30">
            <h4>TOUR DATE: <? print($tourDate); ?></h4>
          </div>
          <!--/date--> 
          <!-- social-->
          <div>
            <ul class=" list-unstyled social-list clear-fix">
            <?           
              if($fb!="")
              {
                print("<li ><a href='$fb' title='Facebook' alt='Facebook' target='_blank' class='social-list-facebook'></a></li >");
              }
              if($twitter!="")
              { 
                print("<li ><a href='$twitter' title='Twitter' alt='Twitter' target='_blank' class='social-list-twitter'></a></li >"); 
              }
              if($blog!="")
              {
                print("<li ><a href='$blog' title='Blog' alt='Blog' target='_blank' class='social-list-blog'></a></li >"); 
              }
              if($website!="")
              {
                print("<a href='$website' rel='me' target='_blank' style='float:left; width:auto; height:auto;'><img src='img/reverbnation.png' /></a>"); 
              }
              if($scloud!="")
              {
                print("<a href='$scloud' rel='me' target='_blank' style='float:left; width:auto; height:auto;'><img src='img/reverbnation.png' /></a>"); 
              }
              if($rever!="")
              {
                print("<a href='$rever' rel='me' target='_blank' style='float:left; width:auto; height:auto;'><img src='img/reverbnation.png' /></a>"); 
              }     
              if($youtube!="")
              { 
                print("<a href='$youtube' rel='me' target='_blank' style='float:left; width:auto; height:auto;'><img src='img/youtube.png' /></a>"); 
              }             
              if($myspace!="")
              {
                print("<a href='$myspace' rel='me' target='_blank' style='float:left; width:auto; height:auto;'><img src='img/myspace.png' /></a>"); 
              }             
              if($gplus!="")
              { 
                print("<a href='$gplus' rel='me' target='_blank' style='float:left; width:auto; height:auto;'><img src='img/gplus.png' /></a>"); 
              }
            ?>
            </ul>
          </div>
          <div class="clearfix"></div>
          <!-- /social-->
          
          <div class="d-tj-offset-top-20">
            <h5><? print($campaign_desc); ?></h5>
            <img src="img/guitar.png" alt=""  style="width: 100%;">
            <h5 class="d-tj-offset-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</h5>
          </div>
        </div>
        <!--/Artist--> 
        <!-- Pledge-->
        <div class="col-md-5 ">
          <div class="row">
            <div class="d-tj-pledge">
              <? foreach($pledges as $pledge){ ?>
              <?
                $amount = $pledge->amount;
                $pledge_desc = $pledge->desc;
              ?>
              <div style="">
                <h4>PLEDGE  AMT <? print($amount); ?></h4>
                <h5><? print($pledge_desc); ?></h5>
              </div>
              <div class="seperator" ></div>
              <? 
                } 
              ?>
            </div>
            <div class=" d-tj-offset-top-30 pledge-btn" >
              <input type="button" value="PLEDGE NOW" style="">
            </div>
          </div>
        </div>
        <!--  /Pledge--> 
      </div>
      <div class="clearfix"></div>
    </div>
    <footer class="footer-container">
      <div class="col-md-6 col-sm-6 col-xs-6 footer-p">
        <p>Copyright &copy; 2013 - All Rights Reserved</p>
      </div>
      <div class="col-md-6 col-sm-6 social col-xs-6 footer-p" >
        <div class="pull-right"> <a class=" social-icons" href="https://www.facebook.com/tommyjams.live" target="_blank" style="cursor:pointer;background:url(img/fb-icon.png) no-repeat;"></a> <a class=" social-icons" href="http://twitter.com/TommyJams" target="_blank" style="cursor:pointer;background:url(img/tw-icon.png) no-repeat;"></a> <a class=" social-icons" href="http://www.tommyjams.com/blog" target="_blank" style="cursor:pointer;background:url(img/blog-icon.png) no-repeat;"></a> </div>
      </div>
    </footer>
    <? 
    } 
    ?>
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
<script type="text/javascript" src="/script/jquery.supersized.min.js"></script> 
<script type="text/javascript" src="/script/jquery.supersized.shutter.min.js"></script> 
<script type="text/javascript" language="javascript" src="/script/jquery.carouFredSel.packed.js"></script> 
<script type="text/javascript" src="/script/jquery.easing.js"></script> 
<script src="/script/tj.js"></script>
</body>
</html>