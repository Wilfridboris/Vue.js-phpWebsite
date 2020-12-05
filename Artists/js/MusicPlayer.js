$(function(){




    var url=window.location.search.split('?');
    var Artist_Name=(decodeURIComponent(url[1]));
    var songs=[];
    var songTitle=[];
    var count=0;
    $.ajax({
       type: "POST",
       url: "./functions/getMusic.php",
       data: {Artist_Name:Artist_Name},
       dataType: "JSON",
       success: function (data) {
           for(var i in data){
               songs.push(data[i].Src_Song);
               songTitle.push(data[i].Name_Song);
               $('#sectionMusic').append(`<li><a href="#"><h3 class="id">${count++}</h3><h3 class="title">${data[i].Name_Song}</h3><h3 class="time">2:50</h3></a></li>`)
                

               
           };

   
    
        //var songs=["./song/albums/burnaboy/Burna Boy - Gum Body (Feat. Jorja Smith) [Official Video]"+".mp3","Burna Boy - Ye [Official Audio]"+".mp3"];
     
    var song=new Audio();
    var bar=document.getElementById("bar");
    var currentSong=0;
    var position=0;
   
    var clickPosition;
    pauseSong();
  
   

    function playSong(){
        song.src=songs[currentSong];
        $(".songTitle a").text(songTitle[currentSong]);

        song.play();

    }
   
       


    

    function pauseSong(){
        $(".songTitle a").text(songTitle[currentSong]);
        song.src=songs[currentSong];
        song.pause();

    }
    //var songTitle=songs[currentSong].split('/')
    //$(".songTitle a"). text(songTitle[4]);

            //playOrpauseFunction begin()
            $('#play').on('click',function(){
                if(song.paused){
                    song.play();
                    $('i:eq(1)').removeClass('fa-pause');
                    $('i:eq(1)').addClass('fa-play');

                } else{
                    song.pause();
                    $('i:eq(1)').removeClass('fa-play');
                    $('i:eq(1)').addClass('fa-pause');
        
                }

            });
           
            //playOrpauseFunction end()

            //function mute() begin

            $('#mute').on('click',function(){
                if(song.muted==false){
                    song.muted=true;
                    $('#mute i').removeClass('fa-volume-up');
                    $('#mute i').addClass('fa-volume-mute');
                }else{
                    song.muted=false;
                     $('#mute i').removeClass('fa-volume-mute');
                    $('#mute i').addClass('fa-volume-up');
                }
            });

            //function mute() end

            
        
song.addEventListener('timeupdate',function(){
    if(song.ended){
        next();
    }
    var position=song.currentTime/song.duration;
    $('#fill')[0].style.width=position*100 +'%';
    let minute=parseInt(song.duration/60)
    let second=parseInt(song.duration%60)
    let playedMinute=parseInt(song.currentTime/60)
    let playedSecond=parseInt(song.currentTime%60)
    $('#duration').text(`${minute}:${second}`);
    $('#time').text(`${playedMinute}:${playedSecond}`);
   

    
    
});

bar.addEventListener("mousedown",function(event){
    var col2=document.getElementById('col2').offsetWidth;
    var col8=document.getElementById('col8').offsetWidth;
    var ecratCol=col2+col8;
    var barsize=document.getElementById('bar');
    var MusicPlayerCol=document.getElementById('MusicPlayerCol').offsetWidth;
    //console.log(MusicPlayerCol)
    if(MusicPlayerCol==320||MusicPlayerCol>320){
        clickPosition=event.clientX-barsize.offsetLeft;
        
        

    }else{
         
         clickPosition=event.clientX-ecratCol-barsize.offsetLeft;
         
    }
    
    

    song.currentTime=(clickPosition*song.duration)/bar.offsetWidth;
    $('#fill')[0].style.width=clickPosition+'px';

    
    
},false);


function next(){
    currentSong++;
    $(".songTitle a").text(songTitle[currentSong]);
    if(currentSong>5){
        currentSong=0;
    }
    playSong();

}
function pre(){
    currentSong--;
    $(".songTitle a").text(songTitle[currentSong]);
    if(currentSong<0){
        currentSong=0;
    }
    playSong();

}
//check if song ended


$('#next').on('click',function(){
next();
});

$('#pre').on('click',function(){
pre();
});

//################################## select the current click of the song####
$('a').has('h3.id').on('click',function(e){
    var current=$(this).children(".id").text();
    currentSong=current;
    $(".songTitle a").text(songTitle[currentSong]);
    playSong();
      
    e.preventDefault();
   
});  


           
       }

       
       
   });


   
   
});

   
  

    
    
    //console.log(mouseX);
    //var newtime=mouseX*song.duration/bar.offsetWidth;
    //console.log(newtime);
    //song.currentTime=newtime;
    //$('#fill')[0].style.width=mouseX+'%';


//window.clearInterval()
//updateTime=setInterval()






    




            
            
           

           


          
        
        
