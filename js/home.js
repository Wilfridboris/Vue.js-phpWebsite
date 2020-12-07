var app=new Vue({
//panel module
el:'#panel',
data:{
    panel1:"Home",
    panel2:"Categories",
    panel3:"Overview"
},
methods:{
    /*
    changeSelected:function(event){
        var el=event.srcElement;
        event.preventDefault();
        $('div.panel ul li a.selected').removeClass('selected');
        $(el).addClass('selected');
    }
    */
}
})

//MainPanels module
var app2=new Vue({
el:'#mainpanel',

methods:{
    //Loads all artist in the doom begin
        loadArtist:function(){
            $.get("./functions/getArtist.php",function(data){
                 var artists= JSON.parse(data);
                 for(var i in artists){
                     $('#shortCuts').after(` <section id="shortCut" class="logos">
                     <a href="./Artists/albums.php?${artists[i].Name_Artist}">
                         <img src="${artists[i].Image_Artist}" height="150px" alt="">
                             <h1>${artists[i].Name_Artist}</h1>
                    </a>
                     <a  href="./Artists/albums.php?${artists[i].Name_Artist}">
                             <h1>${artists[i].Country_Artist}</h1>
                     </a>
                 </section>`)
                 }
                //console.log(this.artists);
                    
            })
        },
        loadAllartist:function(){
            $.get("./functions/getAllArtist.php",function(data){
               var all=JSON.parse(data);
                for(var i in all){
                    $('#all').append(`<li><a href="./Artists/albums.php?${all[i].Name_Artist}">${all[i].Name_Artist}</a></li>`)
                       
                   
                }


            });

        }
         //Loads all artist in the doom end
    },
created:function(){
    this.loadAllartist();
    this.loadArtist();   
    
}
});
//sent the post data
