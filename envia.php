<?php 

include("conn.php");
   $stmt = $conn->prepare("INSERT INTO users (id, name, email) VALUES(:ID, :NAME, :EMAIL)");

   $id = $_POST['id'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   


   $stmt->bindParam(":NAME", $name);
   $stmt->bindParam(":EMAIL", $email);
   $stmt->bindParam(":ID", $id);
   
   $stmt->execute();

header("Location: list.php");

  ?>