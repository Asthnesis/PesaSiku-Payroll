<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
    .container{
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            margin-top: 80px;
    }
    .container h1{
        text-align: center;
    }
    form{
        display: flex;
        flex-direction: column;
        max-width: 300px;
        margin: 0 auto;
        border: 1px solid black;
        padding: 15px;
        border-radius: 5px;
    }
    form > #username,#password{
        padding: 5px;
        margin-bottom: 5px;
    }
    form button{
        height: 35px;
        border-radius: 10px;
    }
    form button:hover{
        background-color: lightblue;
    }
    form #forgot{
        left: 20px;
    }

</style>
<body>
<div class="container">
        <h1>Payroll Management System</h1>
        <form action="">
        <h4>Login to continue</h4>
        <label for="username" >Username</label>
        <input type="text" id="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" required>
        <button>Submit</button>
        <a href="#" id="forgot"><h5>Forgot password?</h5></a>
        </form>
</div>
</body>
</html>