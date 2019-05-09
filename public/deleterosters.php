<?php
	include('db/conn.php');
	$idrosters=$_GET['id'];
	mysqli_query($conn,"delete from rosters where id='$idrosters'");
	header('location:rosters.php');

?>