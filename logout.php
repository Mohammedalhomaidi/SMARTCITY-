<?php
session_start();
if(isset( $_SESSION['LoginAdmin'])){
unset($_SESSION['LoginAdmin']); 

}
if(isset( $_SESSION['LoginUser'])){
unset($_SESSION['LoginUser']);
}

session_destroy();
header("location:index.php");
?>