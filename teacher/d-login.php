<?php
    // 送信されてきたUID、パスワードを取得
    $uid = $_POST['uid'];
    $pass = $_POST['pass'];

    // 特殊文字を排除
    $h_uid = htmlspecialchars($uid, ENT_QUOTES);
    $h_pass = htmlspecialchars($pass, ENT_QUOTES);

    // SQL情報を取得
    require_once('../config/config.php');

    // SQL特殊文字を排除
    $e_uid = $db_link -> real_escape_string($h_uid);
    $e_pass = $db_link -> real_escape_string($h_pass);

    $sql = mysqli_query($db_link, "SELECT UserID, Password FROM user_teacher WHERE UserID = '$e_uid'");
    $result = mysqli_fetch_assoc($sql);

    if($result['UserID'] == $e_uid and password_verify($e_pass, $result['Password'])) {
        session_start();
        $_SESSION['T_uid'] = $result['UserID'];
        header('Location: home.php');
        exit();
    } else {
        header('Location: index.html');
        exit();
    }
?>