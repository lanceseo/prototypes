<!-- index_select.php -->
<?php
require('mysql_connect.php');

$query = "SELECT * FROM todo_items WHERE user_id='3'";
$result = mysqli_query($conn, $query);
//var_dump($result);

if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
        print_r('<br>');
    }
}
?>
