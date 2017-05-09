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
    background-color: #7AA0DF;
}
p.impact{
    font-family: "Impact, Charcoal, sans-serif";
}
h1 {
    font-weight: bold;
    color: black;
    font-size: 100px;
}
h1 {
    font-weight: bold;
    color: black;
    font-size: 64px;
}
</style>
</head>


<center>
<div class="page-header">
  <h1>RampCU</h1>
  <h2>Map to Success</h2>
</div>

<img src="cuboulder.png" style="width=304px;height:228px">
<img src="handicap.png" style="width=304px;height:228px">
<body>

<div id="bottomContent">
	<div class="navColumn"> 
    	<div class="overview">
        	Finding handicap accessible routes around campus can pose a great challange to members of our community restricted to such travel. This site provides directions for accessible travel along the shortest and safest route between several major buildings on campus and marks handicap accessible exits and entrances. Feel free to use this campus map provided by CU Boulder in order to guide your way around the campus.       </div>
<p></p>
<p></p>
Click <a href="http://www.colorado.edu/disabilityservices/">here</a> to go to CU Disability Services.
<div id="navBottom"></div>
    </div>
	<div class="contentColumn">
	</div>
<center>
<iframe src="http://www.colorado.edu/map/?layers=buildings&layers=footpaths#16/40.0090/-105.2686?embed=true"width="600" height="600" scrolling="no" frameborder="0" style="border:0;"></iframe>
</center>
</div>
</body>

<h3>Please enter your current building:</h3>
<p>c4c</p>
<p>engineering</p>
<p>rec_center</p>
<p>koelbel</p>
<p>umc</p>

<form method="post" action="">
<label for="email">User Input</label>
<input type="text" name="table">
<input type="submit" class="btn btn-success btn-xs">
</form>
</center>

<?php
$table = $_POST['table'];
$connection = @mysqli_connect ('127.0.0.1', 'root', 'root', 'MAP');
if(mysqli_connect_errno())
{
 echo "<h4>Failed to connect to the database!: </h4>".mysqli_connect_error();
}
else
{
 echo "<h4>Connected Successfully!</h4>";
}
$query = "SELECT * FROM $table";
$resultset = mysqli_query($connection, $query);
echo "<table><tr><th>Destination</th><th>Directions</th>";
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
	echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td></td></tr>";
}
echo "</table>";
?>
</html>