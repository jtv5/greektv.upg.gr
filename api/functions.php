<?php
$GLOBALS['cdn'] = 'http://greektv.upg.gr/img/';
function db_connect()
{
    static $connection;
    if (!isset($connection)) {
        $config = parse_ini_file('../../gtv_db.ini');
        $connection = mysqli_connect($config['host'], $config['username'], $config['password'], $config['dbname']);
    }
    if ($connection === false) {
        return mysqli_connect_error();
    }

    return $connection;
}

function db_query($query)
{
    $connection = db_connect();
    $result = mysqli_query($connection, $query);

    return $result;
}

$allitems = 'select * from content order by ord desc';
$activeitems = 'select * from content where active = 1 order by ord desc';

function startapi()
{
    if (isset($_GET['type'])) {
        switch ($_GET['type']) {
    case 'roku':
    header('Content-Type: text/xml');
        db_connect();
        echo '<?xml version="1.0" encoding="UTF-8"?><orml version="1.2" xmlns="http://sourceforge.net/p/openrokn/home/ORML"><channel> <item type="poster" style="flat-episodic-16x9" title="GREEK TV" shortdesc="GreekTV" sdposterurl="pkg:/images/sdvideos.png" hdposterurl="pkg:/images/hdvideos.png">';
        echo db_select("select * from content where type2 = 'tv' and active = '1' and live_upg = 1 order by ord desc", 'roku');
        echo '</item></channel></orml>';
        break;

        case 'greekchannels':
        $aaData = array();
        header('Content-Type: application/json');
            db_connect();
            $rows = array();
            $query ="select * from greekchannels";
            $result = db_query($query);
            if ($result === false) {
                return false;
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $aaData[] = $row;
            }
            $response = array(
          'data' => $aaData,
        );
        if (isset($_REQUEST['sEcho'])) {
            $response['sEcho'] = $_REQUEST['sEcho'];
        }

        echo json_encode($response);

            break;

            case 'addstream':
  if (isset($_GET['channelid']) & isset($_GET['streamurl']) & isset($_GET['streamformat']) & isset($_GET['active']) & isset($_GET['ishd']) & isset($_GET['user'])) {
                db_connect();
                $channelid = $_GET['channelid'];
                $streamurl = $_GET['streamurl'];
                $streamformat = $_GET['streamformat'];
                $active = $_GET['active'];
                $ishd = $_GET['ishd'];
                $user = $_GET['user'];
                $query ="insert into streams (channelid,streamurl,streamformat,active,ishd,user) VALUES ('$channelid','$streamurl','$streamformat','$active','$ishd','$user')";
            //    echo $query;
                $result = db_query($query);
                if ($result === false) {
                    return false;
                }
            echo '<meta http-equiv="refresh" content="0; url=/admin/?thepath=streamurls" />';
          }
          else {echo '<meta http-equiv="refresh" content="0; url=/admin/?thepath=streamurls" />';}
                break;

                case 'editstream':
              if (isset($_GET['streamid']) & isset($_GET['channelid']) & isset($_GET['streamurl']) & isset($_GET['streamformat']) & isset($_GET['active']) & isset($_GET['ishd']) & isset($_GET['user'])) {
                    db_connect();
                    $streamid = $_GET['streamid'];
                    $channelid = $_GET['channelid'];
                    $streamurl = $_GET['streamurl'];
                    $streamformat = $_GET['streamformat'];
                    $active = $_GET['active'];
                    $ishd = $_GET['ishd'];
                    $user = $_GET['user'];
                    $query ="UPDATE streams SET channelid = '$channelid', streamurl = '$streamurl',streamformat = '$streamformat',active = '$active',ishd = '$ishd',user = '$user' where id = '$streamid'";
              //      echo $query;
                    $result = db_query($query);
                    if ($result === false) {
                        return false;
                    }
                echo '<meta http-equiv="refresh" content="0; url=/admin/?thepath=streamurls" />';
              }
              else {echo '<meta http-equiv="refresh" content="0; url=/admin/?thepath=streamurls" />';
              }
                    break;


                case 'deletestream':
      if (isset($_GET['streamid'])) {
                    db_connect();
                    $streamid= $_GET['streamid'];
                    $query ="delete from streams where id = '$streamid'";
                //    echo $query;
                    $result = db_query($query);
                    if ($result === false) {
                        return false;
                    }
                echo '<meta http-equiv="refresh" content="0; url=/admin/?thepath=streamurls" />';
              }
              else {echo '<meta http-equiv="refresh" content="0; url=/admin/?thepath=streamurls" />';}
                    break;

            case 'streams':
            $aaData = array();
            header('Content-Type: application/json');
                db_connect();
                $rows = array();
                $query ="select streams.id,channelid,streamurl,streamformat,active,ishd,bitrate,user,greekchannels.title AS channel from streams left join greekchannels on streams.channelid = greekchannels.id where channelid != 0";
                $result = db_query($query);
                if ($result === false) {
                    return false;
                }
                while ($row = mysqli_fetch_assoc($result)) {
                    $aaData[] = $row;
                }
                $response = array(
              'data' => $aaData,
            );
            if (isset($_REQUEST['sEcho'])) {
                $response['sEcho'] = $_REQUEST['sEcho'];
            }

            echo json_encode($response);

                break;

                case 'channelnames':
                $aaData = array();
                header('Content-Type: application/json');
                    db_connect();
                    $rows = array();
                    $query ="select id,title from greekchannels";
                    $result = db_query($query);
                    if ($result === false) {
                        return false;
                    }
                    while ($row = mysqli_fetch_assoc($result)) {
                        $aaData[] = $row;
                    }


                echo json_encode($aaData);

                    break;

        case 'kodi':
        header('Content-Type: text/plain');
            db_connect();
            echo db_select("select greekchannels.title,greekchannels.channel_order,greekchannels.sd_image,streams.streamurl from greekchannels JOIN streams on greekchannels.id = streams.channelid where greekchannels.type = 'tv' and streams.active = '1' order by greekchannels.channel_order desc", 'kodi');
        //    echo db_select("select * from content where type2 = 'tv' and active = '1' order by ord desc", 'roku');
            break;

            case 'ripurl':
            header('Content-Type: text/plain');
                converturl($_GET['url']);
                break;

                case 'ripm3ulist':
                header('Content-Type: text/plain');
                    convertm3uurl($_GET['url'],$_GET['type2']);
                    break;


                                    case 'enterdb':

                                        enterdb($_GET['url'],$_GET['type2']);
                                        break;


    case 'tvos':
    header('Content-Type: application/javascript');
        db_connect();
        echo 'var Template = function() { return `<?xml version="1.0" encoding="UTF-8" ?><document><catalogTemplate><banner><title>Greek TV by UPG.GR</title></banner><list><section><listItemLockup><title>Greek TV</title><decorationLabel>Live</decorationLabel><relatedContent><grid><section>';
        echo db_select("select * from content where type2 = 'tv' and active = '1'  order by ord desc", 'tvos');
        echo '</section></grid></relatedContent></listItemLockup></section>';
        echo '<section><listItemLockup><title>Greek Radio</title><decorationLabel>Live</decorationLabel><relatedContent><grid><section>';
        echo db_select("select * from content where type2 = 'radio' and active = '1'  order by ord desc", 'tvos');
        echo '</section></grid></relatedContent></listItemLockup></section>';
        echo '</list></catalogTemplate></document>`}';
        break;
    case 'web':
        header('Content-Type: text/xml');
        db_connect();
        echo '<?xml version="1.0" encoding="UTF-8"?><orml version="1.2" xmlns="http://sourceforge.net/p/openrokn/home/ORML"><channel> <item type="poster" style="flat-episodic-16x9" title="GREEK TV" shortdesc="GreekTV" sdposterurl="pkg:/images/sdvideos.png" hdposterurl="pkg:/images/hdvideos.png">';
      //  echo db_select("select * from content where type2 = 'tv' and active = '1'  order by ord desc", 'roku');
        echo db_select("select * from content where type2 = 'tv' and active = '1' and live_upg = 1 order by ord desc", 'roku');
        echo '</item></channel></orml>';
        break;
    case 'plex':
        header('Content-Type: text/xml');
        db_connect();
        echo '<?xml version="1.0" encoding="UTF-8"?><orml version="1.2" xmlns="http://sourceforge.net/p/openrokn/home/ORML"><channel> <item type="poster" style="flat-episodic-16x9" title="GREEK TV" shortdesc="GreekTV" sdposterurl="pkg:/images/sdvideos.png" hdposterurl="pkg:/images/hdvideos.png">';
        echo db_select("select * from content where type2 = 'tv' and active = '1'  order by ord desc", 'roku');
        echo '</item></channel></orml>';
        break;
    case 'all':
         db_connect();
        echo db_select('select * from content order by ord desc', 'all');
        break;
    case 'Select api response':
        echo '';
        break;
    case 'vlc':
  //  header('Content-Type: audio/mpegurl;');
  header('Content-Type: text');
     db_connect();
        echo "#EXTM3U\r\n";
        echo db_select("select * from content where active = '1'  order by ord desc", 'vlc');
    break;
    case 'findactive':
         db_connect();
        echo db_select('select * from content  order by ord desc', 'findactive');
        break;
        case 'skaiurl':
        $url = "www.skai.gr/player/tvlive/";
        $ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$data = curl_exec($ch);
curl_close($ch);
$re = "/<span itemprop=\"contentUrl\" href=\"(.*?)\"><\\/span>/";
preg_match($re, $data, $matches);
echo 'https://www.youtube.com/watch?v='.$matches[1];
break;

case 'skaiurl_redirected':
$url = "www.skai.gr/player/tvlive/";
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$data = curl_exec($ch);
curl_close($ch);
$re = "/<span itemprop=\"contentUrl\" href=\"(.*?)\"><\\/span>/";
preg_match($re, $data, $matches);
$theurl = 'https://www.youtube.com/watch?v='.$matches[1];
header("Location: $theurl");
break;


}
    } else {
        echo "<form>
	<select name='type' onchange='this.form.submit()'>
		<option selected>Select api response</option>
		<option>roku</option>
  		<option>tvos</option>
  		<option>web</option>
		<option>plex</option>
    <option>kodi</option>
		<option>vlc</option>
    <option>ripurl</option>
		<option>all</option>
		<option>findactive</option>
	</select>
	<noscript><input type='submit' value='Submit'></noscript>
	</form><br> Note that -Find active- takes time as it checks every stream individually";
    }
}

