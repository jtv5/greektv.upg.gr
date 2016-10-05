<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>GreekTV by UPG.GR</title>
  <meta name="author" content="Jake Rocheleau">
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
  	  <p>Write some footery stuff here</p>
  	  <p>The kind that no ones cares about :D</p>
  	  <p>The kind of text that is so damn long that your footer height changes on a smaller screen.</p>
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
