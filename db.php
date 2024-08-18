<?php
include("payroll.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$pname = $_POST['pname'];
$id = $_POST['pid'];
$pposition = $_POST['pposition'];
$salary = $_POST['salary'];
$bonus = $_POST['bonus'];
$deduction = $_POST['deduction'];

$connection = mysqli_connect("localhost","root","","employees");
if(mysqli_connect_errno()){
    echo "Could not connect ", mysqli_connect_error();
}
    $payroll = (($salary+$bonus)-$deduction);
    mysqli_query($connection,"UPDATE employeedetails
    SET payroll = $payroll
    WHERE username LIKE '%$pname%'");

echo "<script>alert('Success');</script>";
}
?>