<?php

include_once './config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];

  }


$sql = "INSERT INTO Persons (name, address)
VALUES ('$name', '$address')";









if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// mysqli_close($conn);

// $conn->close();