function db_select($query, $type)
{
    $rows = array();
    $result = db_query($query);
    if ($result === false) {
        return false;
    }
    $dbres = '';
    while ($row = mysqli_fetch_assoc($result)) {
        switch ($_GET['type']) {
    case 'roku':
    $dbres .= '<item type="'.$row['type'].'" title="'.$row['title'].'" sdposterurl="'.$GLOBALS['cdn'].$row['sdposterurl'].'" hdposterurl="'.$GLOBALS['cdn'].$row['hdposterurl'].'" genre1="'.$row['genre1'].'" url="'.$row['streamurl'].'" ishd="'.$row['ishd'].'" bitrate="'.$row['bitrate'].'" shortdesc="'.$row['description'].'" streamformat="'.$row['streamformat'].'" live="'.$row['live'].'" ></item>';
        break;

        case 'kodi':

        $dbres .= "<item>\r\n<title>".$row['title']."</title>\r\n<link>".$row['streamurl']."</link>\r\n<thumbnail>".$GLOBALS['cdn'].$row['sd_image']."</thumbnail>\r\n</item>\r\n\r\n";
            break;
    case 'tvos':
    $dbres .= '<lockup videoURL="'.$row['streamurl'].'"><img src="'.$GLOBALS['cdn'].$row['hdposterurl'].'" width="250" height="150" /></lockup>';
        break;
    case 'web':
    $dbres .= '<item url="'.$row['streamurl'].'" title="'.$row['title'].'" shortdesc="'.$row['description'].'" sdposterurl="'.$GLOBALS['cdn'].$row['sdposterurl'].'"  type="'.$row['type'].'"></item>';
        break;
    case 'plex':
    $dbres .= '<item id="'.$row['id'].'" url="'.$row['streamurl'].'" title="'.$row['title'].'" shortdesc="'.$row['description'].'" sdposterurl="'.$GLOBALS['cdn'].$row['sdposterurl'].'" hdposterurl="'.$GLOBALS['cdn'].$row['hdposterurl'].'" comments="'.$row['comments'].'" type="'.$row['type'].'" extra1="'.$row['extra1'].'" extra2="'.$row['extra2'].'" active="'.$row['active'].'" genre1="'.$row['genre1'].'" ishd="'.$row['ishd'].'" bitrate="'.$row['bitrate'].'" live="'.$row['live'].'" ></item>';
        break;
    case 'vlc':
    $dbres .= "#EXTINF:0, logo='$row['sdposterurl']' , ".$row['title']."\r\n".$row['streamurl']."\r\n";
        break;
    case 'findactive' :
    ini_set('default_socket_timeout', 2);
    if (is_url_exist($row['streamurl'])) {
        $dbres = 'done - go check <a href="http://greektv.upg.gr/api/?type=all">all channels</a>';
        $constquery = "UPDATE content SET active=1 where id ='".$row['id']."'";
        echo $row['streamurl'].'set to active<br>';
        db_query($constquery);

      //  if (strpos($row['youtubeurl'], 'youtu')  !== false) {  $real_url = shell_exec('livestreamer '.$row['youtubeurl'].' 480p --stream-url');$youtubeurlsquery = "UPDATE content SET streamurl='$real_url' where id ='".$row['id']."'";db_query($youtubeurlsquery);}
    } else {
        $constquery = "UPDATE content SET active=0 where id ='".$row['id']."'";
        db_query($constquery);
    }
        break;
    case 'all':
    $dbres .= $row['title'].' - '.$row['active'].'<br>';
        break;
        }
    }

    return $dbres;
}

