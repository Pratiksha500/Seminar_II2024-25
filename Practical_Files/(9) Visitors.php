<!-- Name: Ghatol Pratiksha Prabhakar
Class: SY(CSE)-A
Roll No: 105 -->


<?php
$file = "counter.txt";
if (!file_exists($file)) {
    file_put_contents($file, "0");
}
$count = (int)file_get_contents($file);
$count++;
file_put_contents($file, $count);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #c6ffdd, #fbd786, #f7797d);
            text-align: center;
            margin-top: 100px;
        }
        h1 {
            color: #2c3e50;
        }
        .count {
            font-size: 48px;
            color: #e74c3c;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <div class="count">Visitor Count: <?php echo $count; ?></div>
</body>
</html>
