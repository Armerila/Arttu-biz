<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="favicon.png" />
		<title> Oulu parking status </title>
	<link type="text/css" rel="stylesheet" href="" />
</head>
<body>
	<section>
		<p>
		This page shows the status of various parking halls in Oulu area. The information is updated every 5-20 minutes, and comes from the public REST-API maintained by the city of Oulu.
		</p>
			<a href="http://wp.oulunliikenne.fi/wordpress/avoin-data/autoliikenne/rest-rajapinnat/">
				<h2>More information behind this link</h2>
			</a>
	</section>

<?php
	header('Access-Control-Allow-Origin: *');
	$url = "https://www.oulunliikenne.fi/public_traffic_api/parking/parking_details.php?parkingid=1";
	$response = file_get_contents($url);
	$data1 = json_decode($response);

	$url = "https://www.oulunliikenne.fi/public_traffic_api/parking/parking_details.php?parkingid=2";
	$response = file_get_contents($url);
	$data2 = json_decode($response);

	$url = "https://www.oulunliikenne.fi/public_traffic_api/parking/parking_details.php?parkingid=3";
	$response = file_get_contents($url);
	$data3 = json_decode($response);

	$url = "https://www.oulunliikenne.fi/public_traffic_api/parking/parking_details.php?parkingid=4";
	$response = file_get_contents($url);
	$data4 = json_decode($response);

	$url = "https://www.oulunliikenne.fi/public_traffic_api/parking/parking_details.php?parkingid=5";
	$response = file_get_contents($url);
	$data5 = json_decode($response);

	$url = "https://www.oulunliikenne.fi/public_traffic_api/parking/parking_details.php?parkingid=6";
	$response = file_get_contents($url);
	$data6 = json_decode($response);

?>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>Parking hall</th>
    <th>Address</th>
    <th>Free spaces</th>
    <th>Total spaces</th>
  </tr>
  <tr>
    <td><? echo $data1->name; ?></td>
    <td><? echo $data1->address; ?></td>
    <td><? echo $data1->freespace; ?></td>
    <td><? echo $data1->totalspace; ?></td>
  </tr>
  <tr>
    <td><? echo $data2->name; ?></td>
    <td><? echo $data2->address; ?></td>
    <td><? echo $data2->freespace; ?></td>
    <td><? echo $data2->totalspace; ?></td>
  </tr>
  <tr>
    <td><? echo $data3->name; ?></td>
    <td><? echo $data3->address; ?></td>
    <td><? echo $data3->freespace; ?></td>
    <td><? echo $data3->totalspace; ?></td>
  </tr>
  <tr>
    <td><? echo $data4->name; ?></td>
    <td><? echo $data4->address; ?></td>
    <td><? echo $data4->freespace; ?></td>
    <td><? echo $data4->totalspace; ?></td>
  </tr>
  <tr>
    <td><? echo $data5->name; ?></td>
    <td><? echo $data5->address; ?></td>
    <td><? echo $data5->freespace; ?></td>
    <td><? echo $data5->totalspace; ?></td>
  </tr>
  <tr>
    <td><? echo $data6->name; ?></td>
    <td><? echo $data6->address; ?></td>
    <td><? echo $data6->freespace; ?></td>
    <td><? echo $data6->totalspace; ?></td>
  </tr>
</table>

 <footer>
	<a href="/">
  	Return to main page</a>.</p>
</footer>

</body>
</html>
