<?php
    require_once('../config/config.php');

    $uid = 'root';
    $pass = 'root';
    $un = '管理者';
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = mysqli_query($db_link, "INSERT INTO user_teacher VALUES ('$uid', '$un', '$hash')");
?>