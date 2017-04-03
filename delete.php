<?php
	session_start();
	if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

$id = $_GET['id'];

$sql = "DELETE FROM pokemon WHERE id = $id";
mysqli_query($conn,$sql);

echo $sql;
//no need to refresh
header('location:admin.php');
}
?>