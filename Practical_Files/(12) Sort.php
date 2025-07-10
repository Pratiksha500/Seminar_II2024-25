<!-- Name: Ghatol Pratiksha Prabhakar
Class: SY(CSE)-A
Roll No: 105 -->


<?php
$connection = new mysqli("localhost", "root", "", "school");

$order = "name ASC";

if (isset($_GET["sort"])) {
    $sort = $_GET["sort"];
    if ($sort == "name_asc") $order = "name ASC";
    else if ($sort == "name_desc") $order = "name DESC";
    else if ($sort == "roll_asc") $order = "roll_no ASC";
    else if ($sort == "roll_desc") $order = "roll_no DESC";
}

$sql = "SELECT * FROM students ORDER BY $order";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Sorting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ffecd2, #fcb69f);
            margin: 0;
            padding: 40px;
            text-align: center;
        }

        .box {
            background-color: white;
            padding: 30px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            max-width: 600px;
        }

        select {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #0077b6;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        button {
            padding: 10px 20px;
            background-color: #0077b6;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Sort Student Records</h2>

    <form method="get">
        <select name="sort">
            <option value="name_asc">Sort by Name (A-Z)</option>
            <option value="name_desc">Sort by Name (Z-A)</option>
            <option value="roll_asc">Sort by Roll No (Ascending)</option>
            <option value="roll_desc">Sort by Roll No (Descending)</option>
        </select>
        <button type="submit">Sort</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Class</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['roll_no']}</td>
                        <td>{$row['class']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found.</td></tr>";
        }
        $connection->close();
        ?>
    </table>
</div>

</body>
</html>
