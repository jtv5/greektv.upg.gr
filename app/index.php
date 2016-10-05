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

  <div id="footer">
      Sticky Footer
  </div>

<script type="text/javascript">
$(document).ready(function(){
  $.ajax({
      url: "http://greektv.upg.gr/api/?type=unijson",
      success: function (data) {

        $('ul').append(data);
      },
      dataType: 'html'
  });


  $(window).bind("load", function() {

         var footerHeight = 0,
             footerTop = 0,
             $footer = $("#footer");

         positionFooter();

         function positionFooter() {

                  footerHeight = $footer.height();
                  footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";

                 if ( ($(document.body).height()+footerHeight) < $(window).height()) {
                     $footer.css({
                          position: "absolute"
                     }).animate({
                          top: footerTop
                     })
                 } else {
                     $footer.css({
                          position: "static"
                     })
                 }

         }

         $(window)
                 .scroll(positionFooter)
                 .resize(positionFooter)

  });

  
});
</script>
</body>
</html>
