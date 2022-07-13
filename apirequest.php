<?php

include_once ("Client/PostcodeClient.php");

$token = "<d439d0021a682baf0cb9c280664223fb>";
$client = new Client/PostcodeClient($d439d0021a682baf0cb9c280664223fb);
$address = $client->fetchAddress($_GET['p'], $_GET['h']);

$returnstmt = $address->getStreet()." ".$_GET['h']."<br>";
$returnstmt .= strtoupper($_GET['p'])."&nbsp;&nbsp;".$address->getCity();
echo $returnstmt;