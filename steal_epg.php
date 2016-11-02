<head>
    <meta charset="utf-8"/>
    </head>
<form action="http://www.digea.gr/ajax_epg.php" method="post">
  Tab:<br><input type="text" name="tab" value="Regional"><br>
Last name:<br><input type="text" name="curdate1" value="2016-11-02 06:00:00"><br>
First name:<br><input type="text" name="curdate2" value="2016-11-03 05:00:00"><br>

<input type="submit" value="Submit">
</form>


<?php

  define('USER_AGENT', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36');

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'http://greektv.upg.gr/myip.php');
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
  curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
  curl_setopt($ch, CURLOPT_USERAGENT, USER_AGENT);
      define('Regional','Regional');
      define('curdate1','2016-11-02 06:00:00');
      define('curdate2','2016-11-03 05:00:00');
      define('COOKIE_FILE', '/tmp/cookie.txt');
      $post_data = array(
          'Regional' => Regional,
          'curdate1' => curdate1,
          'curdate2' => curdate2
      );
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
      curl_setopt($ch, CURLOPT_URL, 'http://www.digea.gr/ajax_epg.php');
      curl_setopt($ch, CURLOPT_POST, 0);
      $postResult1 = curl_exec($ch);
    echo $postResult1;
?>
