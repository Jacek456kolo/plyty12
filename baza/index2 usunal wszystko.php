<!DOCTYPE html>
<html lang="en">
	<head>
		
		
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP - Hello, World!</title>
		
		<link href="StyleSheet1.css" rel="stylesheet">
					
	</head>
	
	
	
	<body>
		
		<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "baza1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "DELETE FROM persons WHERE 1";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>	
			
			
		
		
	</body>
</html> 			