<?php
function doMagic($url)
{
  $curl = curl_init();

  $header[0] = "Accept: */*";
  $header[] = "Connection: keep-alive";
  $header[] = "Accept-Language: en-US,en;q=0.8,el;q=0.6,fr;q=0.4,ru;q=0.2";
  $header[] = 'If-None-Match: "5813d625-2fe"';
  $header[] = "Origin: http://mybeststream.xyz";
  $header[] = "DNT: 1";

  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
");
  curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
  curl_setopt($curl, CURLOPT_REFERER, "http://mybeststream.xyz/t.html");
  curl_setopt($curl, CURLOPT_ENCODING, "gzip, deflate, sdch");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_TIMEOUT, 30);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION,true);
  curl_setopt($curl, CURLINFO_HEADER_OUT, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

  $html = curl_exec($curl);
  //echo 'Curl error: '. curl_error($curl);
  $info = curl_getinfo($curl);
  echo '<pre>';
  print_r($info['request_header']);
  echo '</pre>';

echo curl_getinfo($curl, CURLINFO_HTTP_CODE);

  curl_close($curl);

  echo $html;
}
?>

<?php
$url="http://teste.mybeststream.xyz/pt/alphacyprus295/index.m3u8";
doMagic($url)
 ?>
