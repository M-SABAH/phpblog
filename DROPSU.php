<?php
include './drop.php';
include './regstration.php';
$db=new db();
if (isset($_POST['send'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $pass = $_POST['Pass'];
    $query_drop = "DELETE FROM `users` WHERE`USER_NAME`='$name' AND `UESR_EMAIL` = '$email'OR `USER_PASS` = '$pass'";
    $db->drop($query_drop);
}

