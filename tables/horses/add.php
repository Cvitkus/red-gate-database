<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$Color = mysqli_real_escape_string($mysqli, $_POST['Color']);
	$Name = mysqli_real_escape_string($mysqli, $_POST['Name']);
	$Size = mysqli_real_escape_string($mysqli, $_POST['Size']);
	$Breed = mysqli_real_escape_string($mysqli, $_POST['Breed']);

	// checking empty fields
	if(empty($Color) || empty($Name) || empty($Size) || empty($Breed)) {

		if(empty($Color)) {
			echo "<font color='red'>Color field is empty.</font><br/>";
		}

		if(empty($Name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($Size)) {
			echo "<font color='red'>Size field is empty.</font><br/>";
		}

		if(empty($Breed)) {
			echo "<font color='red'>Breed field is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		// if all the fields are filled (not empty)

		//insert data to database
		$result = mysqli_query($mysqli, "INSERT INTO Horses(Color,Name,Size,Breed) VALUES('$Color','$Name','$Size','$Breed')");

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='http://cs.umw.edu/~kortiz/tables/index.php'>View Result</a>";
	}
}
?>
</body>
</html>
