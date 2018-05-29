<?php
    session_start();
    if($_SESSION['logval']!=1){
        header("location: index.php");
    }
    require_once('connection.php');
    $id=$_REQUEST['id'];
    $qry="select * from tbl_user where user_id='$id'";
    $res=mysqli_query($conn, $qry);
    $data=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subscriber | Dashboard</title>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">                
                    <div class="profile-box">
                        
                <h1 class="h1 text-center heading">
                    Welcome, <?php
                        echo $_SESSION['user'];
                    ?>
                </h1>

                <h3>
                    User Profile:
                </h3>
                <p class="info">
                    Username: <strong style="float: right"><?php echo $data['user_username'] ?></strong><br>
                    Email:  <strong style="float: right"><?php echo $data['user_email'] ?></strong><br>
                    Password: <strong style="float: right"><?php echo $data['user_password'] ?></strong><br>

                </p>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create">
    <a href="index.php" class="plus" title="Logout" style="text-decoration: none; ">
    <i class="fas fa-power-off"></i>
    </a>
  </div>
</body>
</html>