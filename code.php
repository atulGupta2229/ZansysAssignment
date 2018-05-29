<?php
    session_start();
    require_once('connection.php');
    $act=$_REQUEST['act'];
    switch($act){
        case 1:
                $un=$_POST['un'];
                $em=$_POST['em'];
                $pw=$_POST['pw'];

                $qry="INSERT INTO `tbl_user`(`user_username`, `user_email`, `user_password`) VALUES ('$un', '$em', '$pw')";
                $res=mysqli_query($conn, $qry);
                if($res){
                    header('Location: index.php?msg=1');
                }
                else{
                    header('location: register.php?msg=1');
                }
                break;
        case 2:
                $un=$_POST['un'];
                $pw=$_POST['pw'];
                $qry="SELECT * FROM `tbl_user` WHERE `user_username`='$un' AND `user_password`='$pw'";
                $res=mysqli_query($conn, $qry);
                if($data=mysqli_fetch_array($res)){
                    if($data['user_type']=="subscriber"){
                        $_SESSION['user']=$data['user_username'];
                        $_SESSION['logval']=1;
                        header("location: subDashboard.php?id=".$data['user_id']);
                    }
                    else if($data['user_type']=="admin"){
                        $_SESSION['admin']=$data['user_username'];
                        $_SESSION['logval']=1;
                        header("location: admin/adminDashboard.php");
                    }
                }
                else{
                    header("location: index.php?msg=2");
                }
                break;
                
    }
?>