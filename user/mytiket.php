<?php
session_start();
require '../funcions.php';
 if( !isset($_SESSION["user"])){
 	echo "Harus Login";
 	header("location: login.php");
 	exit;

 }
$niknumber=$_SESSION['niknumber'];
$data = query("SELECT * FROM bis1 WHERE niknumber = $niknumber");
$data2 = query("SELECT * FROM bis2 WHERE niknumber = $niknumber");

$i = 1;


?>


<!DOCTYPE html>
<html>
<head>
	<title>My Tiket</title>
	<link rel="stylesheet" type="text/css" href="../style.css">

		<style type="text/css">
		body{
    		background-position: 50% -5000%;
  		}
		.login{
			float: right;
			font-style: Smoolthan;
			font-size:20px;
			font-family:Agency FB;
			color:#fff;
			margin-right: 20px;

		}

		.table1 {
			font-family: monospace;
			font-size: 20px;
      		font-style: bold;
			color: #444;
			border-collapse: collapse;
			width: 100%;
			border: 1px solid #f2f5f7;
			}

		.table1 tr th{
			background: #35A9DB;
			color: #fff;
			font-weight: normal;
			}
		

		.table1, th, td {
			padding: 8px 20px;
			text-align: center;
			}

		.table1 tr:hover {
			background-color: #f5f5f5;
			}

		.table1 tr:nth-child(even) {
			background-color: #A9E2F3;
			}
		.kotak_login{
			font-family: monospace;
			border: 2px solid white;
			border-radius: 15px;
      		background-color: transparent;
			/*background-color: white;*/
			width: 90%;
			/*meletakkan form ke tengah*/
			margin: 100px auto;
			padding: 30px 20px;

		}
		a{                 
			text-decoration: none;

			}
	</style>
</head>
<body>
	<div class="header">Welcome!
		<div class="login">
			<a href="biodata.php" style="color: white">My Account</a>
			<a href="mytiket.php" style="color: white">My Tiket</a>
			<a href="../logout.php" style="color: white">Logout</a>
		</div>
	</div>
	<div class= "menu">
	 	<ul>
	 		<li><a href="index.php"><img src="../css/busz.png" style="margin-top:7px;width:20px;height:20px"></a></li>
			<li><a href="booking.php">Ekonomi</a></li>
			<li><a href="#">Eksekutif</a></li>
			<li><a href="#">Royal</a></li>
			<li><a href="rating.php">Rating</a></li>
		</ul>
	</div>

	<div class="footer">
			<div class="left"><a>.Tentang Kami</a></div>
			<div class="right"><a>.Contact Kami</a></div>
			<center>
			<div class="mid">
				<img src="../css/fb.png"><a>Sentra TiketQ</a><br>
				<img src="../css/gmail.png"><a>sentratiketq@gmail.com</a><br>
				<img src="../css/ig.png"><a>@sentratiketq</a><br>
				<img src="../css/maps.png"><a>JL.Merdeka Gg.Cendana 1 No.315</a>
			</center>
			</div>
			
	</div>




	<div class="kotak_login">
	<table class="table1">

			<tr>
				<td>NO. </td>
				<td>NIKNUMBER</td>
				<td>USERID</td>
				<td>ASAL</td>
				<td>TUJUAN</td>
				<td>KEBERANGKATAN</td>
				<td>KURSI</td>
				<td>BIS</td>
				<td>KODEBOKING</td>
				<td>BIAYA</td>
			</tr>

			<?php foreach ($data as $dat) : ?>
			<tr>
				<td><?= $i ?></td>
				<td><?=	$dat['niknumber'] ?></td>
				<td><?=	$dat['userid'] ?></td>
				<td><?=	$dat['asal'] ?></td>
				<td><?=	$dat['tujuan'] ?></td>
				<td><?=	$dat['keberangkatan'] ?></td>
				<td><?=	$dat['kursi'] ?></td>
				<td><?=	$dat['bis'] ?></td>
				<td><?=	$dat['kodeboking'] ?></td>
				<td><?=	$dat['harga'] ?></td>
			</tr>

		<?php $i++?>
		<?php endforeach ?>

		<?php foreach ($data2 as $dat) : ?>
			<tr>
				<td><?= $i ?></td>
				<td><?=	$dat['niknumber'] ?></td>
				<td><?=	$dat['userid'] ?></td>
				<td><?=	$dat['asal'] ?></td>
				<td><?=	$dat['tujuan'] ?></td>
				<td><?=	$dat['keberangkatan'] ?></td>
				<td><?=	$dat['kursi'] ?></td>
				<td><?=	$dat['bis'] ?></td>
				<td><?=	$dat['kodeboking'] ?></td>
				<td><?=	$dat['harga'] ?></td>
			</tr>

		<?php $i++?>
		<?php endforeach ?>
	</table>
	</div>

</body>
</html>