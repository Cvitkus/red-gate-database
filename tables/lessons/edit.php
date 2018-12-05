<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

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
	} else {
		//updating the table
		$query = "UPDATE Lessons SET Lesson_ID='$Lesson_ID',User_ID='$User_ID',Start_Time='$Start_Time',End_Time='$End_Time',Lesson_Date='$Lesson_Date',Price='$Price' WHERE User_ID=$User_ID";
		$result = mysqli_query($mysqli, $query);

		//redirectig to the display pName. In our case, it is index.php
		header("Location: http://cs.umw.edu/~kortiz/tables/index.php#menu3");
	}
}
?>
<?php
//getting Horse_ID from urlhttp://cs.umw.edu/~kortiz/tables/index.php
$Lesson_ID = $_GET['Lesson_ID'];

//selecting data associated with this particular Horse_ID
$result = mysqli_query($mysqli, "SELECT * FROM Lessons WHERE Lesson_ID=$Lesson_ID");

while($res = mysqli_fetch_array($result))
{
	$Lesson_ID = $res['Lesson_ID'];
	$User_ID = $res['User_ID'];
	$Start_Time = $res['Start_Time'];
	$End_Time = $res['End_Time'];
	$Lesson_Date = $res['Lesson_Date'];
	$Price = $res['Price'];
}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="http://cs.umw.edu/~kortiz/tables/index.php#menu3">Home</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Lesson_ID</td>
				<td><input type="text" name="Lesson_ID" value="<?php echo $Lesson_ID;?>"></td>
			</tr>
			<tr>
				<td>User_ID</td>
				<td><input type="text" name="User_ID" value="<?php echo $User_ID;?>"></td>
			</tr>
			<tr>
				<td>Start_Time</td>
				<td><input type="text" name="Start_Time" value="<?php echo $Start_Time;?>"></td>
			</tr>
			<tr>
				<td>End_Time</td>
				<td><input type="text" name="End_Time" value="<?php echo $End_Time;?>"></td>
			</tr>
			<tr>
				<td>Lesson_Date</td>
				<td><input type="text" name="Lesson_Date" value="<?php echo $Lesson_Date;?>"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="Price" value="<?php echo $Price;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="Lesson_ID" value=<?php echo $_GET['Lesson_ID'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
