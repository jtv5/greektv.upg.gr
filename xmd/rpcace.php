<?php
require_once 'jsonRPCClient.php';

  $bitcoin = new jsonRPCClient('http://user:password@xmdcoin4.cloudapp.net:63667/');

  echo "<pre>\n";
  print_r($bitcoin->getinfo()); echo "\n";
  echo "Received: ".$bitcoin->getreceivedbylabel("Your Address")."\n";
  echo "</pre>";

  ?>
