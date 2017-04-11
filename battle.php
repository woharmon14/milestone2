<!DOCTYPE html>
<html>
<head>
	<title>Duel</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style type="text/css">
	* {
		box-sizing: border-box;

	}
	span{
		font-weight: bold;
		color:crimson;
	}
	body{
		margin: 20px auto;
	}

	.left, .right {
		
		height: 400px;
		width: 320px;
		margin-top: 30px;
		
		text-align: center;
		background: rgba(255,255,255,0);

	}
	hr {
		border: 1px solid gray;
		margin: 0px;
	}
	button {
		width: 100px;
		background: #3897f0;
    	border-color: #3897f0;
    	color: #fff;
    	border-radius: 3px;
	    border-style: solid;
	    border-width: 1px;
	    font-weight: 600;
	    outline: none;
	    overflow: hidden;
	    text-overflow: ellipsis;
	    white-space: nowrap;
	    -webkit-appearance: none;
	    
	    margin: 15px 50px;
	}
	#imgflp {
        -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: FlipH;
        -ms-filter: "FlipH";
		}
	body {
		background: url(images/Pokémon_Stadium_2.jpg) center/cover no-repeat;
	}
	h4 {
		font-weight: bold;
	}
	.row {
		margin: 0;
	}
	.stat1, .stat2 {
		border: 2px solid blue;
		background-color: rgba(255,255,255,0.8);
		width: 18%;
		height: 190px;
		border-radius: 10%;

	}

</style>
</head>
<body>
<div >
	<div style="text-align: center;"><img src="images/name.png" style="width: 300px; height: 100px;"></div>
	
<?php
class Pokemon {
	protected $name,$type,$hp,$ap,$def,$img;

	function __construct($name,$type,$hp,$ap,$def,$img) {

		$this->name = $name;
		$this->type = $type;
		$this->hp = $hp;
		$this->ap = $ap;
		$this->def = $def;
		$this->img = $img;

	}

	function set_name ($name){
		$this->name = $name;
	}

	function get_name (){
		return "<p>"."<span>Trainer: </span>".$this->name."</p>";
	}

	function set_type ($type){
		$this->type = $type;
	}

	function get_type (){
		return "<p>"."<span>Element: </span>".$this->type ."</p>";
	}

	function set_hp ($hp){
		$this->hp = $hp;
	}

	function get_hp (){
		return $this->hp;
	}
	function set_ap ($ap){
		$this->ap = $ap;
	}

	function get_ap (){
		return $this->ap;
	}
	function set_def ($def){
		$this->def = $def;
	} 	

	function get_def (){
		return $this->def;
	}

	function set_img ($img){
		$this->img = $img;
	} 	

	function get_img (){
		return "<p>".$this->img ."</p>";
	}
}




class Fire extends Pokemon
{
	
	function __construct($name) {
		$images = ["<img src='http://www.pokestadium.com/sprites/xy/moltres.gif'>","<img src='http://www.pokestadium.com/sprites/xy/entei.gif'>","<img src='http://www.pokestadium.com/sprites/xy/groudon.gif'>","<img src='http://www.pokestadium.com/sprites/xy/charizard-3.gif'>","<img src='http://www.pokestadium.com/sprites/xy/ho-oh.gif'>","<img src='http://www.pokestadium.com/sprites/xy/flareon-3.gif'>"];

		$this->name = $name;
		$this->type = "fire";
		$this->hp = rand(100,200);
		$this->ap = rand(40,60);
		$this->def = rand(5,20);
		$this->img = $images[rand(0,count($images)-1)];
	}
}

class Ice extends Pokemon
{
	
	function __construct($name) {
		$images = ["<img src='http://www.pokestadium.com/sprites/xy/articuno.gif'>","<img src='http://www.pokestadium.com/sprites/xy/suicune.gif'>","<img src='http://www.pokestadium.com/sprites/xy/kyogre.gif'>","<img src='http://www.pokestadium.com/sprites/xy/blastoise-3.gif'>","<img src='http://www.pokestadium.com/sprites/xy/kyurem.gif'>","<img src='http://www.pokestadium.com/sprites/xy/lugia.gif'>","<img src='http://www.pokestadium.com/sprites/xy/gyarados-2.gif'>","<img src='http://www.pokestadium.com/sprites/xy/vaporeon-3.gif'>","<img src='http://www.pokestadium.com/sprites/xy/dragonite-3.gif'>"];

		$this->name = $name;
		$this->type = "Ice";
		$this->hp = rand(100,200);
		$this->ap = rand(20,40);
		$this->def = rand(20,40);
		$this->img = $images[rand(0,count($images)-1)];

	}
}

