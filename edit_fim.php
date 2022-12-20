<?php
include('conn.php');

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$stmt = $conn->prepare('UPDATE users SET id = :id, name = :name, email = :email WHERE id = :id');

$stmt->bindParam(":name", $name);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":id", $id);

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

header('Location: list.php');
?>