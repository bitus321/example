<?PHP

$user_name = "root";
$password = "";
$database = "survey";
$server = "127.0.0.1";

//$database = new mysqli('localhost', $user_name, $password, $database) or die("Unable to connect");


//$database = "survey";
mysqli_connect( $server, $user_name, $password, $database);

print "Połączono z bazą danych:";

?>