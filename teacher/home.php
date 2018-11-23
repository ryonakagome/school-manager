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

        <script>
            (function(d) {
                var config = {
                    kitId: 'myt3eht',
                    scriptTimeout: 3000,
                    async: true
                },
                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
            })(document);
        </script>
        <style>
            body {
                font-family: fot-rodin-pron, sans-serif;
            }
        </style>
            
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
                        <li><a href="m-manage.php">勤怠・シフト管理</a></li>
                        <li><a href="u-manage.php">ユーザ管理</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
            });
        </script>

        <!-- メインコンテンツ -->
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <?php
                        $uid = $_SESSION['T_uid'];
                        require_once('../config/config.php');
                        $sql = mysqli_query($db_link, "SELECT UserName FROM user_teacher WHERE UserID = '$uid'");
                        $result = mysqli_fetch_assoc($sql);
                        $un = $result['UserName'];
                    ?>
                    <h3>ようこそ、<?php print($un); ?>さん。</h3> 
                    <p>画面上部のメニューからやることを選択してください。</p> 
                </div>
            </div>
        </div>