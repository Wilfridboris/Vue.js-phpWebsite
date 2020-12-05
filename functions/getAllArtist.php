<?php

require "./connection.php";
$statement=$db->prepare('SELECT*FROM Artists');
$result=$statement->execute();
while($row=$result->fetchArray()){

    $Allartists[]=[
            
        'Name_Artist'=>$row['Name_Artist']
  
  
              ];
}
echo json_encode($Allartists);

?>