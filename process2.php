<?php

$servername = "192.168.0.20";
$username = "jurick";
$password = "jurick";
$dbname = "jurickEmployee";


$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['save'])){

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = $_POST["Query"];
      
      if ($conn->query($sql) === TRUE) {
        echo "Operation Successful";
        header("location: http://192.168.0.14:8080/JustineAmbrad/Architecture/jurickDatabase/retrieve.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }  

}

$id = 0;
$update =false;
$firstname='';
$lastname = '';
$address= '';
$gender = '';

if (isset($_GET['editId'])){
    $id = $_GET['editId'];
    $update =true;
    $result = $conn->query("SELECT * FROM employee_data WHERE id=$id")or die ($conn->error);
    if (count([$result]) == 1){
        $row = $result->fetch_array();
        $firstname = $row['firstName'];
		$lastname = $row['lastName'];
		$address = $row['address'];
		$gender = $row['gender'];
        
    }
}

if (isset($_POST['update'])){
  $id = $_POST['id'];
  $firstname= $_POST['firstName'];
	$lastname= $_POST['lastName'];
	$address= $_POST['address'];
	$gender= $_POST['gender'];
	
	

    $conn->query("UPDATE employee_data SET firstName='$firstname', lastName ='$lastname', address='$address', gender= '$gender'  WHERE id=$id") 
    or die($conn->error);

    $_SESSION['message'] = "<script> alert('Record updated successfully!')</script>";
    $_SESSION['msg_type']= "warning";

    header("location: http://192.168.0.14:8080/JustineAmbrad/Architecture/jurickDatabase/retrieve.php");
}

$conn->close();
?>
