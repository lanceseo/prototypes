<!-- index_insert.php -->
<?php
require('mysql_connect.php');

//print_r(json_encode($_POST));
$todoTitle = $_POST['title'];
$todoDetails = $_POST['details'];
$todoTimestamp = $_POST['timestamp'];
$todoLocation = $_POST['location'];

$query = "INSERT INTO todo_items (title, details, timestamp, user_id) VALUES('$todoTitle','$todoDetails','$todoTimestamp','3')";
mysqli_query($conn, $query);

if (mysqli_affected_rows($conn)>0) {
    $new_id = mysqli_insert_id($conn);
    $result = [
      'success'=>true, 'new_id'=>$new_id
    ];
    print_r(json_encode($result));
}
else {
    print_r('No Good');
}

?>