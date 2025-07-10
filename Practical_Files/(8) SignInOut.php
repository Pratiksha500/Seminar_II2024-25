<!-- Name: Ghatol Pratiksha Prabhakar
Class: SY(CSE)-A
Roll No: 105 -->


<?php
session_start();

$valid_username = "admin";
$valid_password = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign-In</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #f8fdff, #d0eafc);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      width: 300px;
      text-align: center;
    }

    input {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      background-color: #3498db;
      border: none;
      color: white;
      border-radius: 6px;
      cursor: pointer;
    }

    .error {
      color: red;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h2>Sign In</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="post">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
    </form>
  </div>

</body>
</html>


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


<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();
