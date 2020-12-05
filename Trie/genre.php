

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dependencies/bootstrap.min.css">
    <link rel="stylesheet" href="../dependencies/fontawesome/css/all.css">
    <link rel="stylesheet" href="genre.css">
    <title>Genre</title>
</head>
<body>
    <main class="container-fluid">
         <?php include("./includes/head.php") ?>
         <div class="row">
                <div class="col-sm-2">
                    <?php include("./includes/panel.php")?>
                </div>
                <div class="col-sm-8">
                    <?php include("./includes/TopPanel.php")?>
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
<script src="../dependencies/vue.js"></script>
<script src="../dependencies/jquery.js"></script>
<script src="./genre.js"></script>
</body>
</html>