function db_error()
{
    $connection = db_connect();

    return mysqli_error($connection);
}

function db_quote($value)
{
    $connection = db_connect();

    return "'".mysqli_real_escape_string($connection, $value)."'";
}

function is_url_exist($url)
{
    $headers = get_headers($url);

    return stripos($headers[0], '200 OK') ? true : false;
}


function convertm3uurl($url,$type2)
{
    $var = fread_url($url);
  if ($type2 == 'hls') {
  //  $re = '/.*,\s*(.*)\n(http:\/\/.*\.m3u8)/';
    $re = '/(http:.*ng).*,\s*(.*)\n(http:\/\/.*\.m3u8)/';
  }
  else {
  //  $re = '/.*,\s*(.*)\n(.*)\n/';
    $re = '/(http:.*ng).*,\s*(.*)\n(.*)\n/';
  }
    preg_match_all($re, $var, $matches);
  //   echo '<pre>';  print_r ($matches);echo '</pre>';
  for ($i = 0; $i < count($matches[2]); $i++) {

    echo "<item>\r\n<title>".$matches[2][$i]."</title>\r\n<link>".$matches[3][$i]."</link>\r\n<thumbnail>".$matches[1][$i]."</thumbnail>\r\n</item>\r\n\r\n";
}
}

function enterdb($url,$type2)
{
    $var = fread_url($url);
  if ($type2 == 'hls') {
  //  $re = '/.*,\s*(.*)\n(http:\/\/.*\.m3u8)/';
    $re = '/(http:.*ng).*,\s*(.*)\n(http:\/\/.*\.m3u8)/';
  }
  else {
  //  $re = '/.*,\s*(.*)\n(.*)\n/';
    $re = '/(http:.*ng).*,\s*(.*)\n(.*)\n/';
  }
    preg_match_all($re, $var, $matches);
  //   echo '<pre>';  print_r ($matches);echo '</pre>';
  for ($i = 0; $i < count($matches[2]); $i++) {
//echo 'channel : '.$matches[2][$i].'<br />';
//echo 'url : '.$matches[3][$i].'<br />';
$chan = $matches[2][$i];
$uri = $matches[3][$i];
$chan = str_replace(" BUP","",$chan);

db_connect();
$query ="select id from greekchannels WHERE title LIKE '%$chan%' LIMIT 1";
$result = db_query($query);
if ($result === false) {
    return false;
}
while ($row = mysqli_fetch_assoc($result)) {
  $chanid = $row['id'];
}

echo $chan.' matched to '.$chanid.'<br />';
$sql = "INSERT IGNORE INTO streams (channelid,streamurl,streamformat,user) VALUES ('$chanid','$uri','$type2','robot')";
$result = db_query($sql);
if ($result === false) {
    return false;
}
//echo $sql.'<br />';
//    echo "<item>\r\n<title>".$matches[2][$i]."</title>\r\n<link>".$matches[3][$i]."</link>\r\n<thumbnail>".$matches[1][$i]."</thumbnail>\r\n</item>\r\n\r\n";
}
}


