<?php

include('JsonRpcClient.php');

$api = new JsonRpcClient('http://xmdcoin4.cloudapp.net:63667/json_rpc');
print $api->account_balance('hash', '0f5cd7b89c8d25bab8a033e87e4e93225f8105de1572fe31f7f6ecb48363d232');







//  echo "<pre>\n";
//  print_r($bitcoin->getblockheaderbyhash("hash","0f5cd7b89c8d25bab8a033e87e4e93225f8105de1572fe31f7f6ecb48363d232")); echo "\n";
//  echo "Received: ".$bitcoin->f_get_blockchain_settings()."\n";
//  echo "</pre>";

  ?>
