<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include('connection.php');

		if($_POST['password']==$_POST['pw2']){

			$email = $_POST['email'];
			$fullname = $_POST['fullname'];
			$username = $_POST['username'];
			$password = sha1($_POST['password']);
			$sql = "INSERT INTO users (email,fullname,username,password,role) VALUES ('$email','$fullname','$username','$password','regular')";
			$result = mysqli_query($conn,$sql);
			if($result){
				session_start();
				$_SESSION['message'] = "Registration Successful";
				
				header('location:login.php');
			}
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wrapper" id="pika">
				<img id="slide" src="images/log.png" style="width: 100%;">

			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<form method='post'>
					<a href="index.php"><img src="images/name.png"></a>
					<h2>Sign up to see battles and cards from Poké friends and more adventures await!</h2>
					<button>Log in with Facebook</button>
					<!-- <input type="button" value="Log in"></input> -->
					<div><span>or</span></div>
					<input type="text" maxlength="30" name="email" placeholder="Mobile Number or E-mail" value=""></input><br>
					<input type="text" maxlength="30" name="fullname" placeholder="Full Name" value=""></input><br>
					<input type="text" maxlength="30" name="username" placeholder="Username" value=""></input><br>
					<input type="password" name="password" placeholder="Password" value=""></input><br>
					<input type="password" name="pw2" placeholder="Confirm Password" value=""></input><br>
					<button>Sign up</button>
					<!-- <input type="button" value="Log in"></input> -->
					<h5>By signing up, you agree to our <br> <a href="#">Terms & Privacy Policy.</a></h5>
					
				</form>

				<div class="reg">
					<p>Have an account? <a href="login.php"> Log in</a></p>
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