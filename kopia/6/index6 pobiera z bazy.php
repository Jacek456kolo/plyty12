<!DOCTYPE html>
<html lang="en">
	<head>
		
		
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Plyty</title>
		
		<link href="StyleSheet1.css" rel="stylesheet">
					
	</head>
	
	
	
	<body>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "baza1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, url1, wykonawca, tytul, rok FROM plyty1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - nr: " . $row["url1"]. " wykonawca: " . $row["wykonawca"]. " tytul " . $row["tytul"]. " rok: " . $row["rok"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
		
	</body>
</html> 			