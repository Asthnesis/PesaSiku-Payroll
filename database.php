<?php
include("new employee.php");

// $currentYear = date('Y');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$username = $_POST['username'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$pos = $_POST['pos'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$kra = $_POST['kra'];



$year = substr($dob,0,4);
$age = date('Y') - $year;

mysqli_query($connection,"INSERT IGNORE INTO employeedetails (username,address,age,pos,phone,email,kra) VALUES ('$username','$address','$age','$pos','$phone','$email','$kra')");
echo "<script>alert('Details added successfully!')</script>";
}

?>
