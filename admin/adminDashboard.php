<?php
    session_start();
    if($_SESSION['logval']!=1){
        header("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Dashboard</title>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
                <h1 class="h1 text-center heading">
                    Welcome, <?php
                        echo $_SESSION['admin'];
                    ?>
                </h1>
                <div class="row">
                    <div class="col-sm-6">
                    <a href="editinfo.php">
                    <div class="crd">
                        <i class="fas fa-edit pull-left"></i>
                    <p class="pull-right capt">Edit Info</p>
                    </div>
                    </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="deleteuser.php">
                        <div class="crd">
                        <i class="fas fa-user-times"></i>
                        <p class="pull-right capt">Delete User</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
    <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create">
    <a href="../index.php" class="plus" title="Logout" style="text-decoration: none; ">
    <i class="fas fa-power-off"></i>
    </a>
  </div>
</body>
</html>