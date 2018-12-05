<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$Lesson_ID = mysqli_real_escape_string($mysqli, $_POST['Lesson_ID']);
	$User_ID = mysqli_real_escape_string($mysqli, $_POST['User_ID']);
	$Start_Time = mysqli_real_escape_string($mysqli, $_POST['Start_Time']);
	$End_Time = mysqli_real_escape_string($mysqli, $_POST['End_Time']);
	$Lesson_Date = mysqli_real_escape_string($mysqli, $_POST['Lesson_Date']);
	$Price = mysqli_real_escape_string($mysqli, $_POST['Price']);

	// checking empty fields
	if(empty($Lesson_ID) || empty($User_ID) || empty($Start_Time) || empty($End_Time) || empty($Lesson_Date) || empty($Price)) {

		if(empty($Lesson_ID)) {
			echo "<font color='red'>Lesson_ID field is empty.</font><br/>";
		}

		if(empty($User_ID)) {
			echo "<font color='red'>User_ID field is empty.</font><br/>";
		}

		if(empty($Start_Time)) {
			echo "<font color='red'>Start_Time field is empty.</font><br/>";
		}

		if(empty($End_Time)) {
			echo "<font color='red'>End_Time field is empty.</font><br/>";
		}

		if(empty($Lesson_Date)) {
			echo "<font color='red'>Lesson_Date field is empty.</font><br/>";
		}

		if(empty($Price)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		// if all the fields are filled (not empty)

		//insert data to database
		$result = mysqli_query($mysqli, "INSERT INTO Lessons(Lesson_ID,User_ID,Start_Time,End_Time,Lesson_Date,Price) VALUES('$Lesson_ID','$User_ID','$Start_Time','$End_Time','$Lesson_Date','$Price')");

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='http://cs.umw.edu/~kortiz/tables/index.php#menu3'>View Result</a>";
	}
}
?>
</body>
</html>
