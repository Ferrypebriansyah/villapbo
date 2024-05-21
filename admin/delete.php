<?php
include 'db_connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM bookings WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
