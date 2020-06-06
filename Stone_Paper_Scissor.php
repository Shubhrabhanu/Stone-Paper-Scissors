<?php
if (isset($_POST['submitted'])==1) {

//get variables
$throwcount = $_POST['throwcount'];
$wincount = $_POST['wincount'];
$losscount = $_POST['losscount'];
$drawcount = $_POST['drawcount'];
$winlossdraw = $_POST['winlossdraw'];
$player1throw = $_POST['player1throw'];
$player2throw = $_POST['player2throw'];
$player3throw = $_POST['player3throw'];
$player4throw = $_POST['player4throw'];



/*-------------------------------------------------------------DRAW----------------GAME-----------------------*/


// For Draw Game
if ((($player1throw && $player2throw) == ($player3throw && $player4throw)) ||  (($player2throw && $player3throw) == ($player4throw && $player1throw))|| (($player3throw && $player4throw) == ($player1throw && $player2throw)) || (($player4throw && $player1throw) == ($player2throw && $player3throw)))  {
echo ("All Win");
$winlossdraw = "Draw";
$drawcount++;}



/*---------------------------------------2--------------------BY--------------------2------------------------------*/

// For Rock Wins
if (($player1throw && $player2throw) == "ROCK" && ($player3throw && $player4throw) == "SCISSORS") {
echo ("Player 1 and Player 2 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw) == "ROCK" && ($player4throw && $player1throw) == "SCISSORS") {
echo ("Player 2 and Player 3 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw) == "ROCK" && ($player1throw && $player2throw) == "SCISSORS") {
echo ("Player 3 and Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw) == "ROCK" && ($player2throw && $player3throw) == "SCISSORS") {
echo ("Player 4 and Player 1 Win");
$winlossdraw = "Win";
$wincount++;}



//For Paper Wins
if (($player1throw && $player2throw) == "PAPER" && ($player3throw && $player4throw) == "ROCK") {
echo ("Player 1 and Player 2 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw) == "PAPER" && ($player4throw && $player1throw) == "ROCK") {
echo ("Player 2 and Player 3 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw) == "PAPER" && ($player1throw && $player2throw) == "ROCK") {
echo ("Player 3 and Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw) == "PAPER" && ($player2throw && $player3throw) == "ROCK") {
echo ("Player 1 and Player 4 Win");
$winlossdraw = "Win";
$wincount++;}


//For Scissor Wins
if (($player1throw && $player2throw) == "SCISSORS" && ($player3throw && $player4throw) == "PAPER") {
echo ("Player 1 and Player 2 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw) == "SCISSORS" && ($player4throw && $player1throw) == "PAPER") {
echo ("Player 2 and Player 3 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw) == "SCISSORS" && ($player1throw && $player2throw) == "PAPER") {
echo ("Player 3 and Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw) == "SCISSORS" && ($player2throw && $player3throw) == "PAPER") {
echo ("Player 4 and Player 1 Win");
$winlossdraw = "Win";
$wincount++;}




/*---------------------------------------2----------------------BY--------------------2----------------------------------------*/

// For Rock Loss
if (($player1throw && $player2throw) == "ROCK" && ($player3throw && $player4throw) == "SCISSORS") {
echo ("Player 3 and Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw) == "ROCK" && ($player4throw && $player1throw) == "SCISSORS") {
echo ("Player 4 and Player 1 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw) == "ROCK" && ($player1throw && $player2throw) == "SCISSORS") {
echo ("Player 1 and Player 2 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw) == "ROCK" && ($player2throw && $player3throw) == "SCISSORS") {
echo ("Player 2 and Player 3 Win");
$winlossdraw = "Win";
$wincount++;}



//For Paper Loss
if (($player1throw && $player2throw) == "PAPER" && ($player3throw && $player4throw) == "ROCK") {
echo ("Player 3 and Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw) == "PAPER" && ($player4throw && $player1throw) == "ROCK") {
echo ("Player 4 and Player 1 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw) == "PAPER" && ($player1throw && $player2throw) == "ROCK") {
echo ("Player 1 and Player 2 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw) == "PAPER" && ($player2throw && $player3throw) == "ROCK") {
echo ("Player 2 and Player 3 Win");
$winlossdraw = "Win";
$wincount++;}


//For Scissor Loss
if (($player1throw && $player2throw) == "SCISSORS" && ($player3throw && $player4throw) == "PAPER") {
echo ("Player 3 and Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw) == "SCISSORS" && ($player4throw && $player1throw) == "PAPER") {
echo ("Player 4 and Player 1 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw) == "SCISSORS" && ($player1throw && $player2throw) == "PAPER") {
echo ("Player 1 and Player 2 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw) == "SCISSORS" && ($player2throw && $player3throw) == "PAPER") {
echo ("Player 2 and Player 3 Win");
$winlossdraw = "Win";
$wincount++;}


/*----------------------------------------------3-------------BY-------------------------1-------------------------------*/


// For Rock Win
if (($player1throw && $player2throw && $player3throw) == "ROCK" && $player4throw == "SCISSORS") {
echo ("Player 1, Player 2 and Player 3 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw && $player4throw) == "ROCK" && $player1throw == "SCISSORS") {
echo ("Player 2, Player 3 and Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw && $player1throw) == "ROCK" && $player2throw == "SCISSORS") {
echo ("Player 3, Player 4 and Player 1 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw && $player2throw) == "ROCK" && $player3throw == "SCISSORS") {
echo ("Player 4, Player 1 and Player 2 Win");
$winlossdraw = "Win";
$wincount++;}



//For Paper Win
if (($player1throw && $player2throw && $player3throw) == "PAPER" && $player4throw == "ROCK") {
echo ("Player 1, Player 2 and Player 3 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw && $player4throw) == "PAPER" && $player1throw == "ROCK") {
echo ("Player 2, Player 3 and Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw && $player1throw) == "PAPER" && $player2throw == "ROCK") {
echo ("Player 3, Player 4 and Player 1 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw && $player2throw) == "PAPER" && $player3throw == "ROCK") {
echo ("Player 4, Player 1 and Player 2 Win");
$winlossdraw = "Win";
$wincount++;}


//For Scissor Win
if (($player1throw && $player2throw && $player3throw) == "SCISSORS" && $player4throw == "PAPER") {
echo ("Player 1, Player 2 and Player 3 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw && $player4throw) == "SCISSORS" && $player1throw == "PAPER") {
echo ("Player 2, Player 3 and Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw && $player1throw) == "SCISSORS" && $player2throw == "PAPER") {
echo ("Player 3, Player 4 and Player 1 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw && $player2throw) == "SCISSORS" && $player3throw == "PAPER") {
echo ("Player 4, Player 1 and Player 2 Win");
$winlossdraw = "Win";
$wincount++;}



/*----------------------------------------1-----------------------BY------------------3------------------------------------*/



// For Rock Loss
if (($player1throw && $player2throw && $player3throw) == "ROCK" && $player4throw == "SCISSORS") {
echo ("Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw && $player4throw) == "ROCK" && $player1throw == "SCISSORS") {
echo ("Player 1 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw && $player1throw) == "ROCK" && $player2throw == "SCISSORS") {
echo ("Player 2 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw && $player2throw) == "ROCK" && $player3throw == "SCISSORS") {
echo ("Player 3 Win");
$winlossdraw = "Win";
$wincount++;}



//For Paper Loss
if (($player1throw && $player2throw && $player3throw) == "PAPER" && $player4throw == "ROCK") {
echo ("Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw && $player4throw) == "PAPER" && $player1throw == "ROCK") {
echo ("Player 1 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw && $player1throw) == "PAPER" && $player2throw == "ROCK") {
echo ("Player 2 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw && $player2throw) == "PAPER" && $player3throw == "ROCK") {
echo ("Player 3 Win");
$winlossdraw = "Win";
$wincount++;}


//For Scissor Loss
if (($player1throw && $player2throw && $player3throw) == "SCISSORS" && $player4throw == "PAPER") {
echo ("Player 4 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player2throw && $player3throw && $player4throw) == "SCISSORS" && $player1throw == "PAPER") {
echo ("Player 1 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player3throw && $player4throw && $player1throw) == "SCISSORS" && $player2throw == "PAPER") {
echo ("Player 2 Win");
$winlossdraw = "Win";
$wincount++;}

if (($player4throw && $player1throw && $player2throw) == "SCISSORS" && $player3throw == "PAPER") {
echo ("Player 3 Win");
$winlossdraw = "Win";
$wincount++;}


/*---------------------------------------------------------------------------------------------------------------*/


$throwcount++;
}
else {

//set initial variables
$throwcount = 0;
$wincount = 0;
$losscount = 0;
$drawcount = 0;
$player1throw = "N/A";
$player2throw = "N/A";
$player3throw = "N/A";
$player4throw = "N/A";
}
?>

<html>
<head>
<title>Rock Paper Scissors Game</title>
</head>
<body>

<form action="" method="post">

<input name="submitted" type="hidden" value="1" />

<input name="throwcount" type="hidden" value="<?php echo $throwcount; ?>" />

<input name="wincount" type="hidden" value="<?php echo $wincount; ?>" />

<input name="losscount" type="hidden" value="<?php echo $losscount; ?>" />

<input name="drawcount" type="hidden" value="<?php echo $drawcount; ?>" />

<!--/*----------------------------PLAYER1---------------------------------------*/-->
<b>Player 1</b><br>
<label><input type="submit" name="player1throw" value="ROCK" id="throw_1"></label>

<label><input type="submit" name="player1throw" value="PAPER" id="throw_2"></label>

<label><input type="submit" name="player1throw" value="SCISSORS" id="throw_3"></label>

<!--/*----------------------------PLAYER2---------------------------------------*/-->
<br><b>Player 2</b><br>
<label><input type="submit" name="player2throw" value="ROCK" id="throw_1"></label>

<label><input type="submit" name="player2throw" value="PAPER" id="throw_2"></label>

<label><input type="submit" name="player2throw" value="SCISSORS" id="throw_3"></label>

<!--/*----------------------------PLAYER3---------------------------------------*/-->
<br><b>Player 3</b><br>
<label><input type="submit" name="player3throw" value="ROCK" id="throw_1"></label>

<label><input type="submit" name="player3throw" value="PAPER" id="throw_2"></label>

<label><input type="submit" name="player3throw" value="SCISSORS" id="throw_3"></label>

<!--/*----------------------------PLAYER4---------------------------------------*/-->
<br><b>Player 4</b><br>
<label><input type="submit" name="player4throw" value="ROCK" id="throw_1"></label>

<label><input type="submit" name="player4throw" value="PAPER" id="throw_2"></label>

<label><input type="submit" name="player4throw" value="SCISSORS" id="throw_3"></label>




<p>CURRENT GAME STATUS: <?php echo $winlossdraw; ?></p>

<p>Player 1 threw: <?php echo $player1throw; ?></p>

<p>Player 2 threw: <?php echo $player2throw; ?></p>

<p>Player 3 threw: <?php echo $player3throw; ?></p>

<p>Player 4 threw: <?php echo $player4throw; ?></p>

<p>Total Throws: <?php echo $throwcount; ?></p>

<p>Wins: <?php echo $wincount; ?></p>

<p>Losses: <?php echo $losscount; ?></p>

<p>Draws: <?php echo $drawcount; ?></p>

<input type="reset" name="RESET">
</form>
</body>
</html>