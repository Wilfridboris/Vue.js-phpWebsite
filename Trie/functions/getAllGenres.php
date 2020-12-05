<?php
require "./connection.php";
$result=$db->query('SELECT*FROM Genres');
while($row=$result->fetchArray()){
    $genres[]=[
            
        'Name_Genre'=>$row['Name_Genre'],'Cover_Genre'=>$row['Cover_Genre']
  
  
              ];
}
//echo $genres;
echo json_encode($genres)
?>