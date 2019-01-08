<?php
	class Objektowo{
		
		private $pdo = null;
		
		public function __construct(){
			try{
				$this->pdo = new PDO('mysql:host=localhost;dbname=uzytkownicy','prac','prac');
			}catch(PDOException $e){
				echo 'Polaczenie nie moglo zostac utworzone: ' . $e->getMessage();
			}
		}
		
		public function getTable(){
			
			$stmt = $this->pdo->query("SELECT * FROM users");
	
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
					</tr>';
			}
			echo '</table>';
		}
		
		public function addUser($imie,$nazwisko,$miasto,$zawod,$email){
			$pdoQuery = "INSERT INTO users(imie,nazwisko,miasto,zawod,email) VALUES(:imie,:nazwisko,:miasto,:zawod,:email)";
			$pdoResult = $this->pdo->prepare($pdoQuery);
			$pdoExec = $pdoResult->execute(array(":imie"=>$imie,":nazwisko"=>$nazwisko,":miasto"=>$miasto,":zawod"=>$zawod,":email"=>$email));
			$arr = $pdoResult->errorInfo();
			print_r($arr);
			if($pdoExec){
				echo 'Dodano rekord';
			}else{
				echo 'Niedodano rekordu';
			}
		}
	}

?>