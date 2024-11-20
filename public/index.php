<?php
require_once ('../vendor/autoload.php');

$host = 'localhost';
$dbname = 'pdo';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
}
catch (PDOException $exception){
    echo("Error: " .  $exception->getMessage());
}

//$sql = "select * from users";
//
//$stmt = $pdo->query($sql);
//
//while ($user = $stmt->fetch(PDO::FETCH_ASSOC)){
//    echo($user["name"]);
//}

//$userID = 3;
//
//$sql = "select * from users where id = $userID";
//
//$stmt = $pdo->query($sql);
//
//$fov = $stmt->fetch(PDO::FETCH_ASSOC);
//echo ($fov['name']);
//
//$userID = 3;
//
//$sql = "select * from users where id = ?";
//
//$stmt = $pdo->prepare($sql);
//$stmt->execute([$userID]);
//
//$fov = $stmt->fetch(PDO::FETCH_ASSOC);
//echo ($fov['name']);


$userID = 3;

$sql = "select * from users where id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $userID]);

$fov = $stmt->fetch(PDO::FETCH_ASSOC);
echo ($fov['name']);
