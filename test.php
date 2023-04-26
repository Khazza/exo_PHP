<!DOCTYPE html>
<html>
<head>
	<title>Liste des nouveaux utilisateurs inscrits</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Liste des nouveaux utilisateurs inscrits</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Email</th>
					<th>Téléphone</th>
					<th>Ville</th>
					<th>Etat</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$file_url = "customers.csv";
					$file_content = file($file_url); // Lire le contenu du fichier CSV distant

					foreach($file_content as $line){
						$data = explode(",", $line); // Découper chaque ligne en utilisant la virgule comme séparateur
						$surname = $data[0];
						$firstname = $data[1];
						$email = $data[2];
						$phone = $data[3];
						$city = $data[4];
						$state = $data[5];
						echo "<tr><td>$surname</td><td>$firstname</td><td>$email</td><td>$phone</td><td>$city</td><td>$state</td></tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>