<?php

function display_content(){
	if(isset($_SESSION['username'])){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	// if(isset($_POST['search']) && $_POST['category']!="All"){
	// 	$category = $_POST['category'];
	// 	$sql = "SELECT * FROM pokemon WHERE category = '$category'";
	// }else
	$sql = "SELECT * FROM pokemon";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$img = $row['img'];
		$id = $row['id'];
		$name = $row['name'];
		$element = $row['elem_id'];
		$hp = $row['hp'];
		$atk = $row['atk'];
		$def = $row['def'];
		$total = $row['total'];

		$sql = "SELECT element FROM elem_id WHERE id = '$element'";
		$result2 = mysqli_query($conn,$sql);
		while($r = mysqli_fetch_assoc($result2)){
			$element = $r['element'];
		}

		echo "<div class='xyz col-lg-2 col-xs-6' style='position:relative; height: 420px; width: 200px; text-align: center; border:2px solid #e3e5e8; margin: 10px;'>";
		echo "<div style='position:absolute; bottom: 20px; left: 0; width: 100%'>";
		echo "<img src='$img'>";
		echo "<h3 style='border-bottom: 1px solid #e3e5e8; margin: 10px 0; padding-bottom: 5px;'>$name</h3>";
		echo "<p>Type: $element</p>";
		echo "<p>Atk: $atk</p>";
		echo "<p>Hp: $hp</p>";
		echo "<p>Def: $def</p>";
		echo "<p>Total: $total</p>";
		echo "</div>";
		echo "</div>";
			
		}
	}else {

		echo "
		<div class='row'>
			<div class='col-lg-6' style='text-align: right; margin:10px 20px 0 80px;'>
				<img src='images/stop.png' style='height:450px; width: 450px'>
			</div>

			<div class='col-lg-3' style='border:2px solid #e3e5e8; margin: 120px 0; padding: 20px 10px;'>
			<h4>Please LOG IN FIRST!</h4>
			<hr>
			<a href='login.php' style='color:white; font-weight:bold;'><button>Log In Now</button></a><br><br>
			<a href='register.php' style='color:white; font-weight: bold;' ><button>Register Here</button></a><br><br>

			</div>
		</div> ";
		
	}
} 

function fire_content(){
	if(isset($_SESSION['username'])){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT * FROM pokemon WHERE elem_id='1'";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$img = $row['img'];
		$id = $row['id'];
		$name = $row['name'];
		$element = $row['elem_id'];
		$hp = $row['hp'];
		$atk = $row['atk'];
		$def = $row['def'];
		$total = $row['total'];

		$sql = "SELECT element FROM elem_id";
		$result2 = mysqli_query($conn,$sql);
		while($r = mysqli_fetch_assoc($result2)){
			$element = $r['element'];
		}

		echo "<div class='xyz col-lg-2 col-xs-6' style='position:relative; height: 420px; width: 200px; text-align: center; border:2px solid #e3e5e8; margin: 10px;'>";
		echo "<div style='position:absolute; bottom: 20px; left: 0; width: 100%'>";
		echo "<img src='$img'>";
		echo "<h3 style='border-bottom: 1px solid #e3e5e8; margin: 10px 0; padding-bottom: 5px;'>$name</h3>";
		echo "<p>Type: $element</p>";
		echo "<p>Atk: $atk</p>";
		echo "<p>Hp: $hp</p>";
		echo "<p>Def: $def</p>";
		echo "<p>Total: $total</p>";
		echo "</div>";
		echo "</div>";
			
		}
	}else {

		echo "
		<div class='row'>
			<div class='col-lg-6' style='text-align: right; margin:10px 20px 0 80px;'>
				<img src='images/stop.png' style='height:450px; width: 450px'>
			</div>

			<div class='col-lg-3' style='border:2px solid #e3e5e8; margin: 120px 0; padding: 20px 10px;'>
			<h4>Please LOG IN FIRST!</h4>
			<hr>
			<a href='login.php' style='color:white; font-weight:bold;'><button>Log In Now</button></a><br><br>
			<a href='register.php' style='color:white; font-weight: bold;' ><button>Register Here</button></a><br><br>

			</div>
		</div> ";
		
	}
} 

