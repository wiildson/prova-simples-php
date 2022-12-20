
<?php
include('conn.php');

$stmt = $conn->prepare("SELECT * FROM users ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<?php
    include('conn.php');
    $stmt = $conn->prepare("SELECT * FROM users ORDER BY id");

    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<?php

$stmt = $conn->prepare("SELECT * FROM users ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
				<h1 id="main-title">DELETAR</h1>

				<form action="delete1.php" method="post">
				<label for="insert" class="insert">Digite o ID do qual deseja deletar:</label>
					<div class="input-group mb-3">
						<input type="number" class="id" id="id" name="id" placeholder="Digite o ID...">
					</div>

					<div class="col-auto">
				    <button type="submit" class="btn btn-primary mb-3">buscar</button>
				  </div>
				</form>	



				<div class="container">
					<table class="table" id="contacts-table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">E-mail</th>
								<th scope="col">Ação</th>
							</tr>
						</thead>


						<tbody>
							<?php foreach ($results as $users) : ?>
								<tr>
									<td scope="row"><?= $users["id"] ?></td>
									<td scope="row"><?= $users["name"] ?></td>
									<td scope="row"><?= $users["email"] ?></td>
									<td class="actions">
										<a href="delete2.php?id=<?= $users["id"] ?>">DELETAR ESTE</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				</div>
			</main>
		</div>
		</div>





