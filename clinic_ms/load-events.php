<?php
    include 'connection.php';

$events = array();

// Query to retrieve events from the database
// Example: SELECT id, title, start, end FROM events
// Adjust the query based on your database schema
$query = "SELECT id, title, start, end FROM events";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
  $events[] = $row;
}

echo json_encode($events);
?>