function converturl($url)
{
    $var = fread_url($url);
    preg_match_all("/a[\s]+[^>]*?href[\s]?=[\s\"\']+".
                  "(.*?)[\"\']+.*?>"."([^<]+|.*?)?<\/a>/",
                  $var, $matches);

    $matches = $matches[1];
    $list = array();
    foreach ($matches as $var) {
        $link = $url.$var;
        $dtitle = $var;
        $dtitle = str_replace('+', ' ', $dtitle);
        $dtitle = str_replace('.', ' ', $dtitle);
        $dtitle = str_replace(' TehMovies com ', '', $dtitle);
        $dtitle = str_replace('%5D', ']', $dtitle);
        $dtitle = str_replace('%5B', '[', $dtitle);
        $dtitle = str_replace('%28', '(', $dtitle);
        $dtitle = str_replace('%29', ')', $dtitle);
        $dtitle = str_replace('%26amp%3B', ' ', $dtitle);
        $dtitle = str_replace('%40', '@', $dtitle);
        $dtitle = str_replace('%2', '-', $dtitle);
        $dtitle = substr($dtitle, 0, -3);
        if ($dtitle != '') {
            echo  "<item>\r\n<title>".$dtitle."</title>\r\n<link>".$link."</link>\r\n<thumbnail></thumbnail>\r\n</item>\r\n\r\n";
        }
    //    echo '<a href="'.$sUrl.'" title="Download '.$dtitle.' via magnet link">'.$dtitle.'</a><br>';
    }
}

function fread_url($url, $ref = '')
{
    if (function_exists('curl_init')) {
        $ch = curl_init();
        $user_agent = 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Safari/7534.48.3';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
        curl_setopt($ch, CURLOPT_HTTPGET, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if (!ini_get('safe_mode')) {
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, $ref);
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
        $html = curl_exec($ch);
        curl_close($ch);
    } else {
        $hfile = fopen($url, 'r');
        if ($hfile) {
            while (!feof($hfile)) {
                $html .= fgets($hfile, 1024);
            }
        }
    }

    return $html;
}

function is_url_exist2($url)
{
    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_HEADER, true);
    curl_setopt($handle, CURLOPT_NOBODY, true);
    curl_setopt($handle, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.4');
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($handle, CURLOPT_TIMEOUT, 10);
    curl_setopt($handle, CURLOPT_ENCODING, 'gzip');
    curl_setopt($handle, CURLOPT_FOLLOWLOCATION, 1);
    $response = curl_exec($handle);
    $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
    if ($httpCode == 200) {
        return true;
    } else {
        return false;
    }

    curl_close($handle);
}
