<?php

require "./connection.php";
$result=$db->query('SELECT*FROM Artists LIMIT 6');
while($row=$result->fetchArray()){
      $artists[]=[
            
            'Name_Artist'=>$row['Name_Artist'],'Country_Artist'=>$row['Country_Artist'],'Image_Artist'=>$row['Image_Artist']
      
      
                  ];
      
    
       
    
    
}
//echo $artists;
echo json_encode($artists)
?>