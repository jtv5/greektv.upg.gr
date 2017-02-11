<?php
require_once 'jsonRPCClient.php';

  $bitcoin = new jsonRPCClient('http://xmdcoin4.cloudapp.net:63667/json_rpc');

  echo "<pre>\n";
  print_r($bitcoin->getinfo()); echo "\n";
  echo "Received: ".$bitcoin->getreceivedbylabel("Your Address")."\n";
  echo "</pre>";

  ?>
