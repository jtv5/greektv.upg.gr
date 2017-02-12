<?php
include('JsonRPC/Client.php');
include('JsonRPC/HttpClient.php');
include('JsonRPC/Request/RequestBuilder.php');
include('JsonRPC/Request/RequestParser.php');
use JsonRPC\Client;

$client = new Client('http://xmdcoin4.cloudapp.net:63667/json_rpc');
$client->getHttpClient()->withDebug();
//$client->authentication('jsonrpc', '19ffd9709d03ce50675c3a43d1c49c1ac207f4bc45f06c5b2701fbdf8929');
$result = $client->getblockheaderbyhash("hash", "0f5cd7b89c8d25bab8a033e87e4e93225f8105de1572fe31f7f6ecb48363d232");
print_r($result);


//$api = new JsonRpcClient('http://xmdcoin4.cloudapp.net:63667/json_rpc');
//echo "<pre>\n";
//print_r($api->getblockheaderbyhash("hash", "0f5cd7b89c8d25bab8a033e87e4e93225f8105de1572fe31f7f6ecb48363d232"));echo "\n";
//echo "</pre>";






//  echo "<pre>\n";
//  print_r($bitcoin->getblockheaderbyhash("hash","0f5cd7b89c8d25bab8a033e87e4e93225f8105de1572fe31f7f6ecb48363d232")); echo "\n";
//  echo "Received: ".$bitcoin->f_get_blockchain_settings()."\n";
//  echo "</pre>";

  ?>
