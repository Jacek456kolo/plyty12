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
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "root", "", "baza1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "SELECT id, url1, wykonawca, tytul, rok FROM plyty1";
if(mysqli_query($link, $sql)){
    echo "Records getting successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
  while($row = mysql_fetch_assoc($retval)) {
      echo "id :{$row['id']}  <br> ".
	  "url1: {$row['url1']} <br> ".
        "wykonawca: {$row['wykonawca']} <br> ".
		"tytul: {$row['tytul']} <br> ".
		"rok: {$row['rok']} <br> ";
  }
  
// Close connection
mysqli_close($link);
?>	
			
			
		
		
	</body>
</html> 			