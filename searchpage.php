<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $model = $_POST["model"];
    $location = $_POST["location"];

    $sql = "SELECT * FROM advv WHERE model LIKE '%$model%' AND location LIKE '%$location%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<table>";
        echo "<tr><th>Make</th><th>Model</th><th>Year</th><th>Mileage</th><th>Location</th><th>Price</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["make"] . "</td>";
            echo "<td>" . $row["model"] . "</td>";
            echo "<td>" . $row["year"] . "</td>";
            echo "<td>" . $row["mileage"] . "</td>";
            echo "<td>" . $row["location"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No results found.";
    }

    $result->free_result();

}

$conn->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Search</title>
    
    <link rel="stylesheet" href="as.css">
  </head>
  <body>
    <header>
      <h1>Search the Car you want</h1>
    </header>
    <main>
<form action="searchpage.php" method="post">
    <label for="model">Model:</label>
    <input type="text" id="model" name="model">
    <label for="location">Location:</label>
    <input type="text" id="location" name="location">
    <button type="submit">Search</button>
</form>
</body>
</html>


