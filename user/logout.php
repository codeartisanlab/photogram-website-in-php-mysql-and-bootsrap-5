<?php
include('../db_functions.php');
if($_SESSION['user']){
    unset($_SESSION['user']);
    unset($_SESSION['mobile']);
    header("location:login.php");
}
?>