dogecoin-lottery
================

A dogecoin lottery based on python3 and php5.4+

You should not be using this build in production, as it is in beta.


Requirements:
A linux distributon with installed:
    PHP5.4+/MySQL/Apache2 (Or some other web server)
    Python 3
    Dogecoind installed(Currently only supported on Ubuntu/Debian http://www.dogeco.in/wiki/index.php/Dogecoind. I will assume you have followed this guide.)


(line numbers may be changed in future commits)
Installation instructions:
1. Create a new database, and insert the content of lottery.sql into it.
2. Change the SQL details in functions.php (line 2, in the order of: host,username,password,database)
3. Copy the content of the project(except lottery.py) to /var/www or whatever your web dir is
4. Copy the content of lottery.py in /home/dogecoin (if you have followed the tutorial from the link above).
5. Change the dir on line 56(file=open('/var/www/log','a', in case it has changed) of lottery.py to your web dir, if you have changed it.
6. If you have changed any file paths, the only instance there is one is in current.php. Change it if you have moved anything around
7. Change your password on line 5 of current.php (282828 is a temp password.)
8. Add a cronjob that runs lottery.py every 3 hours (If you want to change that interval, edit the function returnToRound in functions.php, variable $time.)

Enjoy!