function grass_content(){
	if(isset($_SESSION['username'])){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT * FROM pokemon WHERE elem_id='3'";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$img = $row['img'];
		$id = $row['id'];
		$name = $row['name'];
		$element = $row['elem_id'];
		$hp = $row['hp'];
		$atk = $row['atk'];
		$def = $row['def'];
		$total = $row['total'];

		$sql = "SELECT element FROM elem_id";
		$result2 = mysqli_query($conn,$sql);
		while($r = mysqli_fetch_assoc($result2)){
			$element = $r['element'];
		}

		echo "<div class='xyz col-lg-2 col-xs-6' style='position:relative; height: 420px; width: 200px; text-align: center; border:2px solid #e3e5e8; margin: 10px;'>";
		echo "<div style='position:absolute; bottom: 20px; left: 0; width: 100%'>";
		echo "<img src='$img'>";
		echo "<h3 style='border-bottom: 1px solid #e3e5e8; margin: 10px 0; padding-bottom: 5px;'>$name</h3>";
		echo "<p>Type: $element</p>";
		echo "<p>Atk: $atk</p>";
		echo "<p>Hp: $hp</p>";
		echo "<p>Def: $def</p>";
		echo "<p>Total: $total</p>";
		echo "</div>";
		echo "</div>";
			
		}
	}else {

		echo "
		<div class='row'>
			<div class='col-lg-6' style='text-align: right; margin:10px 20px 0 80px;'>
				<img src='images/stop.png' style='height:450px; width: 450px'>
			</div>

			<div class='col-lg-3' style='border:2px solid #e3e5e8; margin: 120px 0; padding: 20px 10px;'>
			<h4>Please LOG IN FIRST!</h4>
			<hr>
			<a href='login.php' style='color:white; font-weight:bold;'><button>Log In Now</button></a><br><br>
			<a href='register.php' style='color:white; font-weight: bold;' ><button>Register Here</button></a><br><br>

			</div>
		</div> ";
		
	}
} 

function water_content(){
	if(isset($_SESSION['username'])){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT * FROM pokemon WHERE elem_id='2'";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$img = $row['img'];
		$id = $row['id'];
		$name = $row['name'];
		$element = $row['elem_id'];
		$hp = $row['hp'];
		$atk = $row['atk'];
		$def = $row['def'];
		$total = $row['total'];

		$sql = "SELECT element FROM elem_id";
		$result2 = mysqli_query($conn,$sql);
		while($r = mysqli_fetch_assoc($result2)){
			$element = $r['element'];
		}

		echo "<div class='xyz col-lg-2 col-xs-6' style='position:relative; height: 500px; width: 200px; text-align: center; border:2px solid #e3e5e8; margin: 10px;'>";
		echo "<div style='position:absolute; bottom: 20px; left: 0; width: 100%'>";
		echo "<img src='$img'>";
		echo "<h3 style='border-bottom: 1px solid #e3e5e8; margin: 10px 0; padding-bottom: 5px;'>$name</h3>";
		echo "<p>Type: $element</p>";
		echo "<p>Atk: $atk</p>";
		echo "<p>Hp: $hp</p>";
		echo "<p>Def: $def</p>";
		echo "<p>Total: $total</p>";
		echo "</div>";
		echo "</div>";
			
		}
	}else {

		echo "
		<div class='row'>
			<div class='col-lg-6' style='text-align: right; margin:10px 20px 0 80px;'>
				<img src='images/stop.png' style='height:450px; width: 450px'>
			</div>

			<div class='col-lg-3' style='border:2px solid #e3e5e8; margin: 120px 0; padding: 20px 10px;'>
			<h4>Please LOG IN FIRST!</h4>
			<hr>
			<a href='login.php' style='color:white; font-weight:bold;'><button>Log In Now</button></a><br><br>
			<a href='register.php' style='color:white; font-weight: bold;' ><button>Register Here</button></a><br><br>

			</div>
		</div> ";
		
	}
} 

