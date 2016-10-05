
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Greek TV by UPG.GR</title>
	<link rel="stylesheet"  href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.js"></script>
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
	<div data-role="page" class="type-interior">

		<div data-role="header" data-theme="f">
		<h1>Greek TV by UPG.GR</h1>
		<a href="" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="http://greektv.upg.gr/api/?type=all" target="new" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Status</a>
	</div><!-- /header -->

	<div data-role="content">
		<div class="content-primary">
		<ul data-role="listview">

        <?php
$url = 'http://greektv.upg.gr/api/?type=web';
$result = file_get_contents($url);
$xml = new SimpleXMLElement($result);
foreach ($xml->channel->item as $item) {
    foreach ($item as $item2) {
        $title = $item2->attributes()->title;
        $imgurl = $item2->attributes()->sdposterurl;
        $hlsurl = $item2->attributes()->url;
        $type = $item2->attributes()->streamformat;
        $desc = $item2->attributes()->genre1;
        echo "<li>
	<a target='_new' href='http://greektv.upg.gr/upgplayer.html?m3u8=".$hlsurl.'&poster=img/'.$imgurl.'&type='.$type.'&channel='.$title."&target='>
	<img src='".$imgurl."'>
	<h3>".$title.'</h3>
	<p>'.$desc.'</p>
	</a></li>';
    }
}
?>



		</ul>
		</div><!--/content-primary -->



	</div><!-- /content -->

	<div data-role="footer" class="footer-docs" data-theme="c">
		<p class="jqm-version"></p>
		<p>2016 &copy; upg.gr | Available in : <a href="https://my.roku.com/add/upggrtv" target="new">ROKU</a> - AppleTV - <a href="https://github.com/upggr/GreekTV.bundle" target="new">Plex</a> - <a href="http://greektv.upg.gr">Web</a> - iOS - <a href="http://greektv.upg.gr/api/?type=vlc" target="new">VLC</a> | Questions? Email me : <a href="mailto:info@upg.gr">info@upg.gr</a> | <a href="https://github.com/upggr" target="new">Github</a> | <a href="facebook.com/greektvroku" target="new">Facebook</a> | <a href="http://greektv.upg.gr/api/?type=all" target="new">Status</a></p>
	</div>
	<div data-role="footer" class="footer-docs" data-theme="c">
		<p class="jqm-version"></p>
		<p>Disclaimer : GreekTV is not affiliated with any TV stations and is using publicly available streams as listed here : <a href="http://greektv.upg.gr/api/?type=web" target="_blank">list</a>. This is an <a href="https://github.com/upggr/greektv.upg.gr" target="_blank">opensource project</a> and we are not making any money of it! Service is provided for free as is. We are merely a webplayer playing public streams. All product names, logos, and brands are property of their respective owners. We are not affiliated with any other service apart from our free roku private channel (Some people might have forked our code or created plugins for different platforms using our API)</p>
	</div>
	</div><!-- /page -->
	</body>
	</html>
