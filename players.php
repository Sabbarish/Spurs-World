<?php
session_start();
if(isset($_SESSION['asdf']))
{
?>
<html>
<head>
<title>Spurs World-Players and Legends</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#Inner").click(function(){
        $("#Wrap").slideToggle("slow");
    });
});
$(document).ready(function(){
    $("#Home").click(function(){
        $("#Home").animate({fontSize:'40px'}, "fast");
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
#one, #two, #three
{
width: 350px;
height: 150px;
float: left;
border: 1px solid black;
margin-left: 100px;
margin-bottom: 100px;
}
#one
{
margin-left: 200px;
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
<div id="Home"><a href='home.php'>Home</a></div>
<div id="History"><a href='history.php'>History</a></div>
<div id="Players"><a href='#'>Players and Legends</a></div>
<div id="Trophies">Trophy Cabinet</div>
</div>
<img src="Logo.png" alt="logo" id="Logo">
<div id="Content">
<h1>Players</h1>
<div id="one"></div>
<div id="two"></div>
<div id="three"></div>
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