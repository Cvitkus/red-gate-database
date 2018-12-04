
	<div class="container">
	  <h2>Red Gate Farm Database</h2>
	  <p>Here we have every database that is associated with Red Gate Farms. By Clicking the tabs below, you can see what data corresponds with which tables.</p>
	  <ul class="nav nav-pills">
	    <li class="active"><a data-toggle="pill" href="#home">Horses</a></li>
	    <li><a data-toggle="pill" href="#menu1">Riders</a></li>
	    <li><a data-toggle="pill" href="#menu2">Admins</a></li>
	    <li><a data-toggle="pill" href="#menu3">Lessons</a></li>
	  </ul>

	  <div class="tab-content">
	    <div id="home" class="tab-pane fade in active">
				<?php
				//including the database connection file
				include_once("config.php");

				//fetching data in descending order (lastest entry first)
				//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
				$result = mysqli_query($mysqli, "SELECT * FROM Horses ORDER BY Horse_ID DESC"); // using mysqli_query instead
				?>

				<html>
				<head>
					<title>Database - Red Gate Farms</title>
					<meta charset="utf-8">
  				<meta name="viewport" content="width=device-width, initial-scale=1">
  				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				</head>

				<body>
				<a href="horses/add.html">Add New Data</a><br/><br/>

					<table width='80%' border=0>

					<tr bgcolor='#CCCCCC'>
						<td>Horse_ID</td>
						<td>Color</td>
						<td>Name</td>
						<td>Size</td>
						<td>Breed</td>
						<td>Update</td>
					</tr>
					<?php
					//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
					while($res = mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<td>".$res['Horse_ID']."</td>";
						echo "<td>".$res['Color']."</td>";
						echo "<td>".$res['Name']."</td>";
						echo "<td>".$res['Size']."</td>";
						echo "<td>".$res['Breed']."</td>";
						echo "<td><a href=\"horses/edit.php?Horse_ID=$res[Horse_ID]\">Edit</a> | <a href=\"horses/delete.php?Horse_ID=$res[Horse_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
					}
					?>
					</table>
	    </div>
	    <div id="menu1" class="tab-pane fade">
				<?php
				//including the database connection file
				include_once("config.php");

				//fetching data in descending order (lastest entry first)
				//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
				$result = mysqli_query($mysqli, "SELECT * FROM Riders ORDER BY User_ID DESC"); // using mysqli_query instead
				?>

				<html>
				<head>
					<title>Database - Red Gate Farms</title>
					<meta charset="utf-8">
  				<meta name="viewport" content="width=device-width, initial-scale=1">
  				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				</head>

				<body>
				<a href="riders/add.html">Add New Data</a><br/><br/>

					<table width='80%' border=0>

					<tr bgcolor='#CCCCCC'>
						<td>User_ID</td>
						<td>Password</td>
						<td>First_Name</td>
						<td>Last_Name</td>
						<td>Email</td>
						<td>Age</td>
						<td>Skill_Level</td>
						<td>Update</td>
					</tr>
					<?php
					//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
					while($res = mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<td>".$res['User_ID']."</td>";
						echo "<td>".$res['Password']."</td>";
						echo "<td>".$res['First_Name']."</td>";
						echo "<td>".$res['Last_Name']."</td>";
						echo "<td>".$res['Email']."</td>";
						echo "<td>".$res['Age']."</td>";
						echo "<td>".$res['Skill_Level']."</td>";
						echo "<td><a href=\"riders/edit.php?User_ID=$res[User_ID]\">Edit</a> | <a href=\"riders/delete.php?User_ID=$res[User_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
					}
					?>
					</table>
	    </div>
	    <div id="menu2" class="tab-pane fade">
				<?php
				//including the database connection file
				include_once("config.php");

				//fetching data in descending order (lastest entry first)
				//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
				$result = mysqli_query($mysqli, "SELECT * FROM Admin ORDER BY User_ID DESC"); // using mysqli_query instead
				?>

				<html>
				<head>
					<title>Database - Red Gate Farms</title>
					<meta charset="utf-8">
  				<meta name="viewport" content="width=device-width, initial-scale=1">
  				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				</head>

				<body>
				<a href="admins/add.html">Add New Data</a><br/><br/>

					<table width='80%' border=0>

					<tr bgcolor='#CCCCCC'>
						<td>User_ID</td>
						<td>Password</td>
						<td>Update</td>
					</tr>
					<?php
					//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
					while($res = mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<td>".$res['User_ID']."</td>";
						echo "<td>".$res['Password']."</td>";
						echo "<td><a href=\"admins/edit.php?User_ID=$res[User_ID]\">Edit</a> | <a href=\"admins/delete.php?User_ID=$res[User_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
					}
					?>
					</table>
	    </div>
	    <div id="menu3" class="tab-pane fade">
				<?php
				//including the database connection file
				include_once("config.php");

				//fetching data in descending order (lastest entry first)
				//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
				$result = mysqli_query($mysqli, "SELECT * FROM Lessons ORDER BY Lesson_ID DESC"); // using mysqli_query instead
				?>

				<html>
				<head>
					<title>Database - Red Gate Farms</title>
					<meta charset="utf-8">
  				<meta name="viewport" content="width=device-width, initial-scale=1">
  				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				</head>

				<body>
				<a href="lessons/add.html">Add New Data</a><br/><br/>

					<table width='80%' border=0>

					<tr bgcolor='#CCCCCC'>
						<td>Lesson_ID</td>
						<td>User_ID</td>
						<td>Start_Time</td>
						<td>End_Time</td>
						<td>Lesson_Date</td>
						<td>Price</td>
						<td>Update</td>
					</tr>
					<?php
					//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
					while($res = mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<td>".$res['Lesson_ID']."</td>";
						echo "<td>".$res['User_ID']."</td>";
						echo "<td>".$res['Start_Time']."</td>";
						echo "<td>".$res['End_Time']."</td>";
						echo "<td>".$res['Lesson_Date']."</td>";
						echo "<td>".$res['Price']."</td>";
						echo "<td><a href=\"lessons/edit.php?Lesson_ID=$res[Lesson_ID]\">Edit</a> | <a href=\"lessons/delete.php?Lesson_ID=$res[Lesson_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
					}
					?>
					</table>
	    </div>
	  </div>
	</div>


</body>
</html>
