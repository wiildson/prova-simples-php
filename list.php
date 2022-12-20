<?php
include "conn.php";

$stmt = $conn->prepare("SELECT * FROM users ORDER BY id");

$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultado as $row) {
    echo "ID: ".$row["id"]."<BR>";
    echo "Nome: ".$row["name"]."<BR>";
    echo "Email: ".$row["email"]."<BR><BR>";
    
}

?>

<a href="index.php"><button>Retornar</button></a>