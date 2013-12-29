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
          <a class="navbar-brand" href="#">Dogecoin Lottery</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
		<div class="page-other">
		<h2>What is this?</h2>
		This is a lottery that is played using the virtual currency of dogecoins. It has rules similar to the real game of lottery, only it's not completely random (You cannot have random numbers in computers. They are emulated). The rules are explained clearly in the bottom of this page.
		<h2>What is dogecoin?</h2>
		<small><i>Source:<span class="attention"><a href="http://en.wikipedia.org/wiki/Dogecoin">Wikipedia</a></span></i></small><br>
		Dogecoin (code: DOGE, symbol: D), is a Litecoin-derived cryptocurrency that uses the Shiba Inu dog character from the 'Doge' Internet meme as its mascot.<br>
		To put it in simple terms, dogecoin is a virtual currency. You can mine it, exchanging CPU/GPU power for money.
		<h2>How can I know I'm not being scammed?</h2>
		I can't prove that I will not steal your money. However, my algorhitm is open-source. You can find it at the top of the page. <b>However</b> that doesn't guarantee you that I won't steal your doges. I am trying to make the whole process as transparent as possible, this is why there is  a public 'lottery log', that shows the address(that you cannot be identified by), and how much it has won.
		<h2>I accidentally bet 1.1 DOGE, can I have 0.1 doge back?</h2>
		Originally (on the testing stages of this lottery), refunds were automatically made. However, that is no longer possible, due to a recent change to the way taxes are calculated, so the transaction fee is bigger than the transaction itself. Sorry :(
		<h2>How are winners picked?</h2>
		First, all transactions since the last draw are taken. Then, the excess (after the decimal point) is removed from each transaction. For each doge there is, one entry is added to a list (for example, if you have paid 50 doges, you will get 50 entries. Then, an entry is picked, 3 times, each for a smaller price. Then, the prices are sent where they belong.
		<br>
		If you are interested, you can review the source code of the program.
		<h2>Why is the website so ugly :(</h2>
		I'm just a lonely programmer. If you are interested in helping me with a better design, feel free to contact me :).
		</div>
	<div class="footer">&copy; <?=date('Y');?>. All rights reserved. You can donate at <span class="attention"><a href="http://dogechain.info/address/D6hGApfB7YFGyzG9cnV9njHS664LtSf1B2">D6hGApfB7YFGyzG9cnV9njHS664LtSf1B2</a></span></div>
  </body>
</html>
