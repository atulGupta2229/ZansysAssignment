<?php
    session_start();
    if($_SESSION['logval']!=1){
        header("location: ../index.php");
    }
    require_once('connection.php');
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
                <div class="table-responsive tbl">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Username
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Password
                                </th>
                                <th>
                                    User Type
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $qry="select * from tbl_user";
                                $res=mysqli_query($conn, $qry);
                                while($data=mysqli_fetch_array($res)){
                                    ?>
                                    <tr>
                                        <td><?php echo $data['user_id'] ?></td>
                                        <td><?php echo $data['user_username'] ?></td>
                                        <td><?php echo $data['user_email'] ?></td>
                                        <td><?php echo $data['user_password'] ?></td>
                                        <td><?php echo $data['user_type'] ?></td>
                                        <td><a href="code.php?act=2&id=<?php echo $data['user_id'] ?>"><i class="far fa-trash-alt"></i> Delete</a></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
                error_reporting(0);
                    if($_REQUEST['msg']==1){
                        ?>
                        <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 30px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none"><span aria-hidden="true">&times;</span></button>
                <i class="far fa-trash-alt"></i> Deleted Successfully. 
                </div>
                        <?php
                    }
                    else if($_REQUEST['msg']==2){
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 30px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none"><span aria-hidden="true">&times;</span></button>
                        <strong>Error</strong> occured, try again.
                </div>
                <?php
                    }
                ?>
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