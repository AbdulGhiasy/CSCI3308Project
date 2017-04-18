<!DOCTYPE HTML CSCI3308Assignment
Design by RampCU

Names       : RampCU
Description: On the CU campus, there are too many obstacles that wheelchair users are likely to run into if they are not aware of them beforehand. These obstacles include stairs, curbs, doors without door openers, bicycle routes, and steep hills. With our product, a user will be shown the best handicap accessible route between a point on a map of the CU Boulder campus that they select and a chosen destination building. This route will be illustrated for the user on a visual map of the campus. The route shown on the map will display a path that intentionally avoids outdoor staircases and bikeways along the way to the destination. At the destination, the positions of handicap accessible doors, elevators, and bathrooms within the building will be marked on the map. Users will also be able to set preferences, such as ignoring steep hills as an obstacle or only considering entrances/exits with automatic doors or door openers. Our product will be created in the form of a mobile phone app or website, so that it can easily be used while on the go. We may also include the users position as well as bus stops and handicap parking as features marked on the map.
-->


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="fadedtab.css" />
Click <a href="http://www.colorado.edu/disabilityservices/">here</a> to go to CU Disability Services.
<title>RampCU </title>
</head>

<body>
		
        <div id="header">
        	<div class="logo"></div>
            <h1>RampCU</h1>
			<h2> Map to Success.</h2>
        </div>
<div id="bottomContent">
	<div class="navColumn"> 
    	<div class="overview">
        	People restricted to wheelchair accessible travel will be able to use our website to direct them along the best, safe route to their chosen destination on campus.        </div>
     
<div id="navBottom"></div>
    </div>
	<div class="contentColumn">
	</div>

<iframe src="http://www.colorado.edu/map/?layers=buildings&layers=footpaths#16/40.0090/-105.2686?embed=true"width="600" height="600" scrolling="no" frameborder="0" style="border:0;"></iframe>

</div>
</body>
<h3>Please enter your current building:</h3>
<p>c4c</p>
<p>engineering</p>
<p>rec_center</p>
<p>koelbel</p>
<p>umc</p>

<form method="post" action="">
<input type="text" name="table">
<input type="submit">
</form>

<?php
$table = $_POST['table'];
$connection = @mysqli_connect ('127.0.0.1', 'root', 'phi646248', 'MAP');
if(mysqli_connect_errno())
{
 echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
}
else
{
 echo "<h4>Successfully connected to MySQL: </h4>";
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

