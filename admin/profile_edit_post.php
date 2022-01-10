<?php
//print_r($_POST);
session_start();
require_once '../db.php';

//$login_email= $_SESSION['email'];

if($_POST['user_name'] == NULL || $_POST['phone'] == NULL ){
    $_SESSION['profile-err']="all filled required !";
    header('location: profile_edit.php');
}
//why why why??????????????????
else {
    $user_name = $_POST['user_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    

    $update_query = " UPDATE users SET users_name='$user_name' , phone='$phone' WHERE email='$login_email' ";
    mysqli_query($db_connect,$update_query);
    header('location: profile.php');
   
}



?>
