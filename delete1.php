	<?php
include('conn.php');

$id = $_POST['id'];
$stmt = $conn->prepare("DELETE FROM users WHERE id = :ID");
$stmt->bindParam(":ID", $id);
$stmt->execute();



echo "Registro apagado";
header("Location: list.php");

?>