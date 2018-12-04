<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$Password = mysqli_real_escape_string($mysqli, $_POST['Password']);
	$First_Name = mysqli_real_escape_string($mysqli, $_POST['First_Name']);
	$Last_Name = mysqli_real_escape_string($mysqli, $_POST['Last_Name']);
	$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
	$Age = mysqli_real_escape_string($mysqli, $_POST['Age']);
	$Skill_Level = mysqli_real_escape_string($mysqli, $_POST['Skill_Level']);

	// checking empty fields
	if(empty($Password) || empty($First_Name) || empty($Last_Name) || empty($Email)|| empty($Age) || empty($Skill_Level)) {

		if(empty($Password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}

		if(empty($First_Name)) {
			echo "<font color='red'>First_Name field is empty.</font><br/>";
		}

		if(empty($Last_Name)) {
			echo "<font color='red'>Last_Name field is empty.</font><br/>";
		}

		if(empty($Email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($Age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($Skill_Level)) {
			echo "<font color='red'>Skill_Level field is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		// if all the fields are filled (not empty)

		//insert data to database
		$result = mysqli_query($mysqli, "INSERT INTO Riders(Password,First_Name,Last_Name,Email,Age,Skill_Level) VALUES('$Password','$First_Name','$Last_Name','$Email','$Age','$Skill_Level')");

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='http://cs.umw.edu/~kortiz/tables/index.php#menu1'>View Result</a>";
	}
}
?>
</body>
</html>
