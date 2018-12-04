<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$User_ID = mysqli_real_escape_string($mysqli, $_POST['User_ID']);

	$Password = mysqli_real_escape_string($mysqli, $_POST['Password']);

	// checking empty fields
	if(empty($Password)) {

		if(empty($Password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
	} else {
		//updating the table
		$query = "UPDATE Admin SET User_ID='$User_ID',Password='$Password' WHERE User_ID=$User_ID";
		$result = mysqli_query($mysqli, $query);

		//redirectig to the display pName. In our case, it is index.php
		header("Location: http://cs.umw.edu/~kortiz/tables/index.php#menu2");
	}
}
?>
<?php
//getting Horse_ID from urlhttp://cs.umw.edu/~kortiz/tables/index.php
$User_ID = $_GET['User_ID'];

//selecting data associated with this particular Horse_ID
$result = mysqli_query($mysqli, "SELECT * FROM Admin WHERE User_ID=$User_ID");

while($res = mysqli_fetch_array($result))
{
	$Password = $res['Password'];
}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="http://cs.umw.edu/~kortiz/tables/index.php#menu2">Home</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Password</td>
				<td><input type="text" name="Password" value="<?php echo $Password;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="User_ID" value=<?php echo $_GET['User_ID'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
