<!DOCTYPE html>


<!-- LUis rodriguez - 0812903 -->

<html lang="en">
<head>
   
    <meta charset="UTF-8">
    
    <title>Create movie table</title>
</head>



<body>
   


   <?php
    require_once("includes/bootstrap.php");
    
    $dbc=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);

    $query = "CREATE TABLE IF NOT EXISTS movies (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        title varchar(150),
        productionCompany varchar(150), 
        yearReleased YEAR,
        director varchar(40)
        )";

        $result = $dbc->query($query);

        if($result){
            echo "The query was succesfully executed !";
        }else{
            echo "The query could not be executed !".$dbc->errorInfo()[2];
        }
    ?>


</body>


</html>