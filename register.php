<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zansys Task | Sign Up</title>
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
                <div class="signup-box text-center">
                    <h1 class="h1 head fira-sans">Sign Up</h1><br>
                    <form action="code.php?act=1" method="post">
                        <center>
                        <input type="text" class="inp fira-sans" placeholder="Username" name="un"><br>
                        <input type="email" class="inp fira-sans" placeholder="Email" name="em"><br>
                        <input type="password" class="inp fira-sans" id="pw" placeholder="Password" name="pw"><br>
                        <input type="password" class="inp fira-sans" id="cpw" placeholder="Confirm Password"><br>
                        <button class="btn btn-block btn-success fira-sans" disabled>
                            Sign Up
                        </button>
                        <br>
                        <p class="reg-link">Already a subscriber? login <a href="index.php">here</a></p>
                        </center>
                    </form>
                </div>
                <?php
                error_reporting(0);
                    if($_REQUEST['msg']==1){
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 30px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none"><span aria-hidden="true">&times;</span></button>
                Error occured <strong>Try again later!</strong> 
                </div>
                        <?php
                    }
                ?>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <script>
            $("#cpw").blur(function(){
                pw=$('#pw').val();
                cpw=$(this).val();
                if(pw!="" && cpw!=""){
                        if(pw==cpw){
                        $(':password').css({
                            border : "2px solid #28a745" 
                        });
                        $('.btn').attr("disabled", false);
                        $('.btn').css("cursor", "pointer");
                    }
                    else{
                        $(':password').css({
                            border : "2px solid #d9534f" 
                        });
                        $('.btn').attr("disabled", true);
                        $('.btn').css("cursor", "not-allowed");
                    }

                }
            })
    </script>
</body>
</html>