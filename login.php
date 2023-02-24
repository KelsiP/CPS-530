<?php /*

$hostname = "localhost";
$username = "kgpatel";
$password = "dijkach]";
$database = "kgpatel";
$connect = mysqli_connect($hostname, $username, $password, $database);
if($connect){
  print("Connection Established Successfully <br>");
}else{
  print("Connection Failed <br>");
}*/

$servername = "localhost";
$username = "kgpatel";
$password = "dijkach]";
$dbname = "kgpatel";
$connection = new mysqli($username, $password, $dbname);
$conn = new mysqli($servername, $username, $password, $dbname);
$connect = mysqli_connect($hostname, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>