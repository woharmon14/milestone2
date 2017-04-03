<?php
	$message = "";
	session_start();
	if(isset($_SESSION['message'])){
		$message = "<div class='alert alert-success'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include('connection.php');
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$sql = "SELECT * FROM users WHERE username = '$username'
		AND password = '$password'";
		extract(mysqli_fetch_assoc(mysqli_query($conn,$sql)));

		//if(mysqli_num_rows($result)){
			session_start();
			$_SESSION['message'] = "Login Successful";
			$_SESSION['username'] = $username;
			$_SESSION['fullname'] = $fullname;
			$_SESSION['img'] = $img;
			$_SESSION['role'] = $role;

			if($role == 'admin')
				header('location:admin.php');
			else
				header('location:pokedex.php');				
		//}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700">

  <link rel="stylesheet" href="css/style2.css">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style type="text/css">
@media only screen and (max-width: 720px) {
    
     #pika{
        display: none;

    }
}

  	</style>
</head>

<body>
	<div class="container container-fluid">
		<div class="row">
			<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wrapper" id="pika">
				<img id="slide" src="images/log.png" style="width: 100%;">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<form method='post' action=''>
					<a href="index.php"><img src="images/name.png"></a>
					<input type="text" maxlength="30" name="username" placeholder="Phone number, username, or email" value=""></input><br>
					<input type="password" name="password" placeholder="Password" value=""></input><br>
					<button>Log In</button>
					<!-- <input type="button" value="Log in"></input> -->
					<div><span>or</span></div>
					<div class="fb">
					<img src="https://www.seeklogo.net/wp-content/uploads/2016/09/facebook-icon-preview-1-400x400.png" style="width: 40px; height: 40px;">
					<span><a href="www.facebook.com">Log in with Facebook </a></span></div>
					
				</form>

				<div class="reg">
					<p>Don't have an account? <a href="register.php"> Sign up</a></p>
				</div>

				<div class="app">
					<p>Get the app.</p>
					<img src="images/app.png" >
				</div>
			</div>

		</div>
	</div>
</body>	

</html>