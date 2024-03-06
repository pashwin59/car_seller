<?php
      
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "car";
    
      $conn = mysqli_connect($servername, $username, $password, $dbname);
    
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $enteredUsername = $_POST["username"];
        $enteredPassword = $_POST["password"];
    
        
        $sql = "SELECT * FROM registration WHERE username = '$enteredUsername' AND password = '$enteredPassword'";
        $result = mysqli_query($conn, $sql);
    
        
        if (mysqli_num_rows($result) > 0) {
          
          header('location: mno.html');
        } else {
          
          echo "Invalid username or password.";
        }
      }
    
      
      mysqli_close($conn);
      ?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #F5F5F5;
      font-family: 'Open Sans', sans-serif;
      font-size: 16px;
    }


    .container {
      margin: 24px;
      padding: 24px;
      background-color: #fff;
      max-width: 800px;
      margin: 0 auto;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      font-family: 'Montserrat', sans-serif;
      font-size: 25px;
      margin: 0px;
      padding: 24px 0;
      background-color:#00000073;
      color: #fff;
      text-align: center;
      border-radius: 0.5rem;
    }

    .login-form {
      margin-top: 24px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login-form input[type="submit"],
    .login-form button {
      background-color: green;
      color: white;
      border: none;
      padding: 12px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
    }

    .login-form .forgot-password {
        background-color: red;
      text-align: center;
    }
  </style>
</head>
<body>
    <div class="container">
        <h2>Login Form</h2>
        <form class="login-form" method="POST" action="">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <input type="submit" value="Login">
          <button class="forgot-password">Forgot password?</button>
        </form>
      </div>
    
          </body>
    </html>
