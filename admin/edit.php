<?php
    session_start();
    if($_SESSION['logval']!=1){
        header("location: ../index.php");
    }
    require_once('connection.php');
    $id=$_REQUEST['id'];
    $qry="select * from tbl_user where user_id=$id";
    $res=mysqli_query($conn, $qry);
    $data=mysqli_fetch_array($res);
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
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <div class="edit-box">
                    <h1 class="h1 text-center">
                        Edit User Info
                    </h1><br>
                    <form action="code.php?act=1" method="post">
                        <center>
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input type="text" class="form-control fira-sans" placeholder="Username" name="un" value="<?php echo $data['user_username'] ?>"><br>
                        <input type="email" class="form-control fira-sans" placeholder="Email" name="em" value="<?php echo $data['user_email'] ?>"><br>
                        <input type="text" class="form-control fira-sans" id="pw" placeholder="Password" name="pw" value="<?php echo $data['user_password'] ?>"><br>
                        <select name="type" id="" class="form-control">
                            <option value="subscriber">
                                Subscriber
                            </option>
                            <option value="admin">
                                Admin
                            </option>   
                        </select><br>
                        <button class="btn btn-block btn-warning fira-sans">
                            Update
                        </button>
                        </center>
                    </form>
                </div>
                <?php
                error_reporting(0);
                    if($_REQUEST['msg']==1){
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 30px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none"><span aria-hidden="true">&times;</span></button>
                <strong>Error</strong> occured, try again.
                </div>
                        <?php
                    }
                ?>
            </div>
            <div class="col-sm-3">
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