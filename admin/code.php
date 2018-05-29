<?php
    require_once('connection.php');
    $act=$_REQUEST['act'];
    switch($act){
        case 1: 
                $id=$_POST['id'];
                $un=$_POST['un'];
                $em=$_POST['em'];
                $pw=$_POST['pw'];
                $type=$_POST['type'];

                $qry="update tbl_user set user_username='$un', user_email='$em', user_password='$pw', user_type='$type' where user_id=$id";
                $res=mysqli_query($conn, $qry);
                if($res){
                    header("location: editinfo.php?msg=1");
                }
                else{
                    header("location: edit.php?id=".$id."&msg=1");
                }
                break;
        case 2:
                $id=$_REQUEST['id'];

                $qry="delete from tbl_user where user_id=$id";
                $res=mysqli_query($conn, $qry);
                if($res){
                    header("location: deleteuser.php?msg=1");
                }
                else{
                    header("location: deleteuser.php?msg=2");
                }

    }
?>