<?php
include_once '../includes/config.php';
session_start();
$id = $_SESSION["user_id"];



$_GET["status"] = "";

if($_GET["status"] == "success"){
    $query = mysqli_query($conn, "UPDATE `master_user_tb` SET `payment`='success' WHERE id = $id");
}

$user_info = mysqli_query($conn, "SELECT * FROM `master_user_tb` WHERE id='$id'");
$row = mysqli_fetch_assoc($user_info);


echo $row['payment'];



if($row['payment'] == "pending") {
    if($row['pack'] == "package 1") {
        echo "<script>window.location.href = 'upload.php?pack=1'</script>";
    }
    if($row['pack'] == "package 2") {
        echo "<script>window.location.href = 'upload.php?pack=2'</script>";
    }
    if($row['pack'] == "package 3") {
        echo "<script>window.location.href = 'upload.php?pack=3'</script>";
    }
    if($row['pack'] == "package 4") {
        echo "<script>window.location.href = 'upload.php?pack=4'</script>";
    }
    if($row['pack'] == "package 5") {
        echo "<script>window.location.href = 'upload.php?pack=5'</script>";
    }
    if($row['pack'] == "package 6") {
        echo "<script>window.location.href = 'upload.php?pack=6'</script>";
    }
    if($row['pack'] == "package 7") {
        echo "<script>window.location.href = 'upload.php?pack=7'</script>";
    }
    if($row['pack'] == "package 8") {
        echo "<script>window.location.href = 'upload.php?pack=8'</script>";
    }
    if($row['pack'] == "package 9") {
        echo "<script>window.location.href = 'upload.php?pack=9'</script>";
    }
    if($row['pack'] == "package 10") {
        echo "<script>window.location.href = 'upload.php?pack=10'</script>";
    }
    else{
    // echo "<script>window.location.href = '../../admin/dashboard/index.php';</>";

    }
}else {
// echo "<script>window.location.href = '../../admin/dashboard/index.php';</script>";

}





?>