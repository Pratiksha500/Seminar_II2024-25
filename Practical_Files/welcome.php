<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #e0f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .box {
      background: #ffffffcc;
      padding: 30px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    a {
      text-decoration: none;
      padding: 10px 20px;
      background-color: #e74c3c;
      color: white;
      border-radius: 6px;
      margin-top: 20px;
      display: inline-block;
    }
  </style>
</head>
<body>

  <div class="box">
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    <a href="logout.php">Sign Out</a>
  </div>

</body>
</html>


