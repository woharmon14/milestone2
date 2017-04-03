<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Template</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700">

  <link rel="stylesheet" href="css/style1.css">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <style type="text/css">
    @font-face {
    font-family: Pocket Monk;
    src: url("pokemon.otf") format("opentype");
    }
  </style>

 	 <style>
			body {font-family: "Lato", sans-serif;}

			/* Style the tab */
			div.tab {
			    overflow: hidden;
			    border: 1px solid #ccc;
			    background-color: #f1f1f1;
			}

			/* Style the buttons inside the tab */
			div.tab button {
			    background-color: inherit;
			    float: left;
			    border: none;
			    outline: none;
			    cursor: pointer;
			    transition: 0.3s;
			    font-size: 17px;
			}

			/* Change background color of buttons on hover */
			div.tab button:hover {
			    background-color: #ddd;
			}

			/* Create an active/current tablink class */
			div.tab button.active {
			    background-color: #ccc;
			}

			/* Style the tab content */
			.tabcontent {
			    display: none;
			    padding: 6px 12px;
			    -webkit-animation: fadeEffect 1s;
			    animation: fadeEffect 1s;
			}

			/* Fade in tabs */
			@-webkit-keyframes fadeEffect {
			    from {opacity: 0;}
			    to {opacity: 1;}
			}

			@keyframes fadeEffect {
			    from {opacity: 0;}
			    to {opacity: 1;}
			}
	</style>

</head>

<body>
<header id="head">
	<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="width: 7%;">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                       
        </button>
        <img src="http://vignette3.wikia.nocookie.net/youtubepoop/images/4/4c/Pokeball.png/revision/latest?cb=20150418234807">
        <a class="navbar-brand" href="index.php">Poké Card Fight!</a>
      </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="about.php"><strong>About</strong></a></li>
	        <li><a href="pokedex.php"><strong>Pokémon</strong></a></li>
	        <li><a href="battle.php"><strong>Battle</strong></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-5">
					<h4>Search Here: </h4>
					<input type="text" style="border-radius: 5px; border-style: solid;  border-color: #313131"></input>
				</div>
				<div class="col-lg-2">
					<?php if(isset($_SESSION['username'])){
						echo "<h5>Welcome, ".$_SESSION['username']."!</h5>";
					} ?>
					
				</div>
				<div class="col-lg-1">
				<a href="logout.php"><img src="https://conceptdraw.com/a155c4/p137/preview/640/pict--power-button-cloud-round-icons-vector-stencils-library"></a>
				</div>
			</div>
		</div>
	</nav>
	
</header>
<div style="height: 10px; background: -webkit-linear-gradient(left, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 18%, rgba(240,78,56,1) 42%, rgba(240,47,23,1) 64%, rgba(246,41,12,1) 80%, rgba(240,47,23,1) 81%, rgba(240,47,24,1) 82%, rgba(231,56,39,1) 100%);"></div>
<section>
	<div class="container-fluid">
		<iframe src="http://gameboy.pokemongarden.net/game.html" style="width: 100%; height: 100vh;">
	</iframe>
	

	</div>			
			
	
</section>
<div style="height: 10px; background: -webkit-linear-gradient(left, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 18%, rgba(240,78,56,1) 42%, rgba(240,47,23,1) 64%, rgba(246,41,12,1) 80%, rgba(240,47,23,1) 81%, rgba(240,47,24,1) 82%, rgba(231,56,39,1) 100%); margin-top: 20px;"></div>
<footer>
	<div class=" container container-fluid" style="padding: 20px; width: 100%">
		<div class="col-lg-8">
			<a href="#head" style="text-decoration: none; color: black;"><h5> Poké Card Fight! 2017</h5></a>
		</div>
		<div class="col-lg-4">
			<img src="https://img.clipartfest.com/2ee336c8a8f6e7774fbd90dfcedecaea_15-facebook-logo-vector-art-clipart-of-facebook-logo_1200-1200.jpeg">
			<img src="http://lcm.org/wp-content/uploads/2011/03/twitter-logo.png">
			<img src="https://img.clipartfest.com/49803d8eb5ea235a5860ac942caece70_download-png-download-eps-instagram-logo-clipart-png_1024-1024.png">
		</div>
		
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 3800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>

</body>
</html>