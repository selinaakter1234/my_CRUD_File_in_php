<?php
require_once '../db.php';
//print_r($_POST);
 $sub_head =$_POST['sub_head'];
 $white_head =$_POST['white_head'];
 $green_head =$_POST['green_head'];
 $para_one =$_POST['para_one'];
 $para_two =$_POST['para_two'];

//  inser query 
$insert_query = "INSERT INTO funfacts (sub_head,white_head,green_head,para_one,para_two) VALUES('$sub_head','$white_head','$green_head','$para_one','$para_two')";
mysqli_query($db_connect,$insert_query);
header('location: funfact.php');
?>