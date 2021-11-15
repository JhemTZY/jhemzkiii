<?php include "config.php";

if (isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql= "DELETE FROM `user` WHERE `id`='$user_id'";
    $result =$conn->query($sql);
    header('Location: view.php');
}

   



?> 