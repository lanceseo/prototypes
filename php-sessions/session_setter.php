<!-- Session Setter -->
<?php
session_start();
?>
<br><br>
<form action="session_reader.php" method="post">
    <input type="text" name="name" placeholder="name" value="<?=$_SESSION['f_data']['name'];?>"><br>
    <? if (isset($_SESSION['error']['name'])) {
        print_r($_SESSION['error']['name']);
    }
    ?><br>
    <input type="text" name="age" placeholder="age" value="<?=$_SESSION['f_data']['age'];?>"><br>
    <? if (isset($_SESSION['error']['age'])) {
        print_r($_SESSION['error']['age']);
    }
    ?><br>
    <input type="text" name="occupation" placeholder="occupation" value="<?=$_SESSION['f_data']['occupation'];?>"><br>
    <? if (isset($_SESSION['error']['occu'])) {
        print_r($_SESSION['error']['occu']);
    }
    ?><br>
    <input type="submit">
</form>