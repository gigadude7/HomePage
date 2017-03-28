<?php
//Connect To Database
$hostname='';
$username='myusername';
$password='mypassword';
$dbname='testdb';
$usertable='test';
$yourfield = 'lat';

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

$query = 'SELECT * FROM ' . $usertable;
$result = mysql_query($query);
if($result) {
    while($row = mysql_fetch_array($result)){
        print $name = $row[$yourfield];
        echo 'Name: ' . $name;
    }
}
else {
    print "Database NOT Found ";
    mysql_close($db_handle);
}
?>