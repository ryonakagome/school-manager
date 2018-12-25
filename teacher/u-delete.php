<?php
    $uid = $_GET['uid'];

    require_once('../config/config.php');

    $sql = mysqli_query($db_link, "DELETE FROM user_teacher WHERE UserID = '$uid'");
    header('Location: u-manage.php');
    exit();
?>