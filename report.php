<?php
$user = 'root';
$pwd = '';
$server = 'localhost';
$dbname = 'deCodeCongestion';

$conn = new mysqli($server, $user, $pwd, $dbname); //or die('Error connecting to MySQL server.');

$uid = $_POST['uid'];
$routeNumber = $_POST['routeNumber'];
$busNumberOne = $_POST['busNumberOne'];
$busNumberTwo = $_POST['$busNumberTwo'];

$result = $conn->query("call update_user_route");

echo $result;

// $mysqli->close();
?>
