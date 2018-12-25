<?php
    $uid = $_POST['uid'];
    $un = $_POST['uname'];
    $pass = $_POST['pass'];
    
    if($uid == '' or $un == '' or $pass == '') {
        print('<script>alert("空白の箇所があります。");location.href="u-manage.php";</script>');
        exit();
    } else {
        require_once('../config/config.php');

        $uid_h = htmlspecialchars($uid, ENT_QUOTES);
        $un_h = htmlspecialchars($un, ENT_QUOTES);
        $pass_h = htmlspecialchars($pass, ENT_QUOTES);

        $uid = $db_link -> real_escape_string($uid_h);
        $un = $db_link -> real_escape_string($un_h);
        $pass = $db_link -> real_escape_string($pass_h);

        $pass_h = password_hash($pass, PASSWORD_DEFAULT);

        $sql = mysqli_query($db_link, "INSERT INTO user_teacher VALUES ('$uid', '$un', '$pass_h');");

        header('Location: u-manage.php');
        exit();
    }
?>