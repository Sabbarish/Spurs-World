<html>
<head>
<title>Welcome to the Spurs World</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $(".Register").click(function(){
        $("#Regopen").slideToggle("slow");
    });
});
$(document).ready(function(){
    $(".Login").click(function(){
        $("#Logopen").slideToggle("slow");
    });
});
</script>
<style>
body
{
background-image: url("Background-3.jpeg");
background-size: 1500px 770px;
background-repeat: no-repeat;
background-position: top center;
background-color: #02060F;
}
#Regopen
{
float: left;
width: 330px;
height: 680px;
border-radius: 20px;
border: 2px solid #ECFEFE;
background-color: #A91E2F;
opacity: 0.8;
display: none;
font-size: 20px;
color: white;
}
#wrap
{
width: 803px;
margin: auto;

}
#Heading
{
border-radius: 20px;
border: 2px solid #ECFEFE;
background-color: white;
width: 800px;
height: 240px;
opacity: 0.8;
}
#First_Heading
{
text-align: center;
color: #0F204B;
font-family: "Castellar";
font-size:40px;
}
#Second_Heading
{
text-align: center;
color: #0F204B;
font-family: "Calisto MT";
font-size:30px;
}
#Info
{
margin-top: 30px;
border-radius: 20px;
border: 2px solid #ECFEFE;
background-color: white;
width: 800px;
height: 400px;
opacity:0.7;
}
#Infotext
{
text-align: center;
font-size: 30px;
}
#Warning
{
text-align: center;
font-size: 30px;
color: red;
}
#Logopen
{
float: right;
position: relative;
bottom: 680px;
width: 330px;
height: 680px;
border-radius: 20px;
border: 2px solid #ECFEFE;
background-color: #0F204B;
opacity: 0.8;
<?php
if(isset($_REQUEST['q'])=='err')
{
?>
display: block;
<?php
}
else
{
?>
display:none;
<?php
}
?>
color: white;
}
td
{
font-size: 20px;
color: white;
}
</style>
</head>
<body>
<div id="Regopen">
<p style="font-size: 40px; text-align: center; font-family: 'Showcard Gothic';"><strong>Register</strong></p>
<form method="post" action="Register.php">
<table>
<tr>
<td>Name:</td><td><input type="text" name="name"></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td>Email Id:</td><td><input type="text" name="email"></td>
</tr>
<tr>
<td>Age:</td><td><input type="text" name="age"></td>
</tr>
<tr>
<td>Country:</td>
<td><select name="country">
	<option value="AFG">Afghanistan</option>
	<option value="ALA">Åland Islands</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AND">Andorra</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla</option>
	<option value="ATA">Antarctica</option>
	<option value="ATG">Antigua and Barbuda</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS">Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia</option>
	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BVT">Bouvet Island</option>
	<option value="BRA">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BDI">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island</option>
	<option value="CCK">Cocos (Keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Zaire</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Côte d'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CUW">Curaçao</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands)</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GGY">Guernsey</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="VAT">Vatican City State</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland</option>
	<option value="IMN">Isle of Man</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JEY">Jersey</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">North Korea</option>
	<option value="KOR">South Korea</option>
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>
	<option value="LAO">Laos</option>
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libya</option>
	<option value="LIE">Liechtenstein</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macao</option>
	<option value="MKD">Macedonia</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia</option>
	<option value="MDA">Moldova</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestinian Territory</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PCN">Pitcairn</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Réunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="BLM">Saint Barthélemy</option>
	<option value="SHN">Saint Helena</option>
	<option value="KNA">Saint Kitts and Nevis</option>
	<option value="LCA">Saint Lucia</option>
	<option value="MAF">Saint Martin (French part)</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="VCT">Saint Vincent and the Grenadines</option>
	<option value="WSM">Samoa</option>
	<option value="SMR">San Marino</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SXM">Sint Maarten (Dutch part)</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SJM">Svalbard and Jan Mayen</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan, Province of China</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania, United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-Leste</option>
	<option value="TGO">Togo</option>
	<option value="TKL">Tokelau</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela</option>
	<option value="VNM">Viet Nam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="ESH">Western Sahara</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>
</select></td>
</tr>
<tr>
<td><input type="submit" name="Register" value="Register"></td>
</tr>
</table>
</form> 
</div>
<div id="wrap">
<div id="Heading">
<p id="First_Heading"><strong>Welcome to the SPURS WORLD!!</strong></p>
<p id="Second_Heading"><strong>The Biggest Fan Community of the Biggest Club</strong></p>
</div>
<div id="Info">
<p id="Infotext">We want proud and loyal people who can back the team even in hardships and not bandwagons and gloryhunters who sell themselves to bigger teams whenever there's a down, to support our club, <strong>Tottenham Hotspur<strong>. 
<p id="Warning">Absolutely no <strong>Gooners</strong> allowed here.</p>
<img src="Leftarrow.png" alt="Left" class="Register" style="height: 70px; width: 50px; background-color: #A91E2F; position: relative; left: 4px; margin-left:25px">
<img src="Register.png" alt="Register" class="Register" style="">
<img src="Rightarrow.png" alt="Right" class="Login" style="height: 70px; width: 50px; background-color: #0F204B; float: right; margin-right:25px">
<div class="Login" style="background-color: #0F204B; height: 70px; width: 250px; float: right; text-align: center; color: white; font-size: 55px; font-family: 'Arial';">
Login
</div>
</div>
</div>
<div id="Logopen">
<p style="font-size: 40px; text-align: center; font-family: 'Showcard Gothic';"><strong>Login</strong></p>
<form method="post" action="Logincheck.php">
<table>
<tr>
<td>Name:</td><td><input type="text" name="Name"></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="Password"></td>
</tr>
<tr>
<td><input type="submit" name="Login" value="Login"></td>
</tr>
</table>
<?php
if(isset($_REQUEST['q'])=='err')
{
?>
<p>The Name or Password you have entered is incorrect. Please enter the correct credentials.</p>
<?php
}
?>
</form> 
</div>
</body>
</html>