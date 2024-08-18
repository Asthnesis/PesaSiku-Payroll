<?php
$connection = mysqli_connect("localhost","root","","employees");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$searchTerm = $_GET['term'];

$sql = "SELECT username,id,pos FROM employeedetails WHERE username LIKE '%" . $searchTerm . "%'";

$result = $connection->query($sql);

$suggestions = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $suggestions[] = array(
            'username' => $row['username'],
            'id' => $row['id'],
            'pos'=> $row['pos']
        );
    }
}

echo json_encode($suggestions);

$connection->close();
?>
