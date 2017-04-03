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
			#slide2 {
			    position: absolute;
			    left: -400px;
			    height: 16%;
			    background: blue;
			    -webkit-animation: slide 3.5s forwards;
			    -webkit-animation-delay: 3s;
			    animation: slide 8s forwards;
			    
			}

			@-webkit-keyframes slide {
			    100% { left: 0; }
			}

			@keyframes slide {
			    100% { left: 88%; }
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
	<div class="container container-fluid ">
		<div style="text-align: center; padding-top: 40px;">
		<img id="slide2" src="https://thumbs.gfycat.com/AmpleTerribleAfricanpiedkingfisher-size_restricted.gif" style="margin-top: 50px; z-index: -9999">
		<img src="images/name.png" style="width: 450px;">
		<p style="margin-top: 50px; text-indent: 50px;">The Pokédex is a electronic device featured in the Pokémon video game and anime series. In the games, whenever a Pokémon is first captured, its data will be added to a player's Pokédex, but in the anime or manga, the Pokédex is a comprehensive electronic reference encyclopedia, usually referred to in order to deliver exposition. "Pokédex" is also used to refer to a list of Pokémon, usually a list of Pokémon by number. <br><br> </p>
		</div>
		
		<hr style="margin: 40px auto; width: 50%; border-color: salmon">
		<div class="row" style="margin:20px	 auto;">
		<div class="col-lg-6">
			<img src="images/poke.png" style="width: 80%">
		</div>
		<div class="col-lg-6">
			<h1 style="color: rgb(60,89,165); text-shadow: 2px 2px #000;">PLAY &middot; COLLECT &middot; FIGHT</h1> <br>
			<p style="text-align: center;">In the video games, a Pokémon Trainer is issued a blank device at the start of the journey. A trainer must then attempt to fill the Pokédex by encountering and at least briefly obtaining each of the different species of Pokémon. A player will receive the name and image of a Pokémon after encountering one that was not previously in the Pokédex, typically after battling said Pokémon either in the wild or in a trainer battle (with the exceptions of link battles and tournament battles, such as in the Battle Frontier). <br><br>In Pokémon Red and Blue, some Pokémon's data is added to the Pokédex simply by viewing the Pokémon, such as in the zoo outside of the Safari Zone. Also, certain NPC characters may add to the Pokédex by explaining what a Pokémon looks like during conversation. More detailed information is available after the player obtains a member of the species, either through capturing the Pokémon in the wild, evolving a previously captured Pokémon, hatching a Pokémon egg (from the second generation onwards), or through a trade with another trainer (either an NPC or another player). This information includes height, weight, species type, typing, and a short description of the Pokémon.</p>
		</div>
		</div>
		<hr style="margin: 40px auto; width: 50%; border-color: salmon">

		<div class="row">
			<div class="col-lg-6"> 
			<h1 style="color: rgb(60,89,165); text-shadow: 2px 2px #000; text-align: center;">Pokémon Theme Song </h1><br>
			<p style="text-align: center;">I wanna be the very best<br>
				Like no one ever was<br>
				To catch them is my real test<br>
				To train them is my cause<br><br>

				I will travel across the land<br>
				Searching far and wide<br>
				Each Pokemon to understand<br>
				The power that's inside<br><br>

				Pokemon, gotta catch 'em all<br>
				Its you and me<br>
				I know it's my destiny<br>
				Pokemon, oh, you're my best friend<br>
				In a world we must defend<br>
				Pokemon, gotta catch 'em all<br>
				A heart so true<br>
				Our courage will pull us through<br><br>

				You teach me and I'll teach you<br>
				Pokemon, gotta catch 'em all<br>
				Gotta catch 'em all<br>
				Yeah!!!<br><br>

			</div>
			<div class="col-lg-6">
				<video width="100%" CONTROLLER="true" LOOP="false" AUTOPLAY="false" style="margin-top: 100px;">
				  <source src="media/ts.mp4" type="video/mp4">
				  <source src="media/ts.ogg" type="video/ogg">
				 </video>
			</div>
		</div>

			<hr style="margin: 40px auto; width: 50%; border-color: salmon">


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