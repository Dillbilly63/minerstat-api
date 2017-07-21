<?php

// API EXAMPLE PHP v2.0
// CONTACT: api@minerstat.com

function load($url) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}

$token = "CHANGEME"; // CHANGE IT TO YOUR WEBSITE LOGIN

$json = load("https://minerstat.com/api/v2/getstat/$token");
$data = json_decode($json, true);

// FIX VARIBLES
$total_online_worker=$data['global']['total_online_worker'];
$total_worker=$data['global']['total_worker'];
$total_gpu=$data['global']['total_gpu'];

?>

<html>
<head>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<table style="position: fixed; margin-left: 15%; margin-top: 15%; width: 70%;"  class="pure-table">
<tbody>

<thead>
<tr>
<td>RIG</td>
<td>CRYPTO</td>
<td>UPTIME</td>
<td>STATUS</td>
<td>HASHRATE</td>
<td>SHARES</td>
<td>POOL</td>
</tr>
</thead>

<?php
$x=0;

while ($x != $total_worker) {

$worker=strtoupper($data["list"][$x]);

?>

<tr>
<td><?php echo $data[$worker]['general']['worker'];  ?></td>
<td><?php echo $data[$worker]['general']['crypto'];  ?></td>
<td><?php echo $data[$worker]['general']['uptime'];  ?></td>
<td><?php echo $data[$worker]['general']['status'];  ?></td>
<td><?php echo $data[$worker]['hashrate']['hashrate'];  ?> <?php echo $data[$worker]['hashrate']['hashrate_unit'];  ?></td>
<td><?php echo $data[$worker]['shares']['accepted_share'];  ?> / <?php echo $data[$worker]['shares']['accepted_share'];  ?></td>
<td><?php echo $data[$worker]['general']['pool'];  ?></td>
</tr>

<?php
$x ++;
}

?>

</tbody>
</table>
