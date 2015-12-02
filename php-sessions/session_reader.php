<!-- Session Reader -->
<?php
session_start();
$_SESSION['f_data'] = $_POST;
$_SESSION['error'] = [];
// var_dump($_SESSION);
$errFlag = false;

if (!preg_match("/^[a-zA-Z ]*$/",$_SESSION['f_data']['name'])) {
    $nameErr = 'Only letters and white space allowed for NAME';
    $_SESSION['error']['name'] = $nameErr;
    $errFlag = true;
}

if (!is_numeric($_SESSION['f_data']['age'])) {
    $ageErr = 'Only integers are allowed for AGE';
    $_SESSION['error']['age'] = $ageErr;
    $errFlag = true;
}

if (!preg_match("/^[a-zA-Z ]*$/",$_SESSION['f_data']['occupation'])) {
    $occuErr = 'Only letters and white space allowed for OCCUPATION';
    $_SESSION['error']['occu'] = $occuErr;
    $errFlag = true;
}

if ($errFlag) {
    header('location: session_setter.php');
}

print_r($_SESSION);

?>
<br><br>
<a href="session_setter.php">Go to Setter</a><br>
