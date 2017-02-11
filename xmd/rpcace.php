<?php
require_once 'jsonRPCClient.php';

  $bitcoin = new jsonRPCClient('http://xmdcoin4.cloudapp.net:63667/json_rpc');

  echo "<pre>\n";
  print_r($bitcoin->getlastblockheader()); echo "\n";
//  echo "Received: ".$bitcoin->f_get_blockchain_settings()."\n";
  echo "</pre>";

  ?>
