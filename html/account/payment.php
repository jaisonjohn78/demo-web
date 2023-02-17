<?php
include_once '../includes/config.php';
session_start();
$id = $_SESSION["user_id"];





if(isset($_GET["status"]) == "success"){
    $query = mysqli_query($conn, "UPDATE `master_user_tb` SET `payment`='success' WHERE id = $id");
}

$user_info = mysqli_query($conn, "SELECT * FROM `master_user_tb` WHERE id='$id'");
$row = mysqli_fetch_assoc($user_info);






if($row['payment'] == "pending") {
    if($row['pack'] == "pack1") {
        echo "<script>window.location.href = 'https://rzp.io/l/YuxehYD2";
    }
    if($row['pack'] == "pack2") {
        echo "<script>window.location.href = 'https://rzp.io/l/ToFbyzXaut";
    }
    if($row['pack'] == "pack3") {
        echo "<script>window.location.href = 'https://rzp.io/l/FUMQHKF";
    }
    if($row['pack'] == "pack4") {
        echo "<script>window.location.href = 'https://rzp.io/l/GHUyVyR";
    }
    if($row['pack'] == "pack5") {
        echo "<script>window.location.href = 'https://rzp.io/l/ipwGWfOsn";
    }
    if($row['pack'] == "pack6") {
        echo "<script>window.location.href = 'https://rzp.io/l/PqqazQS1";
    }
    if($row['pack'] == "pack7") {
        echo "<script>window.location.href = 'https://rzp.io/l/O6hUNBMRH";
    }
    if($row['pack'] == "pack8") {
        echo "<script>window.location.href = 'https://rzp.io/l/Kc2wev7Mb";
    }
    if($row['pack'] == "pack9") {
        echo "<script>window.location.href = 'https://rzp.io/l/jZSdZHYI";
    }
    if($row['pack'] == "pack10") {
        echo "<script>window.location.href = 'https://rzp.io/l/46P22MT";
    }
    else{
    // echo "<script>window.location.href = '../../admin/dashboard/index.php';</script>";

    }
}else {
// echo "<script>window.location.href = '../../admin/dashboard/index.php';</script>";

}





?>