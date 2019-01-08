<?php
	require('objSkryptphp.php');
	
	$pdo = new Objektowo();
	$pdo->getTable();
	
	if(isset($_POST['dodaj'])){
		$pdo->addUser($_POST['imie'],$_POST['nazwisko'],$_POST['zawod'],$_POST['miasto'],$_POST['email']);
	}
?>
			<script src="walidacja.js"></script>
			<form action="index.php" name="forma" onsubmit="return validateForm()" method="post">
				Imie: <input type="text" name="imie"><br>
				Nazwisko: <input type="text" name="nazwisko"><br>
				Miasto: <input type="text" name="miasto"><br>
				Zawod: <input type="text" name="zawod"><br>
				Email: <input type="text" name="email"><br>
				<input type="submit" name="dodaj" value="Dodaj">
			</form>