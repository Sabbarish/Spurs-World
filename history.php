<?php
session_start();
if(isset($_SESSION['asdf']))
{
?>
<html>
<head>
<title>Spurs World-History</title>
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
h2
{
padding-left: 30px;
color: #0F204B;
font-size: 30px;
}
p
{
color: #0F204B;
font-size: 23px;
padding-left: 80px;
} 
#Bill, #Maradona, #Bale, #Poch
{
float: right;
margin-left: 10px;
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
<div id="History"><a href='#'>History</a></div>
<div id="Players"><a href='players.php'>Players and Legends</a></div>
<div id="Trophies">Trophy Cabinet</div>
</div>
<img src="Logo.png" alt="logo" id="Logo">
<div id="Content">
<h1>History</h1>
<h2>&#9679;Beginnings</h2>
<p>Tottenham Hotspur F.C. was formed in 5 September 1882 as Hotspur F.C. The name "Hotspur" was coined after Sir Henry Percy who was commonly known as Harry Hotspur. Since Harry Hotspur was famous for his fighting cockerels, Tottenham adopted cockerel as it's crest. Tottenham played in the Southern League from 1896 till 1908, when they were elected into the Football League Second Division. Spurs won the FA Cup in 1901 which made them the only non-league team to win the FA Cup.</p>
<h2>&#9679;Pre-Bill Nicholson Era(1908-1938)</h2>
<p>Tottenham got inducted into the Football League Second Division to replace Stoke City who were having financial troubles and immediately won the promotion to the First Division as the runners-up. The rivalry with Arsenal started in 1913 when Arsenal moved from South London to North London, occupying Tottenham's areas which led to the wrath Spurs fans. This rivalry is one of the longest standing and most bitter rivalries in the Football world. It's also called as the North London Derby. Tottenham won the FA Cup again in 1921, leading to the hoodoo that Tottenham will always win the FA cup in the first year of every decade, and it had happened many times (1901,1921,1961,1981,1991).</p>
<h2>&#9679;Bill Nicholson Era(1938-1974)</h2>
<img src="Bill.jpg" alt="Bill" id="Bill">
<p>Bill Nicholson was born in 26 January 1919 and he joined Tottenham in 1938. He played in the wing-half position (similar to wing back). Football League was suspended from 1939 to 1945 because of war. So, he had to miss his first 6 years of football because of war. Even though the war had cost him half of his playing career, he said that he never regreted it as his experiences taught him the man management skills which were very important in his managerial career. He played only one match for England National team but he wrote his name in the history books by scoring with his first touch of the ball within 19 seconds. He was a vital part of the legendary "Push and run" tactics of Tottenham. Tottenham won the Second Division in 1949-1950 and immediately won the First Division next season. The then manager Arthur Rowe suffered with ill-health resulting in a steady decline of the team. And in 1955, Jimmy Anderson took over as the manager and the condition became even worse. Tottenham almost relegated in the 1955-56 season. But in the next season, the club saw a surpise revival resulting in the 2nd place in the league. But due to his illness, Jimmy Anderson had to quit and then entered the legendary Bill Nicholson. He is the Mr. Tottenham. He's the SAF of Tottenham. But his first season was completely different compared to the following years. He lead the team to a glorious League double in 1961, which made Tottenham the first team to do a double. Then he won the FA Cup again in 1962 and led the team to semi finals of the European Cup and won the Cup Winner's Cup in 1963. In 1964, the legendary team began to decline and he started to build a second team and won the FA Cup again in 1967 and League Cup in 1971 and 1973. He resigned in 1974 after a poor season. He's one of the three one club men from Tottenham including Ledley King and Ron Henry.</p>
<h2>&#9679;Post-Bill Nicholson Era(1974-2000)</h2>
<img src="Maradona.jpg" alt="Maradona" id="Maradona">
<p>After resigning, Bill Nicholson asked the board to appoint the club legend Danny Blanchflower as his replacement, but the board rejected his advice and appoint an Arsenal player Terry Neils instead. Obviously, it was a stupid decision. You've got to listen to Bill Nicholson, or suffer the consequences. Terry Neill's tenure was disasterous and he left in 1976 and his assistant Keith Burkinshaw took over. Just like Bill Nicholson's tenure, his tenure too had a bad start with relegation. But Spurs got promoted immediately and Keith Burkinshaw bought 2 Argentinian stars Osvaldo Ardiles and Ricardo Villa who became instantly popular in Spurs and were inducted into Tottenham Hotspur Hall of Fame. When Tottenham reached the final of the 1981 FA Cup, Musicians Chas and Dave who are Spurs supporters sang a song "Ossie's Dream" with Osvaldo Ardiles and the full squad. This song reached number 5 in UK Singles Chart. And eventually Tottenham won the Cup. Chas and Dave sang 3 more Tottenham exclusive songs namely "Tottenham, Tottenham" in 1982, "Hot Shot Tottenham" in 1987 and "When the Year ends in One" in 1991. In 1986, Maradona donned the Spurs shirt for a testimonial match for Ossie Ardiles.</p>
<h2>&#9679;2000s</h2>
<img src="Bale.jpg" alt="Bale" id="Bale">
<p>After the unimpressive 1990s, Tottenham was sold by Alan Sugar to Daniel Levy. After losing the 2000-01 FA Cup semi final to Arsenal, our then captain, Sol Campbell, one of the best defenders in England, had assured the fans that he'd stay here, only to leave to the fierce rivals, Arsenal, outrageously for a free transfer. This resulted in a mass outburst among the fans who named him "Judas" and made racist chants on him. Luckily we had the most talented defender, Ledley King with us. Eventhough he was injury prone, and almost never attended training, he was a rock solid defender. Through the 5 years, Tottenham finished only in the mid table. But in 2005, Martin Jol who was the assistant of then manager, Jacques Santini was appointed as the manager and he started the revival of our club. In 2007, we signed the present superstar Gareth Bale, a 17 year old left back for 7 million, eventhough he showed lots of potential, he couldn't breakthrough because of Assou Ekotto's form and after a mesmerising performance as a winger against Inter in the 2010 Champions League, Harry Redknapp changed him into a Left Winger, which led Bale to superstar status. Bale left to Real Madrid for a world record fee of 85 Million, which was beaten by Pogba when Manchester United signed him for 89 Million. We won the 2008 FA Cup, which is the last silverware we have won to date.</p>
<h2>&#9679;2010s and Pochettino Era</h2>
<img src="Pochettino.jpg" alt="Poch" id="Poch">
<p>Harry Redknapp brought Spurs back to the top 5, with Spurs regularly finishing 4th or 5th. When he was sacked in 2012, ex-Chelsea manager AVB was appointed. His tenure wasn't so good and he was sacked in 2013 and Tim Sherwood was appointed. He was one of the worst managers Tottenham ever had. He sold Bale and bought 7 other players infamously known as the "Bale Seven". The Bale Seven are Christian Eriksen, Erik Lamela, Nacer Chadli, Vlad Chiriches, Etienne Capoue, Roberto Soldado and Paulinho. 4 of them were flops and only 2 (Eriksen and Lamela) remain in Spurs now. Tottenham finished 6th that year. He was ultimately sacked and the fans wanted Frank de Boer of Ajax to be appointed as the manager. De Boer himself wanted to be the manager and it was almost certain that he'd come. But Levy was pissed of his loud mouth and appointed a less famous and less experienced Pochettino from Southampton instead. But it became one of the best decisions Levy had ever made. Pochettino was a disciple of Marcelo (Madman) Bielsa and he inherited his principle. He was strict, he doesn't like players with bad attitude, he wanted the players to work hard both on pitch and off pitch. When he saw how hard the 21 year old Harry Kane had been working, he decided to give him a chance in the pre-season friendlies. Kane took his chances beautifully and impressed Pochettino. And since the other strikers, Soldado and Adebayor were hopeless in front of goal, Kane became the first choice striker and became a goal machine. He completed his first Premier League season with 21 goals and was the second highest goal scorer. In 2015, Pochettino bought Dele Alli for 5 Million from a League One club, MK Dons, which was considered as a great bargain and a risky buy, and now, Alli has become one of the best young players in the world. Pochettino believes in developing young players from academy instead of buying superstars. Players like Kane, Alli, Dier, Winks, Rose have all been developed by Pochettino. In 2015-16 season, Spurs had a chance of winning the League, but finished only 3rd because of cracking under pressure. In 2016-17 season, Spurs had an amazing season, had the best attack, the best defence, the best striker and overall a very good team, but couldn't win in the important matches and couldn't win the League and finished 2nd. It was the last year in White Hart Lane and Spurs gave the perfect tribute the great old stadium by never losing a single match in the stadium for the whole season. New stadium is being built just near the old stadium, and will be opened in 2018-19 season. Spurs will play their home matches in the Wembley stadium for the 2017-18 season. Let's hope for the best and bright future.</p>
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