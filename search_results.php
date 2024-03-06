<?php
session_start();

if (isset($_SESSION["searchResults"])) 
    $searchResults = $_SESSION["searchResults"];

    echo "<table>";
    echo "<tr><th>Make</th><th>Model</th><th>Year</th><th>Mileage</th><th>Location</th><th>Price</th></tr>";

    foreach ($searchResults as $row) {
        echo"the results are";
        
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
