<?php
$connection = new mysqli("localhost", "root", "", "school");

if ($connection->connect_error) {
    die("Connection failed");
}

$name = $_GET['name'];

$sql = "SELECT * FROM students WHERE name LIKE '%$name%'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'><tr><th>ID</th><th>Name</th><th>Roll No</th><th>Class</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['roll_no']}</td>
                <td>{$row['class']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No matching student found.";
}

$connection->close();
?>
