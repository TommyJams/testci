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
    <!--top 2 col-->
    <div class=" d-tj-offset-top-40  d-tj-2-col-y-bg">
      <div class="row">
        <div class="col-md-6 d-tj-book-events" >
          <div class="col-md-12 d-tj-book-events-bg" >
            <div class="d-tj-book-events-top"  > </div>
            <div class="text-center d-tj-offset-top-20">
              <input type="button" value="BOOK EVENTS">
            </div>
          </div>
        </div>
        <div class="col-md-6 d-tj-c-tour" >
          <div class="col-md-12 d-tj-c-tour-bg" >
            <div class="d-tj-c-tour-top"  > </div>
            <div class="text-center d-tj-offset-top-20">
              <input type="button" value="CROWDFUND TOURS" >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/top 2 col--> 
    <!-- tour-->
    <div class="d-tj-3-c-campaign d-tj-offset-top-40" >
      <h3>CROWDFUNDING CAMPAIGNS</h3>
      <div class="d-tj-campaign-slide">
        <div class="list_carousel responsive" style="position:relative">
          <ul id="d-tj-c-slide">
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
              <div>
                <h4 class="d-tj-slide-head" ><? print($artist_name); ?></h4>
                <div class="d-tj-slide-body " >
                  <div class="d-tj-campaign-slide-img" style="background-image:url(/img/temp/66.jpg)">
                    <div class="d-tj-campaign-slide-hover-img hide"> <img src="img/tick.png"   alt=""/> </div>
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
      <div class="text-center pull-right" >
        <input class="apply-btn"  type="button" value="MORE CAMPAIGNS">
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- /tour--> 
    
    <!--bottom 2 col-->
    
    <div class="d-tj-offset-top-40  d-tj-col-2">
      <div class="row">
        <div class="col-md-6 d-tj-col-1" >
          <div class="col-md-12 d-tj-col-1-bg" >
            <div class="d-tj-events" >
              <h3>EVENTS</h3>
              <div class="event-ticker">
                <ul>
                  <li>
                    <div class="col-md-12 col-sm-12 col-xs-12 d-tj-offset-top-10 ">
                      <div class="col-md-2 col-xs-3 col-sm-2 d-tj-p0"> <img src="/image/eventTiles/phoenixmall.jpg" alt=""></div>
                      <div class="col-md-10 col-xs-9 col-sm-10 d-tj-p0">
                        <div class="col-md-9 col-sm-9 col-xs-12 d-tj-p0" >
                          <h5>Suraj Mani and The Tattva Trippers @ Phoenix Marketcity</h5>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 event-date" >
                          <h5>5-Oct</h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-12 col-sm-12 col-xs-12 d-tj-offset-top-10 ">
                      <div class="col-md-2 col-xs-3 col-sm-2 d-tj-p0"> <img src="/image/eventTiles/phoenixmall.jpg" alt=""></div>
                      <div class="col-md-10 col-xs-9 col-sm-10 d-tj-p0">
                        <div class="col-md-9 col-sm-9 col-xs-12 d-tj-p0" >
                          <h5>Mind Map @ Phoenix Marketcity</h5>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 event-date" >
                          <h5>5-Oct</h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-12 col-sm-12 col-xs-12 d-tj-offset-top-10 ">
                      <div class="col-md-2 col-xs-3 col-sm-2 d-tj-p0"> <img src="/image/eventTiles/greenhaat.jpg" alt=""></div>
                      <div class="col-md-10 col-xs-9 col-sm-10 d-tj-p0">
                        <div class="col-md-9 col-sm-9 col-xs-12 d-tj-p0" >
                          <h5>Yogi, Shubham Roy and The Ways of the World @ Green Haat</h5>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 event-date" >
                          <h5>20-Sep</h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-tj-col-1 d-tj-network" >
          <div class="col-md-12 d-tj-col-1-bg" >
            <div class="d-tj-network-content" >
              <h3>NETWORK WITH US</h3>
              <div class="col-md-12 col-sm-12 col-xs-12 d-tj-offset-top-20 d-tj-pr10">
                <div class="col-md-2 col-xs-2 col-sm-2 d-tj-p0 d-tj-offset-top-10" > <img src="img/icon_tweet.png" alt=""> </div>
                <div class="col-md-10 col-xs-10 col-sm-10 d-tj-p0" >
                    <!-- Latest tweets -->
                      <div id="latest-tweets"></div>
                    <!-- /Latest tweets -->
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12 d-tj-offset-top-20 d-tj-pr10" >
                <ul class=" list-unstyled social-list clear-fix">
                  <li><a href="http://www.facebook.com/tommyjams.live" title="" alt="Facebook" target="_blank" class="social-list-facebook" data-original-title="Facebook"></a></li>
                 <li><a href="http://twitter.com/TommyJams" title="" alt="Twitter" target="_blank" class="social-list-twitter" data-original-title="Twitter"></a></li>
                  <li><a href="http://www.tommyjams.com/blog" title="" alt="Blog" target="_blank" class="social-list-blog" data-original-title="Blog"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/bottom 2 col--> 
    
    <!--bottom 1 col-->
    <div class="col-md-12 d-tj-offset-top-40" style="background:#000;padding:10px;">
      <div class="footer layout-10 clear-fix">                
          <a href="beta/radioone.php" target="_blank">                  
            <img src="image/icon/icon-partner/icon1.png" alt="" style="margin-left: 10px;"/>                
          </a>              
          <a href="http://mewsic.in" target="_blank">
              <img src="image/icon/icon-partner/icon2.png" alt="" style="margin-left: 10px;"/>                            
          </a>   
          <a href="http://startupfestival.in/startups" target="_blank">                  
            <img src="image/icon/icon-partner/icon3.png" alt="" style="margin-left: 10px;"/>                
          </a>          
          <a href="http://www.microsoft.com/en-in/accelerator/Blog.aspx" target="_blank">                  
            <img src="image/icon/icon-partner/icon4.png" alt="" style="margin-left: 10px;"/>                
          </a>              
          <a href="http://blog.venture-lab.org/index.php/133/venture-lab-is-music-to-tommyjams-ears/" target="_blank">           <img src="image/icon/icon-partner/icon5.png" alt="" style="margin-left: 10px;"/>                     
          </a>
          <a href="http://timesofindia.indiatimes.com/tech/enterprise-it/strategy/A-website-that-helps-in-event-management/articleshow/20646626.cms" target="_blank">
            <img src="image/icon/icon-partner/icon6.png" alt="" style="margin-left: 10px;"/>                
          </a>              
          <a href="http://yourstory.in" target="_blank">                  
            <img src="image/icon/icon-partner/icon7.png" alt="" style="margin-left: 10px;"/>                
          </a>
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
            <li> <a>CROWDFUND</a> </li>
            <li> <a>BOOK EVENTS</a> </li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 f-venues text-center">
          <ul class="list-unstyled">
            <li>
              <h4 >VENUES</h4>
            </li>
            <li> <a>BOOK ARTIST</a> </li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 f-fans text-center">
          <ul class="list-unstyled">
            <li>
              <h4 >FANS</h4>
            </li>
            <li> <a>CAMPAIGN</a> </li>
            <li> <a>RADIO ONE</a> </li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 f-help text-center">
          <ul class="list-unstyled">
            <li>
              <h4 >HELP</h4>
            </li>
            <li> <a>CONTACT US</a> </li>
            <li> <a>ABOUT US</a> </li>
            <li> <a>PRESS</a> </li>
            <li> <a>ADVERTISE</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12 f-ms"> <a><img src="img/m-s-ventures.png" /></a> </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 f-copy">
      <p>COPYRIGHT 2013 - ALL RIGHTS RESERVED</p>
    </div>
  </footer>
