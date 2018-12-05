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

	// checking empty fields
	if(empty($Password)) {

		if(empty($Password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		// if all the fields are filled (not empty)

		//insert data to database
		$result = mysqli_query($mysqli, "INSERT INTO Admin(Password) VALUES('$Password')");

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='http://cs.umw.edu/~kortiz/tables/index.php#menu2'>View Result</a>";
	}
}
?>
</body>
</html>
