<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/icons/fontawesome-free-6.4.0-web/css/all.min.css">
    <title>Get help</title>
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
    footer{
        display: flex;
        width: max;
        height: 575px;
        background: #a1eafb;
    }
    ul{
        list-style-type: none;
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
<footer>
        <ul>
        <p>For questions,query or any issues please contact us</p>
            <label>Phone</label>
            <li><a href="#">0700000000</a></li>
            <label>Email</label>
            <li><a href="#" type="email">help@pesasiku.com</a></li>
            <p>Socials</p>
            <label>Twitter</label>
            <li><a href="#">www.twitter.com/pesasiku</a></li>
            <label>Instagram</label>
            <li><a href="#">www.instagram.com/pesasiku</a></li>
            <label>Facebook</label>
            <li><a href="#">www.facebook.com/pesasiku</a></li>
        </ul>
</footer>
</body>
</html>