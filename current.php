<?php
include 'functions.php';
top();
$minimum=file_get_contents('/home/dogecoin/round');
exec('echo 282828 | sudo -S -u dogecoin dogecoind listtransactions temp 5000 2>&1',$output);
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
$i=0;
foreach($transactions as $t){
	
	if($i<=5){
		echo '[UP]['.$transactions[$i]->time.'] FROM '.$transactions[$i]->txid.' GOT '.$transactions[$i]->amount."\n";
	}
	else{
		break;
	}
	$i++;
}
if($i==0){
	echo 'No transactions have been made this round!';
}

$award_official=0.3*(int)$award;
$award_official++;

$odds=(int)$award.':1';
echo '</pre>';
echo '<h1 style="text-align:center">Stats</h1>';
echo '<h4><table style="margin:0 auto;" border="1"><tr><td>Maximum award</td><td>'.$award_official.'</td></tr><tr><td>Chance of winning if you bet 1 doge</td><td>'.$odds.'</td></tr></table></h4>';
echo '<center>(betting 2 will double your chance, betting 3 will tripple it, etc. <span class="attention"><a href="about.php#info">More info.</a></span>)<hr></center>';
footer();
echo '</div>';
