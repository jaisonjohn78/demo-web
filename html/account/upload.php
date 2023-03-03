<?php
include '../includes/config.php';
include_once '../includes/package.php';
session_start();
$id = $_SESSION["user_id"];
$date = date('Y-m-d H:i:s');
// $_GET["pack"] = "";
// if ($_GET["pack"] == 1) {
//     $pack_rs = "199";
// }
// if ($_GET["pack"] == 2) {
//     $pack_rs = "399";
// }
// if ($_GET["pack"] == 3) {
//     $pack_rs = "799";
// }
// if ($_GET["pack"] == 4) {
//     $pack_rs = "1,599";
// }
// if ($_GET["pack"] == 5) {
//     $pack_rs = "3,199";
// }
// if ($_GET["pack"] == 6) {
//     $pack_rs = "6,399";
// }
// if ($_GET["pack"] == 7) {
//     $pack_rs = "12,799";
// }
// if ($_GET["pack"] == 8) {
//     $pack_rs = "25,599";
// }
// if ($_GET["pack"] == 9) {
//     $pack_rs = "51,199";
// }
// if ($_GET["pack"] == 10) {
//     $pack_rs = "1,02,399";
// }

$user_info = mysqli_query($conn, "SELECT * FROM `master_user_tb` WHERE id='$id'");
$row = mysqli_fetch_assoc($user_info);

$pack = $row['pack'];
$payAmount = get_package($pack);


