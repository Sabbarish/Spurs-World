<?php
session_start();
if(isset($_SESSION['asdf']))
{
?>
<html>
<head>
<title>Spurs World-Home</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#Inner").click(function(){
        $("#Wrap").slideToggle("slow");
    });
});
$(document).ready(function(){
    $("#Home").click(function(){
        $("#Home").animate({fontSize:'40px'}, "slow");
    });
});
$(document).ready(function(){
    $("#History").click(function(){
        $("#History").animate({fontSize:'40px'}, "slow");
    });
});
$(document).ready(function(){
    $("#Players").click(function(){
        $("#Players").animate({fontSize:'30px'}, "slow");
    });
});
$(document).ready(function(){
    $("#Trophies").click(function(){
        $("#Trophies").animate({fontSize:'35px'}, "slow");
    });
});
$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      3000);
});
</script>
<style>
#Upper
{
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 30px;
}
#Lower
{
position: fixed;
top: 30;
left:0;
width: 100%;
height: 50px;
background-color: #0F204B;
z-index:-1;
color: white;
font-size: 35px;
text-align: center;
font-family: 'Showcard Gothic';
}
#Inner
{
position: fixed;
top: 0;
right: 0;
width: 105px;
height: 30px;
font-size: 20px;
color: white;
background-color: #0F204B;
text-align: center;
}
#Wrap
{
position: fixed;
top: 30;
right: 0;
display:none;
background-color: #DDDDDD;
width: 105px;
height: 95px;
font-size: 20px;
}
#Profile, #Settings, #Logout
{
border: 1px solid #0A0A0A;
height: 30px;
width: 105px;
}
a:link 
{
text-decoration: none;
color: white
}
a:visited 
{
text-decoration: none;
color: white
}
a:hover 
{
text-decoration: none;
color: white
}
a:active
{
text-decoration: none;
color: white
}
#Menu
{
position: fixed;
top: 80;
left:0;
width: 260px;
height: 642px;
border: 2px solid black;
}
#Home, #History, #Players, #Trophies
{
border: 3px solid black;
width: 255px;
height: 50px;
background-color: #0F204B;
text-align: center;
font-size: 27px;
color: white;
}
#Logo
{
position: fixed;
top: 90;
right: 50;
width: 300px;
height: 600px;
opacity: 0.4;
z-index: -1;
}
#Content
{
position: fixed;
top: 80px;
left: 260;
width: 1290px;
padding-right: 20px;
height: 680px;
overflow: scroll;
text-align: justify;
}
h1
{
padding-left: 10px;
color: #0F204B;
font-size: 40px;
}
p
{
color: #0F204B;
font-size: 23px;
padding-left: 10px;
} 
.fadein 
{ 
position:relative;
left: 200px;
width: 800px; 
height: 519px; 
}
.fadein img 
{ 
position:absolute; 
left:0; 
top:0; 
}
</style>
</head>
<body>
<div id="Upper">
<div id="Inner"><a href="#">
<?php
echo $_SESSION['asdf']."&#9660;"
?></a></div>
</div>
<div id="Wrap">
<div id="Profile">Profile</div>
<div id="Settings">Settings</div>
<div id="Logout">Logout</div>
</div>
<div id="Lower">Everything about Spurs</div>
<div id="Menu">
<div id="Home"><a href='#'>Home</a></div>
<div id="History"><a href='history.php'>History</a></div>
<div id="Players"><a href='players.php'>Players and Legends</a></div>
<div id="Trophies">Trophy Cabinet</div>
</div>
<img src="Logo.png" alt="logo" id="Logo">
<div id="Content">
<h1>Spurs World-Home</h1>
<p>You are here at the Spurs Home!<br>You can find everything related to the football club Tottenham Hotspur.</p>
<p>Tottenham Hotspur is a football club located in London. It's rivals are Arsenal, Chelsea and West Ham. It participates in the top division of English League, English Premier League. This club is particularly famous for it's Jewish following and has been frequently provoked by anti-semitic chants. So, the fans united against this and adopted the name "Yids". We ended the last season runners up to Chelsea.</p>
<div class="fadein">
<img src="Finalex1.jpg" alt="F1">
<img src="Finalex2.jpg" alt="F2">
<img src="Finalex3.jpg" alt="F3">
<img src="Finalex4.jpg" alt="F4">
<img src="Finalex5.jpg" alt="F5">
<img src="Finalex6.jpg" alt="F6">
<img src="Finalex7.jpg" alt="F7">
<img src="Finalex8.jpg" alt="F8">
</div>
<p>Last season was the final season for our beloved stadium, White Hart Lane. The last game in the Lane was named as "The Lane the Finale" and we played against Manchester United. Emotions ran high and Tottenham Hotspur won the game 2-1 after dominating the game. Even though the official page had already asked the fans not to flood the ground, the fans can't contain their emotions and flooded the ground, to cherish the final moments of the Lane. Many took the grass as a souvenir and some even tried to take the chairs home. The farewell ceremony continued even in the rain, and the rainbow declared the end of an era.</p>
<img src="WHL.jpg" alt="Rainbow" style="padding-left: 200px;">
<p>This is the best moment of the day.</p>
<img src="Finale9.jpg" alt="F9" style="padding-left: 250px;">
<p>Kane’s being mobbed by fans, but still has a smile on his face. He truly is one of our own.</p>
</div>
</body>
</html>
<?php
}
else
{
header("location:index.php?q=er");
}
?>