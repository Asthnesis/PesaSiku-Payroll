<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll</title>
    <link rel="stylesheet" href="/icons/fontawesome-free-6.4.0-web/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
    color: cyan;
}
    .container{
    background-color: #89bdf6;
    display: flex;
    flex-direction: column;
    text-align: center;
    padding-bottom: 20px;
    }
    .main a{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        font-size: 20px;
        text-decoration: none;
        color: grey;
        width: 200px;
        height: 100px;
        padding: 50px;
        margin: 5px;
        background-color: #89bdf6;
        border: 1px solid black;
    }
    .main{
    display: flex;
    justify-content: space-evenly;
    flex-direction: row;
    align-items: center;
    margin: 10px 0 0 0;
    padding: 50px;
    }
    .main input{
        border-radius: 0;
        margin: 5px;
        width: 200px;
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
    <p>Calculate the payroll of your employees</p>
   <form action="db.php"  method="post" >
   <div class="main">
      <div>
        <fieldset>
            <legend>Personal Information</legend>
        <label for="Name">Full Name</label><br>
        <input type="text" name="pname" id="fullname" list="suggestionsList" autocomplete="off"> <br>
        <datalist id="suggestionsList"></datalist>
        <label for="Name">Employment ID</label><br>
        <input type="text" name="pid" id="employmentID" autocomplete="off"> <br>
        <label for="Name">Position</label><br>
        <input type="text" name="pposition" id="position" autocomplete="off"> <br>
        </fieldset>
      </div>
      <fieldset>
        <legend>Finance</legend>
        <div>
        <label for="salary">Salary</label><br>
        <input type="text" id="salary" name="salary" required><br>
        <label for="Bonus">Bonus</label><br>
        <input type="text" id="bonus" name="bonus" required><br>
        <label for="Deductions">Deductions</label><br>
        <input type="text" id="deductions" name="deduction" required><br>
        </fieldset>
        </div>
        <button onsubmit="calculatePayroll">Submit</button>
        <div class="output">
        <span id="payroll"></span>
        </div>
    </div>
    </form>
</div>
<script>
    $(document).ready(function () {
        $('#fullname').on('input', function () {
            var searchTerm = $(this).val();

            $.ajax({
                url: 'suggest.php',
                type: 'GET',
                data: { term: searchTerm },
                dataType: 'json',
                success: function (response) {
                    var suggestionsList = $('#suggestionsList');
                    suggestionsList.empty();

                    $.each(response, function (index, suggestion) {
                        suggestionsList.append('<option value="' + suggestion.username + '">');
                    });
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $('#fullname').on('change', function () {
            var selectedName = $(this).val();

            $.ajax({
                url: 'suggest.php',
                type: 'GET',
                data: { term: selectedName },
                dataType: 'json',
                success: function (response) {
                    if (response.length > 0) {
                        var employmentID = response[0].id;
                        var position = response[0].pos;

                        $('#employmentID').val(employmentID);
                        $('#position').val(position);
                    } else {
                        $('#employmentID').val('');
                        $('#position').val('');
                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>



</body>
<script>
  function calculatePayroll() {
            var salary = parseFloat(document.getElementById("salary").value);
            var bonus = parseFloat(document.getElementById("bonus").value);
            var deductions = parseFloat(document.getElementById("deductions").value);

            var payroll = (salary + bonus) - deductions;
            document.getElementById("payroll").textContent = "Total: Ksh " + payroll.toFixed(2);
        }
    </script>
</html>