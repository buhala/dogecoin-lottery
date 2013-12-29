<?php
$connection=new mysqli('localhost','root','','lottery');
function getDynamic($name){
	global $connection;
	$q=$connection->query('SELECT text FROM dynamic_content WHERE short_id="'.$name.'"');
	return $q->fetch_object()->text;
}
function top(){
	?>
	<!DOCTYPE html>
<html>
  <head>
    <title>Dogecoin Lottery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php#ref=logo">Dogecoin Lottery</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
	<script src="js/menuHighlighter.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<?php
}
function footer(){
	?>
		<div class="footer">&copy; <?=date('Y');?>. All rights reserved. You can donate at <span class="attention"><a href="http://dogechain.info/address/<?=getDynamic('donation')?>"><?=getDynamic('donation')?></a></span></div>
  </body>
</html>
	<?php
}
function remainingToRound(){
		$minimum=file_get_contents('/home/dogecoin/round'); //FIX ME, THIS SHIT SHOULD BE DYNAMIC
 //FIX ME, THIS SHIT SHOULD BE DYNAMIC
	$time=$minimum+3*3600;
	$remaining=$time-time();
	$divisions=[3600,60];
	$finished=[];
	foreach($divisions as $d){
		$r=returnDivisible($remaining,$d);
		$finished[]=$r['parts'];
		$remaining=$r['remaining'];
	}
	$finished[]=$remaining;
	return $finished[0].' hours, '.$finished[1].' minutes and '.$finished[2].' seconds';
	
}
function returnDivisible($number,$divideBy){
	$remaining=$number%$divideBy;
	$parts=(int)($number-$remaining)/$divideBy;
	return ['remaining'=>$remaining,'parts'=>$parts];
}