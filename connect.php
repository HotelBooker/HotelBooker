<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>connect to mysql </title>
</head>

<body>

<?PHP

$user_name = "hotelbooker";
$password = "c96eb216c72cd36dd396785615e3eafd";
$database = "hotelbooker.username";
$server = "server3.tezzt.nl";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

print "Database Found ";
mysql_close($db_handle);

}
else {

print "Database NOT Found ";

}

?>
</body>
</html>

