<?php
include 'functions.php';
?>
<?=top();?>
		<div id="content">
    <img src="img/dogecoin.png" style="display:inline"><div id="header-slogan" style="display:inline-block;"><br><h1 style="display: inline"><?=getDynamic('head');?></h1><br>
	<div id="slogan"><?=getDynamic('slogan');?></div></div>
	</div>	
	<div id="page" >
	<div class="container">
	<div class="row">

  <div class="col-md-4"><h2>Past Draws</h2>View a list of past draws, that have happened, to see if you have won (please, keep in mind that the address the price is sent to will not (usually) match an address in your address book, you will still receive the prize)! <br> <br><a type="button" class="btn btn-warning" href="past.php">Visit previous draws</a> </div>
  <div class="col-md-4 mid other"><h2>Current draw</h2>View the current draw's statistics. There are currently <span class="attention"><?=remainingToRound()?></span> remaining to this draw. You can check out the jackpot, how many people have bet, and you can check out the(appropriate) odds of you winning!<br><a href="current.php" type="button" class="btn btn-warning">Read current round statistics</a></div>
  <div class="col-md-4"><h2>Rules</h2>The rules for this game are as simple as they get. You have to send any amount (currently, it has to be a whole number) of dogecoins to <span class="attention"><?=getDynamic('bet_addr')?></span>. The more you send, the bigger chance of winning you have.<br><a type="button" class="btn btn-warning" href="about.php#info">Read advanced rules</a></div> 
	</div>
	</div>
	</div>
<?=footer();?>