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
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="/stylecf/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/stylecf/jquery.fancybox.css" type="text/css" media="screen" />
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

<div class="form">
  <div class="modal-content socialModal">
    <div class="modal-header">
      <h4>Add  Link</h4>
    </div>
    <div class="modal-body modal-link">
      <input value="http://" class="input-lg">
    </div>
    <div class="modal-footer"><a href="#" class="btn blk-btn" data-dismiss="modal">Submit</a></div>
  </div>
</div>
</head>
<body>
<div class="d-tj-bg-overlay">
  <div class="container d-tj-container"> <a href="http://www.tommyjams.com/" class="d-tj-logo"><img src="img/tj.jpg" height="64" alt=""/></a>
    <form>
      <div class="d-tj-box " >
        <div class="row d-tj-tour">
          <div class="col-sm-12 col-xs-12 col-md-7 d-tj-video-edit">
            <div class="d-tj-video-edit-bdr">
              <h2>UPLOAD <br>
                YOUR VIDEO</h2>
                <ul class=" list-unstyled social-list ">
                <li ><a  data-toggle="modal" href="#fbModal" title="VideoLink" alt="VideoLink" 
                  target="_blank" class="social-list-facebook-edit openform"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md-5 d-tj-black-box-container" >
            <div class="d-tj-black-box d-tj-tour-right" >
              <h4 class="raise">RAISED : Rs.26,000 [90 PLEDGES]</h4>
              <h4 class="tgt" >TARGET :
                <textarea  type="text" placeholder="ENTER TARGET  AMOUNT [MIN:Rs50000]"></textarea>
              </h4>
              <h3>7 DAYS TO GO</h3>
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
        <h3 style="margin-top: 5px;">
          <input class="form-control input-lg" type="text" placeholder="ARTIST NAME">
        </h3>
        <div class="col-md-12 col-sm-12 col-xs-6 d-tj-venue-box">
          <div class="col-md-4 col-xs-12 col-sm-5 d-tj-p0"> <img src="img/hard-rock.png" alt="" style="max-height: 150px;"></div>
          <div class="col-md-1"></div>
          <div class="col-md-7 col-xs-12 col-sm-6 d-tj-p0" >
            <h4 >HARD ROCK CAFE <br>
              BANGALORE</h4>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-6 d-tj-venue-box">
          <div class="col-md-4 col-xs-12 col-sm-5 d-tj-p0" > <img src="img/phoenix.png" alt="" style="max-height: 150px;"></div>
          <div class="col-md-1 col-xs-12"></div>
          <div class="col-md-7 col-xs-12 col-sm-6 d-tj-p0 d-tj-venue" >
            <h4 >PHOENIX MARKETCITY<br>
              CHENNAI</h4>
          </div>
        </div>
        <div class="clearfix"></div>
        <!--date-->
        <div class="d-tj-offset-top-30">
          <h4>DATES:OCTOBER : 15</h4>
        </div>
        <!--/date--> 
        <!-- social-->
        <div class="social-links" >
          <h4 >UPLOAD SOCIAL LINKS</h4>
          <ul class=" list-unstyled social-list ">
            <li ><a  data-toggle="modal" href="#fbModal" title="Facebook" alt="Facebook" target="_blank" class="social-list-facebook-edit openform"></a></li>
            <li ><a  data-toggle="modal" href="#twModal" title="Twitter" alt="Twitter" target="_blank" class="social-list-twitter-edit openform"></a></li>
            <li ><a  data-toggle="modal" href="#blogModal" title="Blog" alt="Blog" target="_blank" class="social-list-blog-edit openform"></a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        
        <!-- /social--> 
        <!--  Description text editor-->
        <div class="d-tj-offset-top-20 d-tj-description">
          <div class="hero-unit">
            <div id="alerts"></div>
            <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
              <div class="btn-group"> <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
                <ul class="dropdown-menu">
                </ul>
              </div>
              <div class="btn-group"> <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                  <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                  <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                </ul>
              </div>
              <div class="btn-group btn-icon-bold"> <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a> <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a> <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a> <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a> </div>
              <div class="btn-group btn-icon-indent"> <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a> <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a> <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a> <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a> </div>
              <div class="btn-group btn-icon-align" style=""> <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a> <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a> <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a> <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a> </div>
              <div class="btn-group btn-hyper-link" > <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
                <div class="dropdown-menu input-append">
                  <input class="col-md-8 "  placeholder="URL" type="text" data-edit="createLink" style="width: 65%;height: 35px;margin-left: 5px;"/>
                  <button class="btn" type="button">Add</button>
                </div>
                <!-- <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a> --></div>
              <div class="btn-group btn-undo"> <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a> <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a> </div>
              <div class="btn-group btn-pic" > <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
              </div>
              
              <!-- <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">--> 
            </div>
            <div id="editor" > ENTER DESCRIPTION ABOUT CAMPAIGN </div>
          </div>
        </div>
        <!--  /Description text editor--> 
      </div>
      <!--/Artist--> 
      <!-- Pledge-->
      <div class="col-md-5 ">
      <div class="row">
      <div class="d-tj-pledge">
        <div class="pledge">
          <h4>
            <input  class="form-control input-lg pull-left" type="text" placeholder="PLEDGE AMT 1">
            <i class=" btn-delete-pledge pull-right">-</i></h4>
          <div class="clearfix"></div>
          <h5>
            <textarea class="form-control" rows="4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</textarea>
          </h5>
          <div class="seperator" ></div>
        </div>
        <div class="pledge">
          <h4>
            <input  class="form-control input-lg pull-left" type="text" placeholder="PLEDGE AMT 2">
            <i class=" btn-delete-pledge pull-right">-</i></h4>
          <div class="clearfix"></div>
          <h5>
            <textarea class="form-control" rows="4" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</textarea>
          </h5>
          <div class="seperator" ></div>
        </div>
        <div class="pledge">
          <h4>
            <input  class="form-control input-lg pull-left" type="text" placeholder="PLEDGE AMT 3">
            <i class=" btn-delete-pledge pull-right">-</i></h4>
          <div class="clearfix"></div>
          <h5>
            <textarea class="form-control" rows="4" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</textarea>
          </h5>
          <div class="seperator" ></div>
        </div>
        <div id="add-option" ></div>
        <div  class="add-option"><a ><img src="img/add.png" alt="" style=""> ADD OPTION</a></div>
      </div>
      <div class=" d-tj-offset-top-30 pledge-btn" >
      <input type="button" value="SUBMIT" >
    </form>
  </div>
