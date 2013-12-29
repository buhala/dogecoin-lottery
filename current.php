<?php
include 'functions.php';
top();
exec('echo password | sudo -S -u dogecoin dogecoind listtransactions temp 5000 2>&1',$output);
$json=json_decode(implode($output,''));
echo '<div class="page-other">';
//print_r($json);
foreach($json as $transaction){
	if($transaction->time>=$minimum && $transaction->category=='receive'){
		$award+=$transaction->amount;
		$transactions[]=$transaction;
		//print_r($transaction);
	}
}
//print_r($json);
$a=remainingToRound();
echo '<h1 style="text-align:center">Time until next round</h1><h2 style="text-align:center;"><span class="attention">'.$a.'</span></h2><br><h1 style="text-align:center;">Send bets to:<br><span class="attention">'.getDynamic('bet_addr').'</span></h1><h1 style="text-align:center">Transactions</h1><pre style="text-align:center">';
foreach($transactions as $t){
	$i++;
	if($i<=5){
		echo '[UP]['.$transactions[$i]->time.'] FROM '.$transactions[$i]->txid.' GOT '.$transactions[$i]->amount."\n";
	}
	else{
		break;
	}
}
$odds=(int)$award.':1';
$award=0.3*(int)$award;
echo '</pre>';
echo '<h1 style="text-align:center">Stats</h1>';
echo '<h4><table style="margin:0 auto;" border="1"><tr><td>Maximum award</td><td>'.$award.'</td></tr><tr><td>Chance of winning if you bet 1 doge</td><td>'.$odds.'</td></tr></table></h4>';
echo '<center>(betting 2 will double your chance, betting 3 will tripple it, etc. <span class="attention"><a href="about.php#info">More info.</a></span>)<hr></center>';
footer();
echo '</div>';