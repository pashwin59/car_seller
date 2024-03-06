<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "car";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $make = $_POST["make"];
    $model = $_POST["model"];
    $year = $_POST["year"];
    $mileage = $_POST["mileage"];
    $location = $_POST["location"];
    $price = $_POST["price"];

    // Prepare the SQL statement to insert data into the table
    $sql = "INSERT INTO advv (make, model, year, mileage, location, price) 
            VALUES ('$make', '$model', '$year', '$mileage', '$location', '$price')";

    if (mysqli_query($conn, $sql)) {
        header('location: pqr.html');
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Advertisement</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
      margin: 0;
      padding: 0;
      background-color: whitesmoke;
      font-family: 'Open Sans', sans-serif;
      font-size: 16px;
    }

    .title {
      text-align: center;
      padding: 24px 0px;
      background-color: #333;
      color: #fff;
      font-family: 'Montserrat', sans-serif;
    }
    h1 {
  text-align: center;
  font-size: 48px;
  font-family: Arial, sans-serif;
  color: #333;
  text-shadow: 2px 2px #ddd;
  margin-top: 50px;
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
      background-color: purple;
      color: #fff;
      text-align: center;
      border-radius: 0.5rem;
    }
    .container h2 {
  color: palegreen;
}
input[type="text"] {
  background-color: white;
  transition: background-color 0.3s ease;
}

input[type="text"]:focus {
  background-color: yellow;
}
    input[type="text"],
    input[type="number"],
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
    input[type="number"]:focus,
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
      background-color: #333;
      color: #fff;
      display: block;
      cursor: pointer;
      border-radius: 0.25rem;
      transition: background-color 0.3s ease;
      text-align: center;
    }

    .btn:hover {
      background-color:lightblue;
    }

    </style>
</head>
<body>
    <h1 style="color: red;">ADVERTISE</h1>
    <div class="container">
        <h2>Add Car</h2>
        <form action="" method="post">
            <label for="make">Make:</label>
            <input type="text" id="make" name="make" required>

            <label for="model">Model:</label>
            <input type="text" id="model" name="model" required>

            <label for="year">Year:</label>
            <input type="text" id="year" name="year" required>

            <label for="mileage">Mileage:</label>
            <input type="text" id="mileage" name="mileage" required>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>

            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
