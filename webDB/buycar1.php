<?php 
    require_once('C:/xampp/htdocs/webDB/connection.php');

    if(isset($_REQUEST['submit'])) {
        $idcard= $_REQUEST['txt_idcard'];
        $name= $_REQUEST['txt_name'];
        $phone = $_REQUEST['txt_phone'];
        $address = $_REQUEST['txt_address'];


        if (empty($idcard)) {
            $errorMsg = "Please enter ID Card";
        } elseif (empty($name)){
            $errorMsg = "Please enter Name";
        } elseif (empty($phone)){
            $errorMsg = "Please enter Phonenumber";
        } elseif (empty($address)){
            $errorMsg = "Please enter address";
        } else {

            try {
                if (!isset($errorMsg)) {
                    $insert_stmt = $db->prepare("INSERT INTO customer(idcard,name,phone,address) VALUES (:id, :n, :p, :a)");
                    $insert_stmt -> bindParam(':id', $idcard);
                    $insert_stmt -> bindParam(':n', $name);
                    $insert_stmt -> bindParam(':p', $phone);
                    $insert_stmt -> bindParam(':a', $address);

    
                    if($insert_stmt->execute()) {
                        $insertMsg = "Insert Successfully...";
                        header("refresh:1;buy.php");
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }      
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Login and Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <video id="background-video" autoplay loop muted>
        <source src="/webDB/video/car_cinemtric.mp4" type="video/mp4">
    </video>


    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="pictures/m3.jpg">
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="#">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-id-card"></i>
                                <input type="text" name="txt_idcard" placeholder="Enter your ID card number" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="txt_name"  placeholder="Enter your Name" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-phone"></i>
                                <input type="text" name="txt_phone"  placeholder="Enter your Phone number" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-home"></i>
                                <input type="text" name="txt_address" placeholder="Enter your Address" required>
                            </div>
                            <div class="button input-box">
                                <input type="submit" name="submit" value="Sumbit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<style>
    /* Google Font Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }

    #background-video {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: -1;
    }

    .container {
        position: relative;
        max-width: 850px;
        width: 100%;
        background: #fff;
        padding: 40px 30px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        perspective: 2700px;
    }

    .container .cover {
        position: absolute;
        top: 0;
        left: 50%;
        height: 100%;
        width: 50%;
        z-index: 98;
        transition: all 1s ease;
        transform-origin: left;
        transform-style: preserve-3d;
    }

    .container #flip:checked~.cover {
        transform: rotateY(-180deg);
    }

    .container .cover .front,
    .container .cover .back {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
    }

    .cover .back {
        transform: rotateY(180deg);
        backface-visibility: hidden;
    }

    .container .cover::before,
    .container .cover::after {
        content: '';
        position: absolute;
        height: 100%;
        width: 100%;
        z-index: 12;
    }

    .container .cover::after {
        transform: rotateY(180deg);
        backface-visibility: hidden;
    }

    .container .cover img {
        position: absolute;
        height: 100%;
        width: 100%;
        object-fit: cover;
        z-index: 10;
    }

    .container .cover .text {
        position: absolute;
        z-index: 130;
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .cover .text .text-1,
    .cover .text .text-2 {
        font-size: 26px;
        font-weight: 600;
        color: #fff;
        text-align: center;
    }

    .cover .text .text-2 {
        font-size: 15px;
        font-weight: 500;
    }

    .container .forms {
        height: 100%;
        width: 100%;
    }

    .container .form-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .form-content .login-form,
    .form-content .signup-form {
        width: calc(100% / 2 - 25px);
    }

    .forms .form-content .title {
        position: relative;
        font-size: 24px;
        font-weight: 500;
        color: #333;
    }

    .forms .form-content .title:before {
        /* tetil */
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 25px;
        background: #2ce56a;
    }

    .forms .signup-form .title:before {
        width: 20px;
    }

    .forms .form-content .input-boxes {
        margin-top: 30px;
    }

    .forms .form-content .input-box {
        display: flex;
        align-items: center;
        height: 50px;
        width: 100%;
        margin: 10px 0;
        position: relative;
    }

    .form-content .input-box input {
        height: 100%;
        width: 100%;
        outline: none;
        border: none;
        padding: 0 30px;
        font-size: 16px;
        font-weight: 500;
        border-bottom: 2px solid rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .form-content .input-box input:focus,
    .form-content .input-box input:valid {
        border-color: #2ae876;
    }

    .form-content .input-box i {
        /* ไอคอน */
        position: absolute;
        color: #40978e;
        font-size: 17px;
    }

    .forms .form-content .text {
        font-size: 14px;
        font-weight: 500;
        color: #333;
    }

    .forms .form-content .text a {
        text-decoration: none;
    }

    .forms .form-content .text a:hover {
        text-decoration: underline;
    }

    .forms .form-content .button {
        color: #fff;
        margin-top: 40px;
    }

    .forms .form-content .button input {
        /* ปุ่ม */
        color: #fff;
        background: #40978e;
        border-radius: 6px;
        padding: 0;
        cursor: pointer;
        transition: all 0.4s ease;
    }

    .forms .form-content .button input:hover {
        background: #5b13b9;
    }

    .forms .form-content label {
        color: #5b13b9;
        cursor: pointer;
    }

    .forms .form-content label:hover {
        text-decoration: underline;
    }

    .forms .form-content .login-text,
    .forms .form-content .sign-up-text {
        text-align: center;
        margin-top: 25px;
    }

    .container #flip {
        display: none;
    }

    @media (max-width: 730px) {
        .container .cover {
            display: none;
        }

        .form-content .login-form,
        .form-content .signup-form {
            width: 100%;
        }

        .form-content .signup-form {
            display: none;
        }

        .container #flip:checked~.forms .signup-form {
            display: block;
        }

        .container #flip:checked~.forms .login-form {
            display: none;
        }
    }
</style>