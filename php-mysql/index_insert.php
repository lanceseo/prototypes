<!-- index_insert.php -->
<?php
require('mysql_connect.php');

print_r($_POST);
$todoTitle = $_POST['title'];
$todoDetails = $_POST['details'];
$todoTimestamp = $_POST['timestamp'];
$todoLocation = $_POST['location'];

$query = "INSERT INTO todo_items (title, details, timestamp, user_id) VALUES('$todoTitle','$todoDetails','$todoTimestamp','3')";
mysqli_query($conn, $query);

if (mysqli_affected_rows($conn)>0) {
    $new_id = mysqli_insert_id($conn);
    print_r("New ID: ".$new_id);
    $success = $new_id;
}

?>