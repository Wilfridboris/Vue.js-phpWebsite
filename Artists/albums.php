
<?php
//get the Data
//$url=$_SERVER['REQUEST_URI'];
//$parts=parse_url($url);
//$Artist_Name= urldecode($parts['query']); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dependencies/bootstrap.min.css">
    <link rel="stylesheet" href="../dependencies/fontawesome/css/all.css">
    <link rel="stylesheet" href="./artist.css">
    <title>Document</title>
</head>
<body>
<main class="container-fluid">
         <?php include("./includes/head.php") ?>
         <div class="row">
                <div class="col-sm-2" id="col2">
                    <?php include("./includes/panel.php")?>
                </div>
                <div class="col-sm-8" id="col8">
                    <?php include("./includes/AlbumTopPanel.php")?>
                        <div class="row">
                            <div class="col-sm-8">
                                <?php include("./includes/AlbumCenterPanel.php")?>
                            </div>
                            <div class="col-sm-4">
                                <!--nothing for now-->
                            </div>
                        </div>
                </div>

                <div class="col-sm-2" id="MusicPlayerCol">
                    <?php include("./includes/MusicPlayer.php")?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <?php include("./includes/allArtist.php") ?>
                </div>
                <div class="col-sm-8">
                       <!--add something-->
                </div>
            </div>
    </main>
<script src="../dependencies/vue.min.js"></script>
<script src="../dependencies/jquery.js"></script>
<script src="./js/MusicPlayer.js"></script>
<script src="./artist.js"></script>
</body>
</html>