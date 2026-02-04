<?php

if(!isset($_GET['search'])){
    exit("No Input");
}

$search = $_GET['search'];

$url = "https://paksimdetails.xyz/K/Zawar.php?search=".$search."&type=mobile";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
