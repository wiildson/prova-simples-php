<?php
include "conn.php"
?>


<h1>Inserir</h1>
<form action="envia.php" method="post">
<label for="insert" class="insert">Nome:</label>
	<div class="input-group mb-3">
		<input type="text" class="name" id="name" name="name" placeholder="Digite o nome...">
	</div>

<label for="insert-email" class="insert-email">E-mail:</label>
	<div class="input-group mb-3">
		<input type="email" class="email" id="email" name="email" placeholder="Digite o E-mail...">
	</div>

	<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Inserir</button>
  </div>

</form>

