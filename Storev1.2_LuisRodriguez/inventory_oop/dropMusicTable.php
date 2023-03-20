<!DOCTYPE html>


<!-- LUis rodriguez - 0812903 -->


<html>

<head>
	
	<title>Drop Movies Table</title>
	
	
</head>

<body>






<?php
	// Bootstrap the application by loading required library files
	require_once ("includes/bootstrap.php");

	$dbc = new PDO("mysql:host=". DB_HOST .";dbname=". DB_NAME, DB_USER, DB_PASSWORD);

	$sql = "DROP TABLE IF EXISTS `music`;";

	$result = $dbc->query($sql);

	if ($result) {
		echo "The query was successfully executed";
	} else {
		echo "The query could not be executed " . $dbc->errorInfo()[2];
	}

?>



</body>

</html>