class Lightning extends Pokemon
{
	
	function __construct($name) {
		$images = ["<img src='http://www.pokestadium.com/sprites/xy/zapdos.gif'>","<img src='http://www.pokestadium.com/sprites/xy/raikou.gif'>","<img src='http://www.pokestadium.com/sprites/xy/rayquaza.gif'>","<img src='http://www.pokestadium.com/sprites/xy/zekrom.gif'>","<img src='http://www.pokestadium.com/sprites/xy/pikachu-5.gif'>"];

		$this->name = $name;
		$this->type = "Lightning";
		$this->hp = rand(100,200);
		$this->ap = rand(10,70);
		$this->def = rand(0,50);
		$this->img = $images[rand(0,count($images)-1)];

	}
}
?>
	<div class="row" style="margin-left: 150px;">
	<div class="col-lg-3 stat1">
		<div style="text-align: center;">
				<?php 
					$name = ['Ann','Ben','Cory','Dennis','Elvis'];
					$type = ['Fire','Ice','Lightning'];
					shuffle($name);
					for ($i=0; $i <1; $i++) { 
					$elem = rand(0, count($type)-1);
					$class = $type[$elem];
					$char = new $class($name[$i]);

					echo "<br>";
					echo $char -> get_name();
					echo $char -> get_type();
					echo "<p>"."<span>Health Points: </span>"."<span id='t1hp'>".$char -> get_hp()."</span></p>";
					echo "<p>"."<span>Attack Points: </span>"."<span id='t1ap'>".$char -> get_ap()."</span></p>";
					echo "<p>"."<span>Defense: </span>"."<span id='t1def'>".$char -> get_def()."</span></p>";
					
						}

				?>
			</div>
	</div>
		<div class="col-lg-3 left" style="position: relative;">
			
			<div style="position: absolute; top: 53%; left: 50%; transform: translate(-50%, -50%);">
				<?php 
					

					echo "<div id='imgflp'>";
					echo $char -> get_img() . "</div>";
					
					
						

				?>
			</div>
			
		</div>
		<div class="col-lg-3 right" style="position: relative;">
			
			<div style="position: absolute; top: 53%; left: 50%; transform: translate(-50%, -50%);">
				<?php 
					$name = ['Ann','Ben','Cory','Dennis','Elvis'];
					$type = ['Fire','Ice','Lightning'];
					shuffle($name);
					for ($i=0; $i <1; $i++) { 
					$elem = rand(0, count($type)-1);
					$class = $type[$elem];
					$char = new $class($name[$i]);

					echo $char -> get_img();
					?>				
					

			</div>
			
		</div>
		<div class="col-lg-3 stat2" style="text-align: center;">
		<?php
					echo "<br>";
					echo $char -> get_name();
					echo $char -> get_type();
					echo "<p>"."<span>Health Points: </span>"."<span id='t2hp'>".$char -> get_hp()."</span></p>";
					echo "<p>"."<span>Attack Points: </span>"."<span id='t2ap'>".$char -> get_ap()."</span></p>";
					echo "<p>"."<span>Defense: </span>"."<span id='t2def'>".$char -> get_def()."</span></p>";

						}

				?>
					
		</div>
	</div>
<div style="text-align: center; vertical-align: middle;">
<br> 
	<button onclick="myFunction()">Roll 'em Up</button>
	<button onclick="fight()"> Duel!</button>

</div>

</div>

<script type="text/javascript">
	function fight(){
		var t1hp = $('#t1hp').html();
		var t1ap = $('#t1ap').html();
		var t1def = $('#t1def').html();
		var t2hp = $('#t2hp').html();
		var t2ap = $('#t2ap').html();
		var t2def = $('#t2def').html();

		$.post("fight_api.php",
	    {
	        t1hp: t1hp,
	        t1def: t1def,
	        t2ap: t2ap,
	    },
	    function(data, status){
	    	if(data<=0){
	    		alert("Congratulations, Team2 wins!");
	    	}
	        $('#t1hp').html(data);
	    });

	    $.post("fight_api.php",
	    {
	        t2hp: t2hp,
	        t2def: t2def,
	        t1ap: t1ap,
	    },
	    function(data, status){
	    	if(data<=0){
	    		alert("Congratulations, Team1 wins!");
	    	}
	        $('#t2hp').html(data);
	    });
	}
</script>

</body>
<script>
function myFunction() {
    location.reload();
}
</script>
</html>
