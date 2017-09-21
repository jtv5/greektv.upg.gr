<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>GreekTV by UPG.GR</title>
  <meta name="author" content="Ioannis Kokkinis">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
  <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  <script>(function(){function t(e){this.path=e;var t=this.path.split("."),n=t.slice(0,t.length-1).join("."),r=t[t.length-1];this.at_2x_path=n+"@2x."+r}function n(e){this.el=e,this.path=new t(this.el.getAttribute("src"));var n=this;this.path.check_2x_variant(function(e){e&&n.swap()})}var e=typeof exports=="undefined"?window:exports;e.RetinaImagePath=t,t.confirmed_paths=[],t.prototype.is_external=function(){return!!this.path.match(/^https?\:/i)&&!this.path.match("//"+document.domain)},t.prototype.check_2x_variant=function(e){var n,r=this;if(this.is_external())return e(!1);if(this.at_2x_path in t.confirmed_paths)return e(!0);n=new XMLHttpRequest,n.open("HEAD",this.at_2x_path),n.onreadystatechange=function(){return n.readyState!=4?e(!1):n.status>=200&&n.status<=399?(t.confirmed_paths.push(r.at_2x_path),e(!0)):e(!1)},n.send()},e.RetinaImage=n,n.prototype.swap=function(e){function n(){t.el.complete?(t.el.setAttribute("width",t.el.offsetWidth),t.el.setAttribute("height",t.el.offsetHeight),t.el.setAttribute("src",e)):setTimeout(n,5)}typeof e=="undefined"&&(e=this.path.at_2x_path);var t=this;n()},e.devicePixelRatio>1&&(window.onload=function(){var e=document.getElementsByTagName("img"),t=[],r,i;for(r=0;r<e.length;r++)i=e[r],t.push(new n(i))})})();</script>
<style>
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  outline: none;
}
html { height: 101%; }
body { font-size: 62.5%; line-height: 1; font-family: Verdana, Arial, Tahoma, sans-serif; }

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
ol, ul { list-style: none; }

blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }

table { border-collapse: collapse; border-spacing: 0; }
img { border: 0; max-width: 100%; }

a { text-decoration: none; }

/** content display **/
#view { display: block;
/**   max-width: 800px; **/
  padding: 0; margin: 0; }

