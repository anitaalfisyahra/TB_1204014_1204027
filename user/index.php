<?php

session_start();
require '../funcions.php';
 if( !isset($_SESSION["login"])){
 	header("location: ../login.php");
 }elseif (!isset($_SESSION["user"])) {
 		header("location: ../admin/");
 }
 
 $datadiri = '0';
 $result = mysqli_query($conn,"SELECT * FROM bis2 WHERE niknumber = 0 AND asal = 'balam'");
 $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Tugas Besar
	</title>
	<link rel="stylesheet" type="text/css" href="../style.css">

		<style type="text/css">
		.login{
			float: right;
			font-style: Smoolthan;
			font-size:20px;
			font-family:Agency FB;
			color:#fff;
			margin-right: 20px;

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
			<li><a href="booking2.php">Royal</a></li>
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
</body>
</html>