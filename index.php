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
    <title>Title</title>
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
                <p class="logo">
                    <img src="assets/images/logo.png" alt="" width="40%">
                </p>
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
                      
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
</body>
</html>