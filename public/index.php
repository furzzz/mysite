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


//$userID = 3;
//
//$sql = "select * from users where id = :id";
//
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['id' => $userID]);
//
//$fov = $stmt->fetch(PDO::FETCH_ASSOC);
//echo ($fov['name']);


//$name = 'Михаил Палыч';
//$age = 45;
//$login = 'pavlik228';
//$password = 'passw@rd';
//
//$sql = "insert into users (name, age, login, password) values (:name, :age, :login, :password)";
//$stmt = $pdo->prepare($sql);
//$stmt->execute([
//    'name' => $name,
//    'age' => $age,
//    'login' => $login,
//    'password' => $password
//]);

//
//$userId = 4;
//$newPassword = 'VeryStrongPassw@rd';
//$sql = "UPDATE users SET password = :password WHERE id = :id";
//$stmt = $pdo->prepare($sql);
//$stmt->execute([
//    'password' => $newPassword,
//    'id' => $userId,
//]);

$userId = 4;
$sql = "DELETE FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId]);
