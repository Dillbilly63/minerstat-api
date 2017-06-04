
<?php

// API EXAMPLE PHP v1.0
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

// CHANGE IT TO YOUR WEBSITE LOGIN
$token = "XY1234";

$json = load("https://minerstat.com/api/getstat/$token");
$data = json_decode($json, true);

// FIX VARIBLES
$total_online_worker=$data['0']['total_online_worker'];
$total_worker=$data['1']['total_worker'];
$total_gpu=$data['2']['total_gpu'];

// ADD +3, BECAUSE THE FIRST 3 VARIBLE IS FIXED..
$total = $total_worker + 3; 
$x=3;
?>

<table>
<tbody>

<th>
<tr>
<td>WORKER</td>
<td>STATUS</td>
<td>HASHRATE</td>
</tr>
</th>

<?php
while ($x != $total) {
?>

<tr>
<td><?php echo $data[$x]['worker'];  ?></td>
<td><?php echo $data[$x]['status'];  ?></td>
<td><?php echo $data[$x]['hashrate'];  ?> <?php echo $data[$x]['hashrate_unit'];  ?></td>
</tr>

<?php
$x ++;
}

?>

</tbody>
</table>