</div>
</div>
<!--  /Pledge-->

</div>
<div class="clearfix"></div>
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
    <div class="col-md-3 col-sm-12 col-xs-12 f-ms"> <a><img src="/img/m-s-ventures.png" /></a> </div>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12 f-copy">
    <p>COPYRIGHT 2013 - ALL RIGHTS RESERVED</p>
  </div>
</footer>
</div>
<script src="/script/jquery.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> 
<script src="/script/external/jquery.hotkeys.js"></script> 
<script src="/script/bootstrap.min.js"></script> 
<script src="/script/external/google-code-prettify/prettify.js"></script> 
<script src="/script/bootstrap-wysiwyg.js"></script> 
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> --> 
<script type="text/javascript" src="/script/supersized.min.js"></script> 
<script type="text/javascript" src="/script/supersized.shutter.min.js"></script> 
<script type="text/javascript" src="/script/jquery.easing.js"></script> 
<script type="text/javascript" src="/script/jquery.fancybox.js"></script> 
<script src="/script/tj.js"></script> 
<script>
$(document).ready(function(){
	
$(".add-option").click(function(){
var addoption = '<div id="t1" class="pledge"><h4><input  class="form-control input-lg pull-left" type="text" placeholder="PLEDGE AMT "><i class=" btn-delete-pledge pull-right">-</i></h4><div class="clearfix"></div>';
addoption +='<h5> <textarea class="form-control" rows="4" ></textarea></h5>';
addoption +=' <div class="seperator" ></div></div></div>';

 $("#add-option").prepend($(addoption).fadeIn('slow'));
 });
   });
   
$('body').on('click', '.btn-delete-pledge', function(){
		var $this = $(this);
		$this.closest('.pledge').fadeOut("slow");
    });
	
	
    $("a.openform").click(function () {
        $.fancybox(
                $('.form').html(),
                {
                    'width'             : 950,
                    'height'            : 1100,
                    'autoScale'         : false,
                    'transitionIn'      : 'none',
                    'transitionOut'     : 'none',
                    'hideOnContentClick': false,
                    'onStart': function () {
                      //On Start callback if needed  
                    }
                 }
            );
    });
</script>
</body>
</html>