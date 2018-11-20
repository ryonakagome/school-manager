<?php
    $db_host = 'db.rintech.tokyo';
    $db_user = 'root';
    $db_pass = 'yakiniki2001';
    $db_name = 'school';

    $db_link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    mysqli_set_charset($db_link, 'utf8');
?>