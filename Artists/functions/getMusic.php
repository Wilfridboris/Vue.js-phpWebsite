<?php
$Name_Artist=isset($_POST['Artist_Name'])?$_POST['Artist_Name']:"No Data";
require "./connection.php";
$statement=$db->prepare('SELECT Name_Song ,Src_Song from AlbumMusic JOIN Songs USING(Name_Song) JOIN Albums USING(Name_Album)
JOIN ArtistAlbum USING(Name_Album) JOIN Artists USING(Name_Artist) WHERE Name_Artist=:Name_Artist;');
$statement->bindValue(':Name_Artist',$Name_Artist,SQLITE3_TEXT);

$result3=$statement->execute();
while($row=$result3->fetchArray()){
    $music[]=[
        'Name_Song'=>$row['Name_Song'],'Src_Song'=>$row['Src_Song']
        
    ];

}
echo json_encode($music);

?>