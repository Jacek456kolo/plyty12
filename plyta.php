<?php
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';


$sql = "SELECT id, url1, wykonawca, tytul, rok FROM plyty1 WHERE $_GET["name"]"
?>

<div class="ramka">
				<div class="plyta1">
					<div>
						<img src="<?php echo $row["url1"]?>"></div>
					<div>
						<div class="pl1">"<?php echo $row["wykonawca"]?>"</div>
						<div class="pl2">"<?php echo $row["tytul"]?>"</div>
						<div class="pl3">"<?php echo $row["rok"]?>"</div>
					</div>
					
				</div>
			</div>
			