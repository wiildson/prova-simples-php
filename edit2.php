	<?php
include('conn.php');

$id = $_POST['id'];

$stmt = $conn->prepare('SELECT id, name, email FROM users WHERE id = :id');

$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);



?>


<h1>Alterar</h1>
<form action="edit_fim.php" method="post">
	<?php foreach ($results as $users) : ?>

<p><input type="hidden" value="<?= $users["id"] ?>" name="id"></p>
<label for="insert" class="insert">Nome:</label>
	<div class="input-group mb-3">
		<input type="text" class="name" id="name" name="name" value="<?=$users['name']?>" placeholder="Digite o nome...">
	</div>

<label for="insert-email" class="insert-email">E-mail:</label>
	<div class="input-group mb-3">
		<input type="email" class="email" id="email" name="email" value="<?= $users['email'] ?>" placeholder="Digite o E-mail...">
	</div>
	<?php endforeach; ?>
	<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Alterar</button>
  </div>
</form>
	

