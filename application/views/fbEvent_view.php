<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="loginPopupBox" style="display:none;">
    <a id="loginBoxClose" href="#" onClick="popupClose('loginPopupBox')">
    </a>
    <center>
        <h3 id="loginBoxTitle">
            Login With Facebook
        </h3>
		<div id="loginBoxDetails">
			<div class='fb-login-button'  fb_only='true' fb_register='true' size='xlarge' onlogin=facebookLoginCallback(); registration-url='<? print(base_url()); ?>CFfans/campaignEvent/login'></div>
		</div>
    </center>
</div>