function elec_content(){
	if(isset($_SESSION['username'])){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT * FROM pokemon WHERE elem_id='4'";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$img = $row['img'];
		$id = $row['id'];
		$name = $row['name'];
		$element = $row['elem_id'];
		$hp = $row['hp'];
		$atk = $row['atk'];
		$def = $row['def'];
		$total = $row['total'];

		$sql = "SELECT element FROM elem_id";
		$result2 = mysqli_query($conn,$sql);
		while($r = mysqli_fetch_assoc($result2)){
			$element = $r['element'];
		}

		echo "<div class='xyz col-lg-2 col-xs-6' style='position:relative; height: 420px; width: 200px; text-align: center; border:2px solid #e3e5e8; margin: 10px;'>";
		echo "<div style='position:absolute; bottom: 20px; left: 0; width: 100%'>";
		echo "<img src='$img'>";
		echo "<h3 style='border-bottom: 1px solid #e3e5e8; margin: 10px 0; padding-bottom: 5px;'>$name</h3>";
		echo "<p>Type: $element</p>";
		echo "<p>Atk: $atk</p>";
		echo "<p>Hp: $hp</p>";
		echo "<p>Def: $def</p>";
		echo "<p>Total: $total</p>";
		echo "</div>";
		echo "</div>";
			
		}
	}else {

		echo "
		<div class='row'>
			<div class='col-lg-6' style='text-align: right; margin:10px 20px 0 80px;'>
				<img src='images/stop.png' style='height:450px; width: 450px'>
			</div>

			<div class='col-lg-3' style='border:2px solid #e3e5e8; margin: 120px 0; padding: 20px 10px;'>
			<h4>Please LOG IN FIRST!</h4>
			<hr>
			<a href='login.php' style='color:white; font-weight:bold;'><button>Log In Now</button></a><br><br>
			<a href='register.php' style='color:white; font-weight: bold;' ><button>Register Here</button></a><br><br>

			</div>
		</div> ";
		
	}
} 

function drag_content(){
	if(isset($_SESSION['username'])){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT * FROM pokemon WHERE elem_id='6'";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$img = $row['img'];
		$id = $row['id'];
		$name = $row['name'];
		$element = $row['elem_id'];
		$hp = $row['hp'];
		$atk = $row['atk'];
		$def = $row['def'];
		$total = $row['total'];

		$sql = "SELECT element FROM elem_id";
		$result2 = mysqli_query($conn,$sql);
		while($r = mysqli_fetch_assoc($result2)){
			$element = $r['element'];
		}

		echo "<div class='xyz col-lg-2 col-xs-6' style='position:relative; height: 420px; width: 200px; text-align: center; border:2px solid #e3e5e8; margin: 10px;'>";
		echo "<div style='position:absolute; bottom: 20px; left: 0; width: 100%'>";
		echo "<img src='$img'>";
		echo "<h3 style='border-bottom: 1px solid #e3e5e8; margin: 10px 0; padding-bottom: 5px;'>$name</h3>";
		echo "<p>Type: $element</p>";
		echo "<p>Atk: $atk</p>";
		echo "<p>Hp: $hp</p>";
		echo "<p>Def: $def</p>";
		echo "<p>Total: $total</p>";
		echo "</div>";
		echo "</div>";
			
		}
	}else {

		echo "
		<div class='row'>
			<div class='col-lg-6' style='text-align: right; margin:10px 20px 0 80px;'>
				<img src='images/stop.png' style='height:450px; width: 450px'>
			</div>

			<div class='col-lg-3' style='border:2px solid #e3e5e8; margin: 120px 0; padding: 20px 10px;'>
			<h4>Please LOG IN FIRST!</h4>
			<hr>
			<a href='login.php' style='color:white; font-weight:bold;'><button>Log In Now</button></a><br><br>
			<a href='register.php' style='color:white; font-weight: bold;' ><button>Register Here</button></a><br><br>

			</div>
		</div> ";
		
	}
} 


