<!DOCTYPE html>

<!-- Luis Rodriguez - 0812903 -->


<html>
<head>
    <title>Create Music Table</title>
</head>

<body>
<?php
    
	
	
	// Bootstrap the application by loading required library files
    
	
	
	require_once("includes/bootstrap.php");

    $dbc = new PDO("mysql:host=". DB_HOST .";dbname=". DB_NAME, DB_USER, DB_PASSWORD);

    $sql = "CREATE TABLE IF NOT EXISTS music (
            id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            title varchar(150), 
            production_company varchar(150), 
            year_released YEAR, 
            album varchar(150))";

    $result = $dbc->query($sql);

    if ($result) {
        echo "The query was successfully executed";
    } else {
        echo "The query could not be executed " . $dbc->errorInfo()[2];
    }

?>
</body>

</html>

