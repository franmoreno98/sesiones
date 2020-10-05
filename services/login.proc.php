<?php
include 'connection.php';
if (isset($_POST['email'])) {
    echo md5($_POST['passwd']);
}else{
    header('Location:../index.php');
}
?>