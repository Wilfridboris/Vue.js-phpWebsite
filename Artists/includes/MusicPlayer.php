<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="MusicPlayer" id="MusicPlayer">
        <div class="player">
            <section class="songTitle"><a href=""></a></section>
            <section class="buttons">
                <button id="pre"><a><i class="fas fa-step-backward"></i></a></button>
                <button id="play"><a><i class="fas fa-pause"></i></a></button>
                <button id="next"><a ><i class="fas fa-step-forward"></i></a></button>
            </section>

            <section class="volume">
                <div><button id="mute"><i class="fas fa-volume-up"></i></button></div>
                <div>
                        <div  id="fill_mute"></div>
                        <div id="handle_mute"></div>
                </div>
            </section>
            <section id="bar"> 
                <div  id="fill"></div>
                <div id="handle"></div>
            </section>
            <span id="time">0:00</span>
            <span id="duration">0:00</span>
        </div>
    </div>
    
</body>
</html>