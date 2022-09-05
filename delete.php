<?php
include_once './config/db.php';

// sql to delete a record
$sql = "DELETE FROM Persons WHERE PersonID=11";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
