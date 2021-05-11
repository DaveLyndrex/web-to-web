<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete|PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<?php 
$servername = "192.168.0.20";
$username = "jurick";
$password = "jurick";
$dbname = "jurickEmployee";


$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_GET['deleteId'])) {
	$id = $_GET['deleteId'];
	// write delete query
	$result=$conn->query ("DELETE FROM employee_data WHERE id=$id") or die ($conn->query);

	// Execute the query

	if ($result == TRUE) {
		echo "<script> alert('Record deleted successfully.')</script>";
		header ("location:http://192.168.0.14:8080/JustineAmbrad/Architecture/jurickDatabase/retrieve.php");
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	
}

?>

