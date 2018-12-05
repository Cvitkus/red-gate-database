<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$Lesson_ID = $_GET['Lesson_ID'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM Lessons WHERE Lesson_ID=$Lesson_ID");

//redirecting to the display page (index.php in our case)
header("Location:http://cs.umw.edu/~kortiz/tables/index.php#menu3");
?>
