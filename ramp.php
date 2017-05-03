<!DOCTYPE HTML CSCI3308Assignment
Design by RampCU

Names       : RampCU
Description: On the CU campus, there are too many obstacles that wheelchair users are likely to run into if they are not aware of them beforehand. These obstacles include stairs, curbs, doors without door openers, bicycle routes, and steep hills. With our product, a user will be shown the best handicap accessible route between a point on a map of the CU Boulder campus that they select and a chosen destination building. This route will be illustrated for the user on a visual map of the campus. The route shown on the map will display a path that intentionally avoids outdoor staircases and bikeways along the way to the destination. At the destination, the positions of handicap accessible doors, elevators, and bathrooms within the building will be marked on the map. Users will also be able to set preferences, such as ignoring steep hills as an obstacle or only considering entrances/exits with automatic doors or door openers. Our product will be created in the form of a mobile phone app or website, so that it can easily be used while on the go. We may also include the users position as well as bus stops and handicap parking as features marked on the map.
-->

<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="icon" href="favicon.png">
<style>
body{
    background-color: #000000;
    z-index: -2;
    margin: 0;
    padding: none;
}
p{  
  color: white;
    font-weight: bold;
    font-size: 20px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
p2{
  color: white;
    font-weight: bold;
    font-size: 14px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
tr{
  color: white;
    font-weight: bold;
    font-size: 20px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
td{
  color: white;
    font-weight: bold;
    font-size: 20px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
h1 {
    font-weight: bold;
    color: black;
    font-size: 90px;
    padding: 10px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
h2 {
    font-weight: bold;
    color: black;
    font-size: 40px;
    padding: 0px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    
}
div.page-header{
  
  background-color: #CFB87C;
}
div.bottomContent{
  background-color: #ffffff;
  z-index: -1;
}
.map{

  background-color: #A2A4A3;
  width: 570px;
  padding: 15px;
  margin: 20px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

}
.overview{

  background-color: #A2A4A3;
  width: 570px;
  padding: 15px;
  margin: 20px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

}
</style>

<title>
RampCU - CSCI3308
</title>

</head>
<center>
<div class="page-header">
<a href = "https://github.com/AbdulGhiasy/CSCI3308Project.git" target="_blank">
<h1><u>RampCU</u></h1>
</a>
<h2>Map to Success</h2>
</div>

<div id="bottomContent">
<div class="navColumn"> 
<div class="overview">
          Click on the images below to be directed to CU Boulder's website and CU Boulder's Disability Services website. 
</div>

<a href = "http://www.colorado.edu/" target="_blank">
<img src="cuboulder.png" style="width=304px;height:228px">
</a>
<a href = "http://www.colorado.edu/disabilityservices/" target="_blank">
<img src="handicap.png" style="width=304px;height:228px">
</a>
<body>

<div id="bottomContent">
<div class="navColumn"> 
<div class="overview">
People restricted to wheelchair accessible travel will be able to use our website to direct them along the best, safe route to their chosen destination on campus. Feel free to use this campus map provided by CU Boulder in order to guide your way around the campus.       
</div>
<p></p>
<p></p>

<div id="navBottom"></div>
    </div>
  <div class="contentColumn">
  </div>

<iframe src="http://www.colorado.edu/map/?layers=buildings&layers=footpaths#16/40.0090/-105.2686?embed=true"width="600" height="600" scrolling="no" frameborder="0" style="border:0;"></iframe>
</div>
</body>



<form action="/ramp.php" method="get" class="map">
<h3>Please choose your current building:</h3>
<input type="radio" name="location" value="c4c" required> C4C<br>
<input type="radio" name="location" value="engineering"> Engineering Center<br>
<input type="radio" name="location" value="rec"> CU Recreational Center <br>
<input type="radio" name="location" value="koelbel"> Koelbel<br>
<input type="radio" name="location" value="umc"> UMC<br>
<input type="radio" name="location" value="kittredge"> Kittredge Central<br>
<input type="radio" name="location" value="muenzinger"> Muenzinger<br>
<input type="radio" name="location" value="norlin"> Norlin Library<br>
<h3>Please choose your destination building:</h3>
<input type="radio" name="destination" value="c4c" required> C4C<br>
<input type="radio" name="destination" value="engineering"> Engineering Center<br>
<input type="radio" name="destination" value="rec"> CU Recreational Center <br>
<input type="radio" name="destination" value="koelbel"> Koelbel<br>
<input type="radio" name="destination" value="umc"> UMC<br>
<input type="radio" name="destination" value="kittredge"> Kittredge Central<br>
<input type="radio" name="destination" value="muenzinger"> Muenzinger<br>
<input type="radio" name="destination" value="norlin"> Norlin Library<br>
<p></p>
<input type="submit" class="btn btn-primary btn-s" name = "Submit">
</form>
<p></p>
<p></p>
<?php
$location = $_GET["location"];
$destination = $_GET["destination"];
$connection = @mysqli_connect ('127.0.0.1', 'root', 'root', 'MAP');
if(mysqli_connect_errno())
{
 echo "<h4>Sorry, there is an error in connecting with our database, please contact admins for assistance: phi.trang@colorado.edu, abdul.ghiasy@colorado.edu </h4>".mysqli_connect_error();
}
if($destination == $location){
  echo "<p2>*Choose a valid location and destination!</p2>";
} else {

echo "<p></p>";
echo "<p></p>";
$query = "SELECT * FROM $location WHERE destination='$destination'";
$resultset = mysqli_query($connection, $query);

echo "<table><tr><th>Destination       &shy; </th><th> Directions</th>";
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
  print "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>";
  $image = $row[2];
}
echo "</table>";
echo "<p></p>";
echo "<p>FOLLOW THE RED PATH</p>";
echo "<p2>The ramps are indicated by the handicap icon</p2>";
echo "<p></p>";
echo "<p></p>";
print "<img src='$image' style='width:750px; height:700px'>";
}

?>
<p></p>
<p></p>
</center>
</html>