<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
.container{
    background-image: url("/main.jpg");
    background-size: cover;
    display: flex;
    flex-direction: column;
    text-align: center;
}
.main{
    display: flex;
    justify-content: space-around;
    flex-direction: row;
    align-items: center;
    margin: auto;
    height: 500px;
    width: max-content;
}
@media only screen and (max-width:768px) {
    .main{
        display: flex;
        flex-direction: column;
        height: auto;
        margin: auto;
        }
}
#logo{
    font-size: 40px;
    font-weight: bold;
    color: white;
}
.main a{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    font-size: 20px;
    text-decoration: none;
    color: black;
    width: 200px;
    height: 100px;
    padding: 50px;
    margin: 5px;
    background-color: #daeaf7;
    border: 1px solid black;
    border-radius: 5px;
}
.main i{
    font-size: 50px;
    height: 100px;
    color: black;
}


</style>

<body>
<div class="header">
    <p id="logo">PesaSiku</p>
    <a href="dashboard.php"> <i class="fa-solid fa-gauge"></i>Dashboard</a>
    <a href="help.php"><i class="fa-regular fa-circle-question"></i>Help</a>
</div>

<div class="container">  
    <h2>Hello, Please select a service to continue,</h2>
    <div class="main">
        <a href="payroll.php"><i class="fa-solid fa-scroll"></i>Calculate Payroll</a>
        <a href="new employee.php"><i class="fa-solid fa-user-plus"></i>New Employee</a>
        <a href="employees.php"><i class="fa-solid fa-users"></i> Employees</a>
        <!-- <a href="history.php"><i class="fa-solid fa-clock-rotate-left"></i>Payment History</a> -->
    </div>
</div>
</body>
</html>