</div>
<script src="/script/jquery.js"></script> 
<script src="/script/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>script/main1.js"></script> 
<script>
		$(document).ready(function(){
			
			$(".d-tj-campaign-slide-img").hover(
               function () {
				   
                $(this).find('.d-tj-campaign-slide-hover-img').removeClass('hide');
                },
  				function () {
   				$(this).find('.d-tj-campaign-slide-hover-img').addClass('hide');
				 });	

			$('#d-tj-c-slide').carouFredSel({
					width:null,
					prev: '#prev5',
					next: '#next5',
					scroll: 1
				});
	

	$(".network-ticker").jCarouselLite({
	
		vertical: true,
		hoverPause:true,
		visible: 1,
		auto:2000,
		speed:1000
	});
	$(".event-ticker").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:2000,
		speed:1000
	});
});
</script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> 
<script type="text/javascript" language="javascript" src="/script/jquery.carouFredSel-6.2.1-packed.js"></script> 
<script type="text/javascript" src="/script/jquery.easing.min.js"></script> 
<script type="text/javascript" src="/script/jquery.supersized.min.js"></script> 
<script type="text/javascript" src="/script/jquery.supersized.shutter.min.js"></script> 
<script type="text/javascript" src="/script/jcarousellite_1.0.1c4.js"></script> 
<script src="/script/tj.js"></script>
</body>
</html>