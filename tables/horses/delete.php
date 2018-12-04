<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$Horse_ID = $_GET['Horse_ID'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM Horses WHERE Horse_ID=$Horse_ID");

//redirecting to the display page (index.php in our case)
header("Location:http://cs.umw.edu/~kortiz/tables/index.php");
?>
