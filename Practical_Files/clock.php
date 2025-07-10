<!-- Name: Ghatol Pratiksha Prabhakar
Class: SY(CSE)-A
Roll No: 105 -->


<!DOCTYPE html>
<html>
<head>
  <title>PHP Digital Clock</title>
  <meta http-equiv="refresh" content="1">
  <style>
    body {
      font-family: 'Courier New', monospace;
      background: linear-gradient(to right, #e0f7fa, #80deea);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .clock {
      font-size: 60px;
      color: #004d40;
      background: #ffffffcc;
      padding: 30px 60px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body>

  <div class="clock">
    <?php
      date_default_timezone_set("Asia/Kolkata");
      echo date("H:i:s");
    ?>
  </div>

</body>
</html>
