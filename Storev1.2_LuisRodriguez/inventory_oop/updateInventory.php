<!DOCTYPE html>

<!-- LUis rodriguez - 0812903 -->


<html lang="en">



<head>


    <meta charset="UTF-8">

    <title>Update inventory database</title>

</head>

<body style="background-color:rgb(229,243,247);">

    <h3>UPDATING  inventory in the database</h3>
    
	
	<h4>Programmed by {Luis rodriguez}</h4> <br>

    <?php
    require_once("includes/bootstrap.php");

    $title = trim($_POST['Title']);
    $director = trim($_POST['Director']);

    $title = trim($_POST['title']);
    $album = trim($_POST['Album']);
    
    if(isset($_POST['submitMovie'])){
        
		$movie = Movie::find($dbc, $title);
        
		$movie->setDirector($director);
        
		$result = $movie->update($dbc);
    }else{
        $music = Music::find($dbc, $title);
        $music->setAlbum($album);
        $result = $music->update($dbc);
    }
    if($result){
        echo "The  UPDATE query was successful.";
    }else{
        echo "The  UPDATE query failed!";
    }

    

    

    
    


    ?>
</body>
</html>