function ice_content(){
	if(isset($_SESSION['username'])){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT * FROM pokemon WHERE elem_id='7'";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$img = $row['img'];
		$id = $row['id'];
		$name = $row['name'];
		$element = $row['elem_id'];
		$hp = $row['hp'];
		$atk = $row['atk'];
		$def = $row['def'];
		$total = $row['total'];

		$sql = "SELECT element FROM elem_id";
		$result2 = mysqli_query($conn,$sql);
		while($r = mysqli_fetch_assoc($result2)){
			$element = $r['element'];
		}

		echo "<div class='xyz col-lg-2 col-xs-6' style='position:relative; height: 420px; width: 200px; text-align: center; border:2px solid #e3e5e8; margin: 10px;'>";
		echo "<div style='position:absolute; bottom: 20px; left: 0; width: 100%'>";
		echo "<img src='$img'>";
		echo "<h3 style='border-bottom: 1px solid #e3e5e8; margin: 10px 0; padding-bottom: 5px;'>$name</h3>";
		echo "<p>Type: $element</p>";
		echo "<p>Atk: $atk</p>";
		echo "<p>Hp: $hp</p>";
		echo "<p>Def: $def</p>";
		echo "<p>Total: $total</p>";
		echo "</div>";
		echo "</div>";
			
		}
	}else {

		echo "
		<div class='row'>
			<div class='col-lg-6' style='text-align: right; margin:10px 20px 0 80px;'>
				<img src='images/stop.png' style='height:450px; width: 450px'>
			</div>

			<div class='col-lg-3' style='border:2px solid #e3e5e8; margin: 120px 0; padding: 20px 10px;'>
			<h4>Please LOG IN FIRST!</h4>
			<hr>
			<a href='login.php' style='color:white; font-weight:bold;'><button>Log In Now</button></a><br><br>
			<a href='register.php' style='color:white; font-weight: bold;' ><button>Register Here</button></a><br><br>

			</div>
		</div> ";
		
	}
} 

function norm_content(){
	if(isset($_SESSION['username'])){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT * FROM pokemon WHERE elem_id='8'";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$img = $row['img'];
		$id = $row['id'];
		$name = $row['name'];
		$element = $row['elem_id'];
		$hp = $row['hp'];
		$atk = $row['atk'];
		$def = $row['def'];
		$total = $row['total'];

		$sql = "SELECT element FROM elem_id";
		$result2 = mysqli_query($conn,$sql);
		while($r = mysqli_fetch_assoc($result2)){
			$element = $r['element'];
		}

		echo "<div class='xyz col-lg-2 col-xs-6' style='position:relative; height: 420px; width: 200px; text-align: center; border:2px solid #e3e5e8; margin: 10px;'>";
		echo "<div style='position:absolute; bottom: 20px; left: 0; width: 100%'>";
		echo "<img src='$img'>";
		echo "<h3 style='border-bottom: 1px solid #e3e5e8; margin: 10px 0; padding-bottom: 5px;'>$name</h3>";
		echo "<p>Type: $element</p>";
		echo "<p>Atk: $atk</p>";
		echo "<p>Hp: $hp</p>";
		echo "<p>Def: $def</p>";
		echo "<p>Total: $total</p>";
		echo "</div>";
		echo "</div>";
			
		}
	}else {

		echo "
		<div class='row'>
			<div class='col-lg-6' style='text-align: right; margin:10px 20px 0 80px;'>
				<img src='images/stop.png' style='height:450px; width: 450px'>
			</div>

			<div class='col-lg-3' style='border:2px solid #e3e5e8; margin: 120px 0; padding: 20px 10px;'>
			<h4>Please LOG IN FIRST!</h4>
			<hr>
			<a href='login.php' style='color:white; font-weight:bold;'><button>Log In Now</button></a><br><br>
			<a href='register.php' style='color:white; font-weight: bold;' ><button>Register Here</button></a><br><br>

			</div>
		</div> ";
		
	}
} 

