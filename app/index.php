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
				<!-- row 01 -->
				<a href="#"><li class="clearfix">
						<img src="images/modern-castle-kitchen.png" alt="thumb" class="thumbnail">
						<h2>Full-Room Mansion with Open Kitchen</h2>
						<p class="desc">Rental located in Pheonix, AZ. 2 bedrooms 1.5 baths. </p>

						<span class="price">$2,650/month</span>
				</li></a>

			</ul>
		</div>
	</div>
<script type="text/javascript">
$(document).ready(function(){
  $.ajax({
      url: "http://greektv.upg.gr/api/?type=unijson",
      success: function (data) {

        $('ul').append(data);
        $("a").on("click", function(e){
          e.preventDefault();
          alert('click');
        });
      },
      dataType: 'html'
  });

});
</script>
</body>
</html>
