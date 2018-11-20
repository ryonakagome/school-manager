<?php
    session_start();
    if(isset($_SESSION['T_uid']) != '') {

    } else {
        header('Location: index.html');
        exit();
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <!-- エンコード設定 -->
        <meta charset="UTF-8" />
        
        <!-- Viewport設定 -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />

        <!-- 検索エンジンクローラからの排除 -->
        <meta name="robots" content="noindex,nofollow" />

        <!-- ページタイトルの設定 -->
        <title>講師ログイン - SCHOOMA!</title>

        <!-- Materializeのインポート -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    </head>
    <body>
        <!-- ナビゲーション -->
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="home.php" class="brand-logo">SCHOOMA!</a>
                    <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="c-record.php">授業記録</a></li>
                        <li><a href="s-record.php">生徒の学習記録</a></li>
                        <li><a href="c-manage.php">授業管理</a></li>
                        <li><a href="s-manage.php">生徒管理</a></li>
                    </ul>
                </div>
            </div>
        </nav>
