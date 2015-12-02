<!-- Session Reader -->
<?php
session_start();
$form_data = $_POST;
$_SESSION['f_data'] = $form_data;
//print_r($_SESSION['f_data']);
$errArray = array();

if (!preg_match("/^[a-zA-Z ]*$/",$_SESSION['f_data']['name'])) {
    $nameErr = 'Only letters and white space allowed for NAME';
    $errArray = ['name'=>$nameErr];
}
if (!is_int($_SESSION['f_data']['age'])) {
    $ageErr = 'Only integers are allowed for AGE';
    array_push($errArray, ['age'=>$ageErr]);
}
if (!preg_match("/^[a-zA-Z ]*$/",$_SESSION['f_data']['occupation'])) {
    $occuErr = 'Only letters and white space allowed for OCCUPATION';
    array_push($errArray, ['occu'=>$occuErr]);
}
$_SESSION['error'] = $errArray;

header('location: session_setter.php');
//var_dump($_SESSION);
//print_r($_SESSION['error']);
//print_r($_SESSION['error']['name']);
//var_dump(isset($_SESSION['error']['name']));
?>
<br><br>
<a href="session_setter.php">Go to Setter</a><br>
