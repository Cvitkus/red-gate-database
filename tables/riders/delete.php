<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$User_ID = $_GET['User_ID'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM Riders WHERE User_ID=$User_ID");

//redirecting to the display page (index.php in our case)
header("Location:http://cs.umw.edu/~kortiz/tables/index.php#menu1");
?>
