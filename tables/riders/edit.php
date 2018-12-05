<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$User_ID = mysqli_real_escape_string($mysqli, $_POST['User_ID']);

	$Password = mysqli_real_escape_string($mysqli, $_POST['Password']);
	$First_Name = mysqli_real_escape_string($mysqli, $_POST['First_Name']);
	$Last_Name = mysqli_real_escape_string($mysqli, $_POST['Last_Name']);
	$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
	$Age = mysqli_real_escape_string($mysqli, $_POST['Age']);
	$Skill_Level = mysqli_real_escape_string($mysqli, $_POST['Skill_Level']);

	// checking empty fields
	if(empty($Password) || empty($First_Name) || empty($Last_Name) || empty($Email) || empty($Age) || empty($Skill_Level)) {

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
	} else {
		//updating the table
		$query = "UPDATE Riders SET User_ID='$User_ID',Password='$Password',First_Name='$First_Name',Last_Name='$Last_Name',Email='$Email',Age='$Age',Skill_Level='$Skill_Level' WHERE User_ID=$User_ID";
		$result = mysqli_query($mysqli, $query);

		//redirectig to the display pName. In our case, it is index.php
		header("Location: http://cs.umw.edu/~kortiz/tables/index.php#menu1");
	}
}
?>
<?php
//getting Horse_ID from urlhttp://cs.umw.edu/~kortiz/tables/index.php
$User_ID = $_GET['User_ID'];

//selecting data associated with this particular Horse_ID
$result = mysqli_query($mysqli, "SELECT * FROM Riders WHERE User_ID=$User_ID");

while($res = mysqli_fetch_array($result))
{
	$Password = $res['Password'];
	$First_Name = $res['First_Name'];
	$Last_Name = $res['Last_Name'];
	$Email = $res['Email'];
	$Age = $res['Age'];
	$Skill_Level = $res['Skill_Level'];
}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="http://cs.umw.edu/~kortiz/tables/index.php#menu1">Home</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Password</td>
				<td><input type="text" name="Password" value="<?php echo $Password;?>"></td>
			</tr>
			<tr>
				<td>First_Name</td>
				<td><input type="text" name="First_Name" value="<?php echo $First_Name;?>"></td>
			</tr>
			<tr>
				<td>Last_Name</td>
				<td><input type="text" name="Last_Name" value="<?php echo $Last_Name;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email" value="<?php echo $Email;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="Age" value="<?php echo $Age;?>"></td>
			</tr>
			<tr>
				<td>Skill_Level</td>
				<td><input type="text" name="Skill_Level" value="<?php echo $Skill_Level;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="User_ID" value=<?php echo $_GET['User_ID'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
