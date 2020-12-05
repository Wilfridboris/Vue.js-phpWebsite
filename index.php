
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dependencies/bootstrap.min.css">
    <link rel="stylesheet" href="./dependencies/fontawesome/css/all.css">
    <link rel="stylesheet" href="home.css">
    
    <title>Home</title>
</head>
<body> 
    <main class="container-fluid">
            <?php include("./app/head.php") ?>

            <div class="row">
                <div class="col-sm-2">
                    <?php include("./app/panel.php")?>
                </div>
                <div class="col-sm-8">
                    <?php include("./app/bigpanel.php")?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <?php include("./app/allArtist.php") ?>
                </div>
                <div class="col-sm-8">
                    <?php include("./app/mainpanel.php") ?>
                </div>
            </div>

    </main>
    <script src="./dependencies/vue.js"></script>
    <script src="./dependencies/jquery.js"></script>
    <script src="./js/home.js"></script>
</body>
</html>