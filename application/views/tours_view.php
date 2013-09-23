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

<script type="text/javascript">
    console.log('Tour Data:',JSON.stringify(
      <?
      foreach($tours as $row){ ?>
      <?
        $tour_id=$row[0];
        print("$tour_id");
      }?>
    ));
</script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="d-tj-bg-overlay">
  <div class="container d-tj-container"> <a href="http://www.tommyjams.com/" class="d-tj-logo"><img src="img/tj.jpg" height="64" alt=""/></a>
    
    <div class="d-tj-box " >
      <div class="row d-tj-tour">
        <div class="col-sm-12 col-xs-12 col-md-6">
          <div class="row" style="margin:0;">
            
              <h3>TOUR 1</h3>
            
          </div>
          <div class="row text-center">
            <div class="col-md-6 col-sm-6  d-tj-tour-left" > 
            <div style="background:black">
            <img src="img/temp/hrc.jpg" alt="">
            </div>
              <h4>
              <span >Hard Rock Cafe</span> Bangalore</h4>
            </div>
            <div class="col-md-6 col-sm-6  d-tj-tour-left">
              <div style="background:black">
             <img src="img/temp/phoenix.jpg" alt="">
             </div>
              <h4><span >Phoenix Market City</span> Chennai</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 d-tj-black-box-container">
          <div class="d-tj-black-box d-tj-tour-right">
            <h4 class="raise" >APPLY BY:</h4>
            <h4 class="tgt" >START CAMPAIGN:</h4>
            <h3>TARGET: Rs.50,000</h3>
            <div class="text-center d-tj-offset-top-40">
              <input type="button" value="APPLY Now">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-tj-black-box d-tj-offset-top-40 d-tj-why">
      <h3 style="margin-top: 0px;">WHY CROWDFUND ?</h3>
      <div class="row d-tj-offset-top-40">
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/temp/2.jpg)"></div>
          <h5 >TommyJams is a vision, an initiative, a spark, which shall illuminate the budding music talent in India.</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/temp/3.jpg)"></div>
          <h5 >TommyJams is a vision, an initiative, a spark, which shall illuminate the budding music talent in India. </h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/temp/31.jpg)"></div>
          <h5>TommyJams is a vision, an initiative, a spark, which shall illuminate the budding music talent in India.</h5>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/temp/66.jpg)"></div>
          <h5 >TommyJams is a vision, an initiative, a spark, which shall illuminate the budding music talent in India.</h5>
        </div>
      </div>
    </div>
    <!-- tour-->
    <div class="d-tj-3-col d-tj-offset-top-30" >
      <div class="d-tj-slide">
        <div class="list_carousel responsive" style="position:relative">
          <ul id="foo5">
            <li>
              <div class=" col-md-12" style="padding: 5px;">
                <h4 class="d-tj-slide-head" >THAALAVATTAM</h4>
                <div class="d-tj-slide-body " style="">
                  <div class="d-tj-slide-img" style="background-image:url(img/temp/66.jpg)">
                    <div class="d-tj-slide-hover-img hide"> <img src="img/tick.png" alt=""/> </div>
                  </div>
                  <div class="d-tj-progress">
                    <div class="d-tj-progress-g"> </div>
                  </div>
                  <div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6">
                      <ul class="list-unstyled  " >
                        <li>
                          <p>90% </p>
                        </li>
                        <li >
                          <p >FUNDED </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6" >
                      <ul class="list-unstyled ">
                        <li>
                          <p>00 </p>
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
            <li>
              <div class=" col-md-12" style="padding: 5px;">
                <h4 class="d-tj-slide-head" >THAALAVATTAM</h4>
                <div class="d-tj-slide-body " style="">
                  <div class="d-tj-slide-img" style="background-image:url(img/temp/2.jpg)">
                    <div class="d-tj-slide-hover-img hide"> <img src="img/cross.png" alt=""/> </div>
                  </div>
                  <div class="d-tj-progress">
                    <div class="d-tj-progress-g"> </div>
                  </div>
                  <div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6">
                      <ul class="list-unstyled">
                        <li>
                          <p>90% </p>
                        </li>
                        <li>
                          <p >FUNDED </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6" >
                      <ul class="list-unstyled">
                        <li>
                          <p>00 </p>
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
            <li>
              <div class=" col-md-12" style="padding: 5px;">
                <h4 class="d-tj-slide-head" >THAALAVATTAM</h4>
                <div class="d-tj-slide-body " style="">
                  <div class="d-tj-slide-img" style="background-image:url(img/temp/3.jpg)">
                    <div class="d-tj-slide-hover-img hide"> <img src="img/tick.png" alt=""/> </div>
                  </div>
                  <div class="d-tj-progress">
                    <div class="d-tj-progress-g"> </div>
                  </div>
                  <div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6">
                      <ul class="list-unstyled">
                        <li>
                          <p>90% </p>
                        </li>
                        <li>
                          <p >FUNDED </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6" >
                      <ul class="list-unstyled">
                        <li>
                          <p>00 </p>
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
            <li >
              <div class=" col-md-12" style="padding:5px;">
                <h4 class="d-tj-slide-head" >THAALAVATTAM</h4>
                <div class="d-tj-slide-body " >
                  <div class="d-tj-slide-img" style="background-image:url(img/temp/31.jpg)">
                    <div class="d-tj-slide-hover-img hide"> <img src="img/cross.png" alt=""/> </div>
                  </div>
                  <div class="d-tj-progress">
                    <div class="d-tj-progress-g"> </div>
                  </div>
                  <div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6">
                      <ul class="list-unstyled">
                        <li>
                          <p>90% </p>
                        </li>
                        <li>
                          <p >FUNDED </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6" >
                      <ul class="list-unstyled">
                        <li>
                          <p>00 </p>
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
            <li >
              <div class="col-md-12" style="padding: 5px;">
                <h4 class="d-tj-slide-head" >THAALAVATTAM</h4>
                <div class="d-tj-slide-body " >
                  <div class="d-tj-slide-img" style="background-image:url(img/temp/66.jpg)">
                    <div class="d-tj-slide-hover-img hide"> <img src="img/tick.png" alt=""/> </div>
                  </div>
                  <div class="d-tj-progress">
                    <div class="d-tj-progress-g"> </div>
                  </div>
                  <div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6">
                      <ul class="list-unstyled">
                        <li>
                          <p>90% </p>
                        </li>
                        <li>
                          <p >FUNDED </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6" >
                      <ul class="list-unstyled">
                        <li>
                          <p>00 </p>
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
            <li >
              <div class=" col-md-12" style="padding: 5px;">
                <h4 class="d-tj-slide-head" >THAALAVATTAM</h4>
                <div class="d-tj-slide-body " >
                  <div class="d-tj-slide-img" style="background-image:url(img/temp/2.jpg)">
                    <div class="d-tj-slide-hover-img hide"> <img src="img/cross.png" alt=""/> </div>
                  </div>
                  <div class="d-tj-progress">
                    <div class="d-tj-progress-g"> </div>
                  </div>
                  <div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6">
                      <ul class="list-unstyled">
                        <li>
                          <p>90% </p>
                        </li>
                        <li>
                          <p >FUNDED </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6" >
                      <ul class="list-unstyled">
                        <li>
                          <p>00 </p>
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
            <li >
              <div class=" col-md-12" style="padding: 5px;">
                <h4 class="d-tj-slide-head" >THAALAVATTAM</h4>
                <div class="d-tj-slide-body " >
                  <div class="d-tj-slide-img" style="background-image:url(img/temp/3.jpg)">
                    <div class="d-tj-slide-hover-img hide"> <img src="img/tick.png" alt=""/> </div>
                  </div>
                  <div class="d-tj-progress">
                    <div class="d-tj-progress-g"> </div>
                  </div>
                  <div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6">
                      <ul class="list-unstyled">
                        <li>
                          <p>90% </p>
                        </li>
                        <li>
                          <p >FUNDED </p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-tj-slide-btm col-sm-6 col-xs-6" >
                      <ul class="list-unstyled">
                        <li>
                          <p>00 </p>
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
          <div class="d-tj-thumb img-circle" style="background-image:url(img/temp/2.jpg)"></div>
          <h5>
          Megha & Neehar featured this Sunday on the ONE Bengaluru ONE Music show.
          </h4>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/temp/3.jpg)"></div>
          <h5>
          Megha & Neehar featured this Sunday on the ONE Bengaluru ONE Music show.
          </h4>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/temp/31.jpg)"></div>
          <h5>
          Megha & Neehar featured this Sunday on the ONE Bengaluru ONE Music show.
          </h4>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="d-tj-thumb img-circle" style="background-image:url(img/temp/66.jpg)"></div>
          <h5>
          Megha & Neehar featured this Sunday on the ONE Bengaluru ONE Music show.
          </h4>
        </div>
      </div>
      <div class="text-center d-tj-offset-top-10 " >
        <input class="apply-btn" style="" type="button" value="APPLY Now">
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