if(isset($_POST['uploadfile'])){
    $filename = $_FILES["choosefile"]["name"];
    $tempname = $_FILES["choosefile"]["tmp_name"];  
    $folder = "upload/".$filename;
    if (move_uploaded_file($tempname, $folder)) {
      echo "<script>alert('Record uploaded successfully');</script>";

    }else{
      echo "<script>alert('Failed to upload image');</script>";

}
    $query = mysqli_query($conn, "INSERT INTO `payment`( `pack`, `amount`, `path`, `status`) VALUES ('$pack','$payAmount', '$folder', 0)");
    

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

p {
    margin: 0
}

.container {
    max-width: 900px;
    margin: 30px auto;
    background-color: #e8eaf6;
    padding: 35px;
}

.box-right {
    padding: 30px 25px;
    background-color: white;
    border-radius: 15px
}

.box-left {
    padding: 20px 20px;
    background-color: white;
    border-radius: 15px
}

.textmuted {
    color: #7a7a7a
}

.bg-green {
    background-color: #d4f8f2;
    color: #06e67a;
    padding: 3px 0;
    display: inlne;
    border-radius: 25px;
    font-size: 11px
}

.bg-red {
    background-color: #FF0000;
    color: #fff;
    padding: 3px 0;
    display: inline;
    border-radius: 25px;
    font-size: 11px
}

.p-blue {
    font-size: 14px;
    color: #1976d2
}

.fas.fa-circle {
    font-size: 12px
}

.p-org {
    font-size: 14px;
    color: #fbc02d
}

.h7 {
    font-size: 15px
}

.h8 {
    font-size: 12px
}

.h9 {
    font-size: 10px
}

.bg-blue {
    background-color: #dfe9fc9c;
    border-radius: 5px
}

.form-control {
    box-shadow: none !important
}

.card input::placeholder {
    font-size: 14px
}

::placeholder {
    font-size: 14px
}

input.card {
    position: relative
}

.far.fa-credit-card {
    position: absolute;
    top: 10px;
    padding: 0 15px
}

.fas,
.far {
    cursor: pointer
}

.cursor {
    cursor: pointer
}

.btn.btn-primary {
    box-shadow: none;
    height: 40px;
    padding: 11px
}

.bg.btn.btn-primary {
    background-color: transparent;
    border: none;
    color: #1976d2
}

.bg.btn.btn-primary:hover {
    color: #539ee9
}

@media(max-width:320px) {
    .h8 {
        font-size: 11px
    }

    .h7 {
        font-size: 13px
    }

    ::placeholder {
        font-size: 10px
    }
}
    </style>
</head>

<body>
    <form method="POST" action="" enctype="multipart/form-data">
    <div class="container">
        <div class="row m-0">
            <div class="col-md-7 col-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="row box-right">
                            <div class="col-md-8 ps-0 ">
                                <p class="ps-3 textmuted fw-bold h6 mb-0">TOTAL AMOUNT</p>
                                <p class="h1 fw-bold d-flex"> <span class="fas fa-rupee-sign textmuted pe-1 h6 align-text-top mt-1"></span><?php echo $payAmount; ?> <span class="textmuted"  style="vertical-align: bottom; font-size: 18px; padding-top: 10px">.00</span> </p>
                                <!-- <p class="ms-3 px-2 bg-green">Screenshot Uploaded successfuly</p> -->
                                <p class="ms-3 px-2 bg-red">Please wait for the approval</p>
                            </div>
                            <div class="col-md-4">
                                <p class="p-blue"> <span class="fas fa-circle pe-2"></span>Pending </p>
                                <p class="fw-bold mb-3"><span class="fas fa-rupee-sign pe-1"></span><?php echo $payAmount; ?> <span class="textmuted">.00</span> </p>
                                <p class="p-org"><span class="fas fa-circle pe-2"></span>On drafts</p>
                                <p class="fw-bold"><span class="fas fa-rupee-sign pe-1"></span>00<span class="textmuted">.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0 mb-4">
                    <p class="fw-bold h7">Payment Details</p>

                        <div class="box-right">
                            <div class="d-flex pb-2">
                                <p class="fw-bold h7"><span class="textmuted">oksbi@</span>easyearn</p>
                                <p class="ms-auto p-blue"> <span class=" bg btn btn-primary far fa-clone" ></span> </p>
                            </div>
                            <div class="bg-blue p-2">
                                <img src="../../assets/img/qr-code.jpeg" >
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0">
                        <div class="box-right">
                            <div class="d-flex mb-2">
                                <p class="fw-bold">Send Us Your Screenshot</p>
                                <p class="ms-auto textmuted"><span class="fas fa-times"></span></p>
                            </div>
                            <div class="d-flex mb-2">
                                <p class="h7">Upload Here</p>

                                <!-- <p class="ms-auto bg btn btn-primary p-blue h8"><span class="far fa-clone pe-2"></span>COPY PAYMENT LINK </p> -->
                            </div>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <p class="textmuted h8">Upload your Payment Screenshot</p> <input class="form-control" name="choosefile" type="file" placeholder="Upload your Screenshot here" onchange="loadFile(event)" required accept="image/*">
                                </div>
                                <div class="col-6">
                                    <p class="textmuted h8">Issused on</p> <input class="form-control" name="timestamp" type="text" value="<?php echo $date; ?>" readonly>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12 ps-md-5 p-0 ">
                <div class="box-left">
                    <p class="textmuted h8">Invoice</p>
                    <p class="fw-bold h7"><?php echo $row['name']; ?></p>
                    <p class="textmuted h8"><?php echo $row['email']; ?></p>
                    <p class="textmuted h8 mb-2"><?php echo $row['mobile']; ?></p>
                    <div class="h8">
                        <div class="row m-0 border mb-3">
                            <div class="col-6 h8 pe-0 ps-2">
                                <p class="textmuted py-2">Items</p> <span class="d-block py-2 border-bottom"><?php echo $pack ?></span> <span class="d-block py-2"></span>
                            </div>

                            <div class="col-3 p-0 text-center h8 border-end">
                                <p class="textmuted p-2">Price</p> <span class="d-block border-bottom py-2"><span class="fas fa-rupee-sign"></span><?php echo $payAmount; ?></span> 
                            </div>
                            <div class="col-3 p-0 text-center">
                                <p class="textmuted p-2">Total</p> <span class="d-block py-2 border-bottom"><span class="fas fa-rupee-sign"></span><?php echo $payAmount; ?></span> 
                            </div>
                        </div>
                        <div class="d-flex h7 mb-2">
                            <p class="">Total Amount</p>
                            <p class="ms-auto"><span class="fas fa-rupee-sign"></span><?php echo $payAmount; ?></p>
                        </div>
                        <div class="h8 mb-5">
                            <p class="textmuted">Once Payment is approved you will automatically redirect to Easyearn dashboard<br>*Approval may take 2-3 days also</p>
                        </div>
                    </div>
                    <div class="">
                        <p class="h7 fw-bold mb-1">Pay Using any UPI </p>
                        <p class="textmuted h8 mb-3">Scan the QR code or copy the UPI ID and pay using any UPI app</p>
                        <div class="form">
                                <img id="output" style="height:auto; width: 100%;">
                            
                                <input type="submit" name="uploadfile" value="Submit" class="btn btn-primary w-100 mt-3" id="submit" disabled>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </form>
    <script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	var submit = document.getElementById('submit');
	image.src = URL.createObjectURL(event.target.files[0]);
    submit.removeAttribute("disabled", "disabled");
};
</script>
<script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
        </script>
</body>

</html>