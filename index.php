<?php
session_start();
$_SESSION['logval']=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zansys Task | Login</title>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
            
                <div class="login-box text-center">
                    <h1 class="h1 fira-sans">Login</h1><br>
                    <form action="code.php?act=2" method="post">
                        <center>
                        <input type="text" class="inp fira-sans" placeholder="Username" name="un"><br>
                        <input type="password" class="inp fira-sans" placeholder="Password" name="pw"><br>
                        <button class="btn btn-block btn-info fira-sans">
                            Login
                        </button>
                        <br>
                        <p class="reg-link">
                           Don't have an account? Sign up <a href="register.php">here</a>
                        </p>
                        </center>
                    </form>
                </div>
                <?php
                error_reporting(0);
                    if($_REQUEST['msg']==1){
                        ?>
                        <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 30px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none"><span aria-hidden="true">&times;</span></button>
                Signed Up Successfully, <strong>Login Here</strong> 
                </div>
                        <?php
                    }
                ?>
                <?php
                    if($_REQUEST['msg']==2){
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 30px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none"><span aria-hidden="true">&times;</span></button>
                Incorrect <strong>username</strong> or <strong>password</strong> .
                </div>
                        <?php
                    }
                ?>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
</body>
</html>