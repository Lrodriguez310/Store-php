<!DOCTYPE html>



<!-- LUis rodriguez - 0812903 -->


<html lang="en">
<head>
    
    <meta charset="UTF-8">
    
    <title>Display Inventory</title>
	
	
</head>



<body>
    
	
	
	<?php
    
	require_once("includes/bootstrap.php");

    ?>
   




   <h2>Display Movie Records</h2>
    <table border='1' width='75%' cellspacing='2' cellpadding='2' align='center'>
        <tr align='center' valign='top'>
            <td align="center" valign='top'><b>TITLE</b></td>
            <td align="center" valign='top'><b>DIRECTOR</b></td>
            <td align="center" valign='top'><b>PRODUCTION COMPANY</b></td>
            <td align="center" valign='top'><b>YEAR RELEASED</b></td>
        </tr>
		
		
		
		
		
    <?php
    $movies = Movie::all($dbc);

    if($movies){
        foreach($movies as $movie){
            echo "<tr align='center'>";
            echo "<td align='center'>{$movie['title']}</td>";
            echo "<td align='center'>{$movie['director']}</td>";
            echo "<td align='center'>{$movie['productionCompany']}</td>";
            echo "<td align='center'>{$movie['yearReleased']}</td>";
            echo "</tr>";
        }
    }
        else{
            echo "<tr align='center'>";
            echo "<td colspan='4'>NO RESULTS</td>";
            echo "</tr>";

        }
    
    ?>
	
	
	
	
	
    </table>
    
	
	
	
	
	
	<h2>Display Music Records</h2>
    <table border='1' width='75%' cellspacing='2' cellpadding='2' align='center'>
        <tr align='center' valign='top'>
            <td align="center" valign='top'><b>TITLE</b></td>
            <td align="center" valign='top'><b>ALBUM TITLE</b></td>
            <td align="center" valign='top'><b>PRODUCTION COMPANY</b></td>
            <td align="center" valign='top'><b>YEAR RELEASED</b></td>
        </tr>
    <?php
    $musicRecords = Music::all($dbc);

    if($musicRecords){
        foreach($musicRecords as $music){
            echo "<tr align='center'>";
            echo "<td align='center'>{$music['title']}</td>";
            echo "<td align='center'>{$music['album']}</td>";
            echo "<td align='center'>{$music['production_company']}</td>";
            echo "<td align='center'>{$music['year_released']}</td>";
            echo "</tr>";
        }
    }
        else{
            echo "<tr align='center'>";
            echo "<td colspan='4'>NO RECORDS FOUND</td>";
            echo "</tr>";

        }
    
    ?>
    
	
	
	</table>


</body>


</html>