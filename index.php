<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poke-Duel</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700">

  <link rel="stylesheet" href="css/style.css">
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

</head>

<body>
<header >
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                       
        </button>
        <img src="http://vignette3.wikia.nocookie.net/youtubepoop/images/4/4c/Pokeball.png/revision/latest?cb=20150418234807">
        <form>
          <input type="text" name="search" placeholder="Search here..">
        </form>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar" >
        <ul class="nav navbar-nav navbar-right" >
          <li><a href="about.php" style="color:white"><strong>About</strong></a></li>
          <li><a href="pokedex.php" style="color:white"><strong>Pokémon</strong></a></li>
          <li><a href="battle.php" style="color:white"><strong>Battle</strong></a></li>
        </ul>
      </div>
    </div>
  </nav>

</header> 
<div class="content">
<img src="http://download-logos.com/uploads/posts/2016-10/1477467390_pokemon-logo.png" style="width: 50%; height: 60%"><br>
  
  <p class="content__teaser">Catch Pokémon and Battle in the Real World with Poké Card Fight!</p>
  <div class="content__cta">
    <a href="login.php">LOG IN NOW!</a> <br>
    <hr style="margin: 0;">
    <a href="register.php"><h5>Register Here</h5></a>
  </div>
  
</div>

<!-- /content -->

<video id="my-video" class="video" muted loop>
  <source src="media/demo.mp4" type="video/mp4">
  <source src="media/demo.ogv" type="video/ogg">
  <source src="media/demo.webm" type="video/webm">
</video><!-- /video -->

<script>
(function() {
  /**
   * Video element
   * @type {HTMLElement}
   */
  var video = document.getElementById("my-video");

  /**
   * Check if video can play, and play it
   */
  video.addEventListener( "canplay", function() {
    video.play();
  });
})();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>