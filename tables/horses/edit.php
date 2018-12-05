<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$Horse_ID = mysqli_real_escape_string($mysqli, $_POST['Horse_ID']);

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
	} else {
		//updating the table
		$query = "UPDATE Horses SET Horse_ID='$Horse_ID',Color='$Color',Name='$Name',Size='$Size',Breed='$Breed' WHERE Horse_ID=$Horse_ID";
		$result = mysqli_query($mysqli, $query);

		//redirectig to the display pName. In our case, it is index.php
		header("Location: http://cs.umw.edu/~kortiz/tables/index.php");
	}
}
?>
<?php
//getting Horse_ID from urlhttp://cs.umw.edu/~kortiz/tables/index.php
$Horse_ID = $_GET['Horse_ID'];

//selecting data associated with this particular Horse_ID
$result = mysqli_query($mysqli, "SELECT * FROM Horses WHERE Horse_ID=$Horse_ID");

while($res = mysqli_fetch_array($result))
{
	$Color = $res['Color'];
	$Name = $res['Name'];
	$Size = $res['Size'];
	$Breed = $res['Breed'];
}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="http://cs.umw.edu/~kortiz/tables/index.php">Home</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Color</td>
				<td><input type="text" name="Color" value="<?php echo $Color;?>"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="Name" value="<?php echo $Name;?>"></td>
			</tr>
			<tr>
				<td>Size</td>
				<td><input type="text" name="Size" value="<?php echo $Size;?>"></td>
			</tr>
			<tr>
				<td>Breed</td>
				<td><input type="text" name="Breed" value="<?php echo $Breed;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="Horse_ID" value=<?php echo $_GET['Horse_ID'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
