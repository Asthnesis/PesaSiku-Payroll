<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
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

    tbody td{
        border: #a1eafb;
        background-color: grey;
        width: 1024px;
        height: 15px;
        font-size: large;
        font-weight: bold;
    }
.container{
    background-image: url("/main.jpg");
        /* background-size: cover; */
        display: flex;
        align-items: flex-start;
        justify-content: center;
        height: 575px;
        text-align: center;
        margin: 5px;
        width: fit-content;
        }
        @media only screen and (max-width:768px) {
            tbody td{
        width: 768px;
        }
}
</style>
<body>
<div class="header">
    <p id="logo">PesaSiku</p>
    <a href="dashboard.php"> <i class="fa-solid fa-gauge"></i>Dashboard</a>
    <a href="payroll.php"><i class="fa-solid fa-scroll"></i>Calculate Payroll</a>
    <a href="new employee.php"><i class="fa-solid fa-user-plus"></i>New Employee</a>
    <a href="employees.php"><i class="fa-solid fa-users"></i> Employees</a>
    <a href="help.php"><i class="fa-regular fa-circle-question"></i>Help</a>

</div>
<div class="container">
    <div class="main">
    <?php
$connection = mysqli_connect("localhost","root","","employees");
if(mysqli_connect_errno()){
    echo "Could not connect ", mysqli_connect_error();
}
?>
        <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Position</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Payroll</th>
        </thead>
        <?php 
        $data = mysqli_query($connection,"SELECT * FROM employeedetails ");
        while($row = mysqli_fetch_array($data)){
        ?>
        <tbody>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['pos']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row ['email']; ?></td>
            <td><?php echo $row ['payroll']; ?></td>
            </tr>
        </tbody>
        <?php } ?>
        </table>
    </div>
</div>
</body>
</html>