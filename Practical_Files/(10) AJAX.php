<!-- Name: Ghatol Pratiksha Prabhakar
Class: SY(CSE)-A
Roll No: 105 -->


<!DOCTYPE html>
<html>
<head>
  <title>AJAX with PHP</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background: linear-gradient(to right, #74ebd5, #ACB6E5);
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .container {
      background-color: #fff;
      padding: 40px 50px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      text-align: center;
      width: 400px;
    }

    h2 {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    input[type="text"] {
      padding: 12px;
      width: 90%;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    button {
      margin-top: 20px;
      padding: 12px 20px;
      background-color: #3498db;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #2980b9;
    }

    #response {
      margin-top: 25px;
      font-size: 18px;
      color: #34495e;
    }
  </style>

  <script>
    function sendRequest() {
      var xhttp = new XMLHttpRequest();
      var name = document.getElementById("name").value;
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("response").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "response.php?name=" + name, true);
      xhttp.send();
    }
  </script>
</head>
<body>
  <div class="container">
    <h2>AJAX Greeting Form</h2>
    <input type="text" id="name" placeholder="Enter your name">
    <br>
    <button onclick="sendRequest()">Submit</button>
    <div id="response"></div>
  </div>
</body>
</html>


<?php
$name = $_GET["name"];
echo "Hello, " . htmlspecialchars($name) . "! This response came from PHP using AJAX.";
?>