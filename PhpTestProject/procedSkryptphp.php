<?php
	$pdo = new PDO('mysql:host=localhost;dbname=uzytkownicy','prac','prac');
	$stmt = $pdo->query("SELECT * FROM users");
	
	echo'<table border="1">
				<tr>
					<th>ID</th>
					<th>Imie</th>
					<th>Nazwisko</th>
					<th>Miasto</th>
					<th>Zawod</th>
					<th>Email</th>
				</tr>';
	
	foreach($stmt as $row){
		echo' <tr>
					<th>'.$row['users_id'].'</th>
					<th>'.$row['imie'].'</th>
					<th>'.$row['nazwisko'].'</th>
					<th>'.$row['miasto'].'</th>
					<th>'.$row['zawod'].'</th>
					<th>'.$row['email'].'</th>
			</tr></table>';
	}
?>