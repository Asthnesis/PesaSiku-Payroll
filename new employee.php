<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add employee</title>
    <link rel="stylesheet" href="/icons/fontawesome-free-6.4.0-web/css/all.min.css">

</head>
<style>
.header {
  color: #89bdf6;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 40px 0 15px;
  background-color: #2d6cde;
  height: 100px;
}
.header a{
    display: flex;
    text-decoration: none;
    flex-direction: column;
    align-items: center;
    color: white;
}
#logo{
    font-size: 40px;
    font-weight: bold;
    color: white;
}
.container{
    background-image: url("/main.jpg");
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 595px;
    margin-bottom: 20px;
}
.container input{
    width: 400px;
    height: 25px;
}

</style>

<body>
<body>
<div class="header">
    <p id="logo">PesaSiku</p>
    <a href="dashboard.php"> <i class="fa-solid fa-gauge"></i>Dashboard</a>
    <a href="payroll.php"><i class="fa-solid fa-scroll"></i>Calculate Payroll</a>
    <a href="new employee.php"><i class="fa-solid fa-user-plus"></i>New Employee</a>
    <a href="employees.php"><i class="fa-solid fa-users"></i> Employees</a>
    <a href="help.php"><i class="fa-regular fa-circle-question"></i>Help</a>

</div>
<form action="database.php" method="post">
<div class="container">
    <h3>Add a new employee to the payroll</h3>
            <div>
            <label for="username">Full Name</label><br>
            <input type="text" name="username" required><br>
            <label for="address">City</label><br>
            <input type="address" name="address" placeholder="Nairobi,Kenya" required><br>
            <label for="dob">Date of birth</label><br>
            <input type="date" name="dob" required><br>
            <label>Portrait</label><br>
            <input type="file" name="" id=""><br>
            <label for="position">Position</label><br>
            <input type="text" name="pos" required><br>
            <label for="phone">Phone</label><br>
            <input type="phone" value="+254" name="phone" required><br>
            <label for="email">Email</label><br>
            <input type="email" placeholder="example@example.com" name="email" required><br>
            <label for="kra">KRA Pin</label><br>
            <input type="text" name="kra" required><br>
            <button >Submit</button>
            </div>
</div>
</form>

<?php
$connection = mysqli_connect("localhost","root","","employees");
if(mysqli_connect_errno()){
    echo "Could not connect ", mysqli_connect_error();
}
?>

</body>
</html>