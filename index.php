<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>GreekTV by UPG.GR</title>
  <meta name="author" content="Ioannis Kokkinis">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  <script type="text/javascript" src="retina.js"></script>
<!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>
	<div id="view">
		<header>
			<h1>GreekTV by UPG.GR</h1>
		</header>

		<div id="container">
			<ul>
			</ul>
		</div>
	</div>
 <div class="push"></div>
  <footer class="footer">
    <p>2016 &copy; upg.gr | Available in : <a href="https://my.roku.com/add/upggrtv" target="new">ROKU</a> - AppleTV - <a href="https://github.com/upggr/GreekTV.bundle" target="new">Plex</a> - <a href="http://greektv.upg.gr">Web</a> - iOS - <a href="http://greektv.upg.gr/api/?type=vlc" target="new">VLC</a> | Questions? Email me : <a href="mailto:info@upg.gr">info@upg.gr</a> | <a href="https://github.com/upggr" target="new">Github</a> | <a href="facebook.com/greektvroku" target="new">Facebook</a> | <a href="http://greektv.upg.gr/api/?type=all" target="new">Status</a></p>
    <p>Disclaimer : GreekTV is not affiliated with any TV stations and is using publicly available streams as listed here : <a href="http://greektv.upg.gr/api/?type=web" target="_blank">list</a>. This is an <a href="https://github.com/upggr/greektv.upg.gr" target="_blank">opensource project</a> and we are not making any money of it! Service is provided for free as is. We are merely a webplayer playing public streams. All product names, logos, and brands are property of their respective owners. We are not affiliated with any other service apart from our free roku private channel (Some people might have forked our code or created plugins for different platforms using our API)</p>
  </footer>

<script type="text/javascript">
$(document).ready(function(){
  $.ajax({
      url: "http://greektv.upg.gr/api/?type=unijson",
      success: function (data) {

        $('ul').append(data);
      },
      dataType: 'html'
  });

  $(window).resize(function(){
			    var footerHeight = $('.footer').outerHeight();
			    var stickFooterPush = $('.push').height(footerHeight);

    			$('.view').css({'marginBottom':'-' + footerHeight + 'px'});
		    });

    		$(window).resize();
});
</script>
</body>
</html>
