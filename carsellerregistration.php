<?php
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="car";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);


if(!$conn){
    die("Connection failed:".mysqli_connect_error());
    
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $sql = "INSERT INTO registration (name, address, phone, email, username, password) VALUES ('$name', '$address', '$phone', '$email', '$username', '$password')";

    
    if (mysqli_query($conn, $sql)) {
      header('location: sucess.html');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>CAR SELLING </title>
 <link rel="stylesheet" href="style.css"> 
<style>
    body {
  margin: 0;
  padding: 0;
  background-color: #F5F5F5;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
}

.title {
  text-align: center;
  padding: 24px 0px;
  background-color: blueviolet;
  color: #fff;
  font-family: 'Montserrat', sans-serif;
}

.contain {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 24px;
  flex-wrap: wrap;
}

.contain img {
  margin: 24px;
  width: 300px;
  height: 200px;
  object-fit: cover;
  object-position: center;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 1rem;
  transition: transform 0.3s ease;
}

.contain img:hover {
  transform: scale(1.1);
}

    .contain p {
  font-family: Arial, sans-serif;
  font-size: 1.2em;
  line-height: 1.6;
  margin: 0;
  padding: 1em;
  color: black;
  background-color: #f5f5f5;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 0.5rem;
}

input[type="text"],
input[type="email"],
input[type="username"],
input[type="password"],
textarea {
  width: 100%;
  padding: 12px 16px;
  margin: 8px 0px;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  border-radius: 0.25rem;
  border: 1px solid #ccc;
  box-sizing: border-box;
  transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="username"]:focus,
input[type="password"]:focus,
input[type="text"] {
  background-color: white;
  transition: background-color 0.3s ease;
}

input[type="text"]:focus {
  background-color: yellow;
}
input[type="email"]:focus {
  background-color: yellow;
}
input[type="username"]:focus {
  background-color: yellow;
}
input[type="password"]:focus {
  background-color: yellow;
}

textarea:focus {
  border-color: #333;
  outline: none;
}

.container label {
  margin: 12px 0px;
  font-family: 'Montserrat', sans-serif;
  font-size: 18px;
  color: #333;
}

.btn {
  font-family: 'Montserrat', sans-serif;
  font-size: 18px;
  margin: 12px 0px;
  padding: 12px;
  width: 100%;
  border: none;
  background-color:#555 ;
  color: #fff;
  display: block;
  cursor: pointer;
  border-radius: 0.25rem;
  transition: background-color 0.3s ease;
}


.btn:hover {
  background-color: lightblue;
}

.vid {
  width: 100%;
  max-width: 800px;
  margin: 24px auto;
}

</style>
 
</head>
<body>
 <!-- <form action="action.php"> -->
 <div class="container">
 <div class="title">SELLER REGISTRATION FORM</div>
 <div class="contain">
 <img src="car.jpg" >
 <p>We the Hyper Car Seller team wants the detail of sellers who want to sell their cars.</p>

 </p>
 </div>
 <!-- <body> -->
        <h2 class="register" style="text-align: center; font-family: 'Dongle', sans-serif;">Register Your Self below -</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group">
            <label for="name"> Name  </label>
            <input id="name" type="text" name="name">
          </div>
          <div class="form-group">
            <label for="C_Address"> Address</label>
            <textarea id="C-Address" name="address" cols="20" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="mobilenumber">Phone Number</label>
            <input id="mobilenumber" type="text" name="phone" value="+61">
          </div>
          <div class="form-group">
            <label for="Email">Email ID </label>
            <input id="Email" type="email" name="email">
          </div>
          <div class="form-group">
            <label for="username">Username  </label>
            <input id="username" type="username" name="username">
          </div>
          <div class="form-group">
            <label for="Password">Password  </label>
            <input id="Password" type="password" name="password">
          </div>
          <button class="btn">Register</button>
          <button class="btn">Reset</button>
        </form>
      </body>
