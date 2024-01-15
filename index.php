<!DOCTYPE html>
<html>
<head>
<title>Dietetics</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<meta charset="UTF-8">
    
<link rel="icon" type="image/png" href="/Images/Logo.png" sizes="192x192">
    
<link rel="stylesheet" type="text/css" href="/Css_files/index.css">
    
<link rel="stylesheet" href="/Css_files/Swiper.min.css">
    
<style> 
    
    /* Delete ads from webhost */    
    
    a { display: none; }
    
    .cards a{display: inline;}
    
    
    .theloveh1{
        color:red; 
        text-shadow:2px 2px 10px cyan; 
        text-align: center; 
        font-size: 20px;
        text-indent: 0px;
    }
    
    .thebreakh1{
        color:red; 
        text-shadow:2px 2px 10px cyan; 
        text-align: center; 
        font-size: 20px;"
        text-indent: 0px;
    }
    
    
    
    @media screen and (min-width:550px){
        .theloveh1{
        color:red; 
        text-shadow:2px 2px 10px cyan; 
        text-align: center; 
        font-size: 40px;
    }
    
    .thebreakh1{
        color:red; 
        text-shadow:2px 2px 10px cyan; 
        text-align: center; 
        font-size: 40px;"
    }
    }
    
    @media screen and (max-width:400px){
        .theloveh1{
        color:red; 
        text-shadow:2px 2px 10px cyan; 
        text-align: center; 
        font-size: 25px;
    }
    
    .thebreakh1{
        color:red; 
        text-shadow:2px 2px 10px cyan; 
        text-align: center; 
        font-size: 32px;"
    }
    }
    
    
    
    .extra{
        display: none;
    }
    
    @media screen and (min-width:550px){
        .extra{
        display: block;
    }
    }
    
    
    
    
        

    
    
    
    
    
    dt a{
        opacity:.6;
        text-decoration: none;
    }
    
    dt a:hover{
        opacity:1;
        background-color: yellow;
        margin: 10px;
    }
    
    
    
    </style>
    </head>
<body>
    
    
    
<!-- The main Navigation -->    
     <div id="progressbar"></div>
        <div id="scrollpath"></div>
    
    
    <div class="homepage-nav">
        
        <button class="homepage-nav-items" type="button" onclick="location.href='/Main_navs/For_future_me.html';">
            📚</button>
        
        <button class="homepage-nav-items" type="button" onclick="location.href='/Main_navs/Foods.html';">
            🍙</button>
        
        <button class="homepage-nav-items" type="button" onclick="location.href='index.html';">
            🏠</button>
        
        <button class="homepage-nav-items" type="button" onclick="location.href='/Main_navs/Minigames.html';">
            🎮</button>
        
        <button class="homepage-nav-items" type="button" onclick="location.href='/Main_navs/Notes.html';">
            📃</button>
        </div>

    
    
    
    
    
    
    
    
<!-- All contents -->    
    
    <div class="all-contents">
    
        
        <div class="cards"> 
        
            <br>
            <br>
            <br>
            <br>
            
        
        <div style="color:red; text-shadow:2px 2px 5px white; font-size:40px">Salut! Je suis YongKang He </div>

        <h3>Étudiant en informatique/mathématique à l'université de montréal</h3>
              
            <br>
            <br>
            <br>
        <p style="font-family:sans-serif;">

Il ne s'agit pas d'un projet commercial, mais simplement d'un projet réalisé par plaisir afin d'acquérir de l'expérience. Le code s'améliorera avec le temps, et le contenu deviendra plus complexe."

            </p>
        </div>
        
        

        
        
            
            
            

        
        
        
        
    
        
        <div class="cards">
        <h1>Table des matieres</h1>

            
        <div class="tablelist" style="color:white;">- La vie petit a petit：<a href="/Menus/General_menu.html">Notion de base</a></div>
            
            
        <div class="tablelist" style="color:white;">- Passe-temps：<a href="/Items/X_Homepage/Anime.html">Animes</a></div>
            
            
        <div class="tablelist" style="color:white;">- Moyen de se connaitre: <a href="/Main_navs/Constellation_nav.html">Constellation</a></div>

        
        </div>
 
            
            
        <div class="cards flex1-container">
            
        <div>   
        <div class="countdownall countdown-birthday">
            <p><a href="https://www.linkedin.com/in/yongkang-he-5390b9269/">
                <img src="Images/linkin.png" alt="linkin" style="width:42px;height:42px;"></a></p>
            </div>
                </div>
            
                
                
        <div>    
        <div class="countdownall countdown-august"> 
            <p><a href="https://github.com/Dietetics">
                <img src="Images/github.png" alt="linkin" style="width:42px;height:42px;"></a></p>
            </div>
            </div>
                
                
        <div>   
        <div class="countdownall countdown-august"> 
            <p><a href="mailto:X200106@gmail.com">
                <img src="Images/email.webp" alt="linkin" style="width:42px;height:42px;"></a></p>
            </div>
            </div>
                
        
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        
        
        
        
    </div>
    
    
    
    
    <!-- Scrolldown JS -->
    <script>
 let progress = document.getElementById('progressbar');
        let totalHeight = document.body.scrollHeight - window.innerHeight;
        window.onscroll = function(){
            let progressHeight = (window.pageYOffset / totalHeight) * 100;
            progress.style.height = progressHeight + "%";
        }
 </script>    

    
    <!-- Swiper JS -->
    <script src="/Javascript/Swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
      },
    });
  </script>
    

    
    


    
    </body>
</html>