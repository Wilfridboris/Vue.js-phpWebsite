var app=new Vue({

el:'#TopPanel',
data:{
    item1:'genres',
    item2:'poadcast',
    item3:'new adds'

},
methods:{
    loadGenres:function(){
        $.get("functions/getAllGenres.php",function(data){
            var genres=JSON.parse(data);
            console.log(genres);
            for(var i in genres){
                $('#CenterPanel').append(`  <section class="logos">
                
                <img src="${genres[i].Cover_Genre}" height="150px" width="150px" alt="">
                <div class="fix-title">
                       <a href=""><h5>${genres[i].Name_Genre}</h5> </a>
                </div>
       </section>`);
            }
           

        })
    }
},
created:function(){
    this.loadGenres();
}
});