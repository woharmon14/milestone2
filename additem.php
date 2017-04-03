<?php
	session_start();
	if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
	include('connection.php');
	mysqli_set_charset($conn,"UTF8");
	if(isset($_POST['add'])){

		$img = $_POST['img'];
		$id = $_POST['id'];
		$name = $_POST['name'];
		$element = $_POST['element'];
		$hp = $_POST['hp'];
		$atk = $_POST['atk'];
		$def = $_POST['def'];
		$total = $_POST['total'];

		$sql = "INSERT INTO pokemon (img, name, id, elem_id, hp, atk, def, total) VALUES ('$img', '$name', '$id', '$element', '$hp', '$atk', '$def', '$total')";
		mysqli_query($conn,$sql);

		header('location:admin.php');

	}
}

?>