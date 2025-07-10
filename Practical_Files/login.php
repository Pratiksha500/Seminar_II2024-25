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