#container { display: block; margin-top: 55px; }
#container ul { }
#container ul a li {
	display: block;
	width: 100%;
	height: 90px;
	border-bottom: 1px solid #b9b9b9;
	border-top: 1px solid #f7f7f7;
	background: #ebebeb;
  background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ffffff) to(#ebebeb));
  background-image: -webkit-linear-gradient(top, #ffffff, #ebebeb);
  background-image:    -moz-linear-gradient(top, #ffffff, #ebebeb);
  background-image:      -o-linear-gradient(top, #ffffff, #ebebeb);
  background-image:         linear-gradient(top, #ffffff, #ebebeb);
}

#container ul a { display: block; position: relative; width: 100%; }
#container ul li h2 { font-size: 2.1em; line-height: 1.3em; font-weight: normal; letter-spacing: -0.03em; padding-top: 4px; color: #55678d; }
#container ul li p.desc { color: #555; font-family: Arial, sans-serif; font-size: 1.3em; line-height: 1.3em; white-space: nowrap; overflow: hidden; }

#container ul li .price { position: absolute; bottom: 10px; left: 90px; font-size: 1.2em; font-weight: bold; color: #6ea247; }

#container ul li img.thumbnail {
	background: #fff;
	display: inline-block;
	float: left;
	padding: 2px;
	margin-top: 6px;
	margin-left: 5px;
	margin-right: 8px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
}

#container ul a:hover li h2 { color: #7287b1; }
#container ul a:hover li p.desc { color: #757575; }

#container ul a:hover li {
background: #efefef;
background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ffffff) to(#efefef));
background-image: -webkit-linear-gradient(top, #ffffff, #efefef);
background-image:    -moz-linear-gradient(top, #ffffff, #efefef);
background-image:      -o-linear-gradient(top, #ffffff, #efefef);
background-image:         linear-gradient(top, #ffffff, #efefef);
}

/** top header bar **/
header {
display: block;
position: fixed;
top: 0;
z-index: 9999;
height: 55px;
width: 100%;
/**  max-width: 800px; **/
border-bottom: 1px solid #262422;
-webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.4);
-moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.4);
box-shadow: 0 2px 2px rgba(0, 0, 0, 0.4);
background: #5a5955;
background: -moz-linear-gradient(top,  #5a5955 0%, #51504c 50%, #494744 51%, #3f3d3a 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5a5955), color-stop(50%,#51504c), color-stop(51%,#494744), color-stop(100%,#3f3d3a));
background: -webkit-linear-gradient(top,  #5a5955 0%,#51504c 50%,#494744 51%,#3f3d3a 100%);
background: -o-linear-gradient(top,  #5a5955 0%,#51504c 50%,#494744 51%,#3f3d3a 100%);
background: -ms-linear-gradient(top,  #5a5955 0%,#51504c 50%,#494744 51%,#3f3d3a 100%);
background: linear-gradient(to bottom,  #5a5955 0%,#51504c 50%,#494744 51%,#3f3d3a 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5a5955', endColorstr='#3f3d3a',GradientType=0 );
}

header h1 { font-size: 2.4em; font-family: Tahoma, Arial, sans-serif; font-weight: bold; line-height: 55px; text-align: center; color: #efefef; text-shadow: 1px 1px 0px #000; }


/** basic media queries **/
@media only screen and (max-width: 480px) {
	#container ul li h2 { font-size: 1.75em; }

	#container ul li img.thumbnail { margin-top: 2px; }
}

@media only screen and (max-width: 320px) {
	#container ul li p.desc { display: none; }
}


/** clearfix **/
.clearfix:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
.clearfix { display: inline-block; }
.footer { height: 30px; width:100%;}
html[xmlns] .clearfix { display: block; }
* html .clearfix { height: 1%; }
</style>
<!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>
	<div id="view">
		<header>
			<h1>GreekTV by UPG.GR _ </h1>
		</header>

		<div id="container">
			<ul>
			</ul>
		</div>
	</div>
 <div class="push"></div>
  <footer class="footer">
    <p>
    2016 &copy; upg.gr |
    Questions? Email us at : <a href="mailto:info@upg.gr">info@upg.gr</a>
    |
    </p>

    <p>Disclaimer : GreekTV is not affiliated with any TV stations and is just reading this list : https://github.com/free-greek-iptv/greek-iptv from github that is (hopefully) using publicly available streams as listed here : <a href="https://github.com/free-greek-iptv/greek-iptv" target="_blank">list</a> (ONLY THE FREE ONES! NO PAYTV). If you are a content owner, or a channel owner and do not want your channel to appear in this website just email me at : info@upg.gr and I will comply instantly.
    This website is opensource and you can run your own by downloading it from <a href="https://github.com/upggr/greektv.upg.gr">here</a>.
    We are merely a webplayer playing public streams. All product names, logos, and brands are property of their respective owners. We are not affiliated with any other service apart from our free roku channels (Some people might have forked our code or created plugins for different platforms using our API without our knowledge and is out of our control)</p>
    <p>
    We might add channels you request to our list but note that we will not be able to provide Alpha Sat or Ant1 sat especially to countries were they are provided by third parties commercially, as their companies sue, and we cannot afford the hassle or the fines. We will also not provide NOVA streams or OTE streams or rogue channels that show movies etc. Any breach of copyright is unintentional and we do not profit from this operation
    </p>
<p>

ΤΟ greektv.upg.gr ειναι ενα opensource project και δεν εχει σκοπο να κανει breach κανενα copyright. Αν σας ανοικει καποιο καναλι, η εχετε copyrights στειλτε μου email στο info@upg.gr για αφαιρεση. Η υπηρεσια προσφερετε δωρεαν για κατοικους εξωτερικου και απλα χρησιμοποιει ρομποτ για να τραβαει καναλια απο το ιντερνετ οπως παρεχονται ελευθερα. δεν ειμαι ανωνυμος, δεν ειμαι σε offshore servers και δε ψαχνω μπλεξιματα με την ασφαλεια :)
</p>
  </footer>

<script type="text/javascript">
$(document).ready(function(){
  $.ajax({
      url: "http://greektv.upg.gr/api/?type=m3u2xml&url=https://raw.githubusercontent.com/free-greek-iptv/greek-iptv/master/android.m3u&type2=",
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
<script type='text/javascript' src='analytics.js'></script>
</body>
</html>
