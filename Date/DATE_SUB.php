<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sql_functions_demo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT DATE_SUB(hire_date, INTERVAL 1 YEAR) AS result FROM employees LIMIT 1";
$result = $conn->query($query);

echo "<h1>DATE_SUB Output</h1>";
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Result: " . $row["result"] . "<br>";
    }
} else {
    echo "No results or error: " . $conn->error;
}
$conn->close();
?>