import subprocess,json,random,time,datetime
bet=1

roundStart=int(time.time())
print(roundStart)
betsStart=open("round",'r').read()
open("round",'w').write(str(roundStart))
#dogecoind listtransactions temp 5000
o=subprocess.check_output(["dogecoind","listtransactions","temp","5000"]).decode("utf8")
rs=json.loads(o)
tickets=[]
prize=0
etsStart=0
ticketCount=0
for i in rs:
	if i['category']=='receive' and i['time']>int(betsStart) and i['confirmations']>0:
		ticketCount+=1
		raw=subprocess.check_output(['dogecoind','getrawtransaction',i['txid']]) 
		formatted=json.loads(subprocess.check_output(['dogecoind','decoderawtransaction',raw]).decode("utf8"))
		address=formatted['vout'][0]['scriptPubKey']['addresses'][0]; #Weird transactions are not supported.
		amount=i['amount'];
		prize+=amount;
		refund=amount%bet
		if refund>0:
			print("Returning"+str(refund)+" to"+address)
			#subprocess.call(['dogecoind','sendtoaddress',address,str(refund)])	
		tickets_bought=(amount-refund)/bet;
		n=0
		while n<tickets_bought:
			n+=1
			tickets.append(address)
		#print(address)
		#print(amount)
#print(rs)
#print(tickets)
draws=(80,2,3)
i=0
print("Max prize:"+str(prize))

if len(tickets)>0 and ticketCount>1:
	file=open('/var/www/log','a')
	file.write("== Confirmed bets from "+datetime.datetime.fromtimestamp(int(betsStart)).strftime('%Y-%m-%d %H:%M:%S')+" to "+datetime.datetime.fromtimestamp(roundStart).strftime('%Y-%m-%d %H:%M:%S')+" ==")
	file.write("\nWinners:\n");
	while i<len(draws):
		award=(draws[i]*prize)/100
		print(prize)
		print(draws[i])
		winner=random.randint(0,len(tickets)-1)
		print(tickets[winner]+" won "+str(draws[i])+"% of the total, which is"+str(award))
		file.write(tickets[winner]+" won "+str(award)+"\n")
		subprocess.call(['dogecoind','sendtoaddress',tickets[winner],str(award)])	
		i+=1
	file.close();
elif ticketCount==1:
	print("No winners this round, returning transactions")
	file=open('/var/www/log','a')
	file.write("\nOnly one bet, refunding.")
	subprocess.call(['dogecoind','sendtoaddress',tickets[0],str(prize)])
	#Man, I hope this doesn't break everything.
else:
	print("Noone bet this round :(")
