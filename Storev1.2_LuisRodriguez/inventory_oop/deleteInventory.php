<!DOCTYPE html>

<!-- Luis Rodriguez - 0812903 -->



<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Deleting Inventory from the Database </title>
</head>
<body>
    
	<h3>Deleting records Using PHP</h3>
    
	<h4>Programmed by {Luis Rodriguez}</h4>
    
	
	<?php
    require_once("includes/bootstrap.php");

    $title = trim($_POST['Title']);
    
    $result = Movie::delete($dbc, $title);

    if($result){
        echo "The DELETE Query was successfully executed!";
    }else{
        echo "The DELETE Query could not be executed!";
    }

    $title = trim($_POST['title']);

    $resultMusic = Music::delete($dbc, $title);

    if($resultMusic){
        echo "The DELETE query was successfully executed";
    }else{
        echo "The DELETE query could not be executed";
    }
    ?>
	
	
</body>
</html>