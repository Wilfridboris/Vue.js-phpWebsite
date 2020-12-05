<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="panel" id="panel">
        
        <ul>
            <li><a v-on:click="changeSelected"  href="../index.php">Home</a></li>
            <li><a v-on:click="changeSelected" class="selected" href="./Genres/genre.php">Categories</a></li>
            <li><a v-on:click="changeSelected" href="#">Overview</a></li>
        </ul>
    </div>
</body>
</html>