function rock_content(){
	if(isset($_SESSION['username'])){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT * FROM pokemon WHERE elem_id='9'";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$img = $row['img'];
		$id = $row['id'];
		$name = $row['name'];
		$element = $row['elem_id'];
		$hp = $row['hp'];
		$atk = $row['atk'];
		$def = $row['def'];
		$total = $row['total'];

		$sql = "SELECT element FROM elem_id";
		$result2 = mysqli_query($conn,$sql);
		while($r = mysqli_fetch_assoc($result2)){
			$element = $r['element'];
		}

		echo "<div class='xyz col-lg-2 col-xs-6' style='position:relative; height: 420px; width: 200px; text-align: center; border:2px solid #e3e5e8; margin: 10px;'>";
		echo "<div style='position:absolute; bottom: 20px; left: 0; width: 100%'>";
		echo "<img src='$img'>";
		echo "<h3 style='border-bottom: 1px solid #e3e5e8; margin: 10px 0; padding-bottom: 5px;'>$name</h3>";
		echo "<p>Type: $element</p>";
		echo "<p>Atk: $atk</p>";
		echo "<p>Hp: $hp</p>";
		echo "<p>Def: $def</p>";
		echo "<p>Total: $total</p>";
		echo "</div>";
		echo "</div>";
			
		}
	}else {

		echo "
		<div class='row'>
			<div class='col-lg-6' style='text-align: right; margin:10px 20px 0 80px;'>
				<img src='images/stop.png' style='height:450px; width: 450px'>
			</div>

			<div class='col-lg-3' style='border:2px solid #e3e5e8; margin: 120px 0; padding: 20px 10px;'>
			<h4>Please LOG IN FIRST!</h4>
			<hr>
			<a href='login.php' style='color:white; font-weight:bold;'><button>Log In Now</button></a><br><br>
			<a href='register.php' style='color:white; font-weight: bold;' ><button>Register Here</button></a><br><br>

			</div>
		</div> ";
		
	}
} 

function legend_content(){
	if(isset($_SESSION['username'])){

	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT * FROM pokemon WHERE elem_id='15'";

	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$img = $row['img'];
		$id = $row['id'];
		$name = $row['name'];
		$element = $row['elem_id'];
		$hp = $row['hp'];
		$atk = $row['atk'];
		$def = $row['def'];
		$total = $row['total'];

		$sql = "SELECT element FROM elem_id";
		$result2 = mysqli_query($conn,$sql);
		while($r = mysqli_fetch_assoc($result2)){
			$element = $r['element'];
		}

		echo "<div class='xyz col-lg-2 col-xs-6' style='position:relative; height: 420px; width: 200px; text-align: center; border:2px solid #e3e5e8; margin: 10px;'>";
		echo "<div style='position:absolute; bottom: 20px; left: 0; width: 100%'>";
		echo "<img src='$img'>";
		echo "<h3 style='border-bottom: 1px solid #e3e5e8; margin: 10px 0; padding-bottom: 5px;'>$name</h3>";
		echo "<p>Type: $element</p>";
		echo "<p>Atk: $atk</p>";
		echo "<p>Hp: $hp</p>";
		echo "<p>Def: $def</p>";
		echo "<p>Total: $total</p>";
		echo "</div>";
		echo "</div>";
			
		}
	}else {

		echo "
		<div class='row'>
			<div class='col-lg-6' style='text-align: right; margin:10px 20px 0 80px;'>
				<img src='images/stop.png' style='height:450px; width: 450px'>
			</div>

			<div class='col-lg-3' style='border:2px solid #e3e5e8; margin: 120px 0; padding: 20px 10px;'>
			<h4>Please LOG IN FIRST!</h4>
			<hr>
			<a href='login.php' style='color:white; font-weight:bold;'><button>Log In Now</button></a><br><br>
			<a href='register.php' style='color:white; font-weight: bold;' ><button>Register Here</button></a><br><br>

			</div>
		</div> ";
		
	}
} 
require_once('template.php');

?>

