<?php 
    require_once('C:/xampp/htdocs/webDB/connection.php');

    if(isset($_REQUEST['submit'])) {
        $Car_Model = $_REQUEST['txt_Car_Model'];
        $Car_Price = $_REQUEST['txt_Car_Price'];
        $Name = $_REQUEST['txt_Name'];

          if (empty($Car_Model)){
            $errorMsg = "Please enter Car_Model";
        } elseif (empty($Car_Price)){
            $errorMsg = "Please enter Car_Price";
          } elseif (empty($Name)){
            $errorMsg = "Please enter Name";
        } else {

            try {
                if (!isset($errorMsg)) {
                    $insert_stmt = $db->prepare("INSERT INTO car(Car_Model,Car_Price) VALUES (:a, :p)");
                    $insert_stmt -> bindParam(':a', $Car_Model);
                    $insert_stmt -> bindParam(':p', $Car_Price);

                    if($insert_stmt->execute()) {
                        $insertMsg = "Insert Successfully...";
                        header("refresh:2;index.php");
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            try {
              if (!isset($errorMsg)) {     
                  $insert_stmt = $db->prepare("INSERT INTO Stock (Name) VALUES (:n)");
                  $insert_stmt -> bindParam(':n', $Name);
                
                  if($insert_stmt->execute()) {
                      $insertMsg = "Insert Successfully...";
                      header("refresh:2;index.php");
                  }
              }
          } catch (PDOException $e) {
              echo $e->getMessage();
          }
        }     
    }
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Sell your car</title>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>
    <video id="background-video" autoplay loop muted>
        <source src="/webDB/video/car_cinemtric.mp4" type="video/mp4">
      </video>
      
      <div class="w3-top">
        <div class="w3-bar" id="myNavbar">
          <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
          </a>
          <a href="/webDB/index.php" class="w3-bar-item w3-button" style="font-family: 'Sarabun', sans-serif; font-size: larger;"><i>AUTO CAR</i></a>
          <a href="/webDB/buy.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Buy new car</a>
          <a href="/webDB/sell.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Sell your car</a>
          <a href="/webDB/apply.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Apply job</a>
          <a href="/webDB/contact.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> Contact</a>
          
        </div>
    
    <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="/webDB/buy.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Buy new car</a>
        <a href="/webDB/sell.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Sell your car</a>
        <a href="/webDB/apply.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Apply job</a>
        <a href="/webDB/contact.html" class="w3-bar-item w3-button" onclick="toggleFunction()">Contact</a>
      </div>
    </div>


    <div class="container">
      <div class="title">Registration</div>
      <div class="content">
        <form action="#">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Name</span>
              <input type="text"name = "txt_Name" placeholder="Enter your name" required />
            </div>
            <div class="input-box">
              <span class="details">Lastname</span>
              <input type="text"name = "txt_Lastname" placeholder="Enter your lastname" required />
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text"name = "txt_Email" placeholder="Enter your email" required />
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text"name = "txt_Phone_Number" placeholder="Enter your number" required />
            </div>
            <div class="input-box">
              <span class="details">Car Model</span>
              <input type="text"name = "txt_Car_Model" placeholder="Enter your Car model" required />
            </div>
            <div class="input-box">
              <span class="details">Car Price</span>
              <input
                type="text" name = "txt_Car_Price" placeholder="Price at which you want to sell the car"required/>
            </div>
          </div>
          <div class="gender-details">
            <input type="radio" name="gender" id="dot-1" />
            <input type="radio" name="gender" id="dot-2" />
            <input type="radio" name="gender" id="dot-3" />
            <span class="gender-title">Gender</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Female</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Prefer not to say</span>
              </label>
            </div>
          </div>
          <div class="button input-box">
              <input type="submit" name="submit" value="Sumbit">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
  }

  #myNavbar {
    color: white;
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
    max-width: 1000px;
    width: 100%;
    background-color: #fff;
    opacity: 0.9;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
  }

  .container .title {
    font-size: 25px;
    font-weight: 500;
    position: relative;
  }

  .container .title::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    border-radius: 5px;
    background: linear-gradient(135deg,#037266, #40978e, #85bcb6);
  }

  .content form .user-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
  }

  form .user-details .input-box {
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
  }

  form .input-box span.details {
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
  }

  .user-details .input-box input {
    height: 45px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
  }

  .user-details .input-box input:focus,
  .user-details .input-box input:valid {
    border-color: #9b59b6;
  }

  form .gender-details .gender-title {
    font-size: 20px;
    font-weight: 500;
  }

  form .category {
    display: flex;
    width: 80%;
    margin: 14px 0;
    justify-content: space-between;
  }

  form .category label {
    display: flex;
    align-items: center;
    cursor: pointer;
  }

  form .category label .dot {
    height: 18px;
    width: 18px;
    border-radius: 50%;
    margin-right: 10px;
    background: #d9d9d9;
    border: 5px solid transparent;
    transition: all 0.3s ease;
  }

  #dot-1:checked ~ .category label .one,
  #dot-2:checked ~ .category label .two,
  #dot-3:checked ~ .category label .three {
    background: #9b59b6;
    border-color: #d9d9d9;
  }

  form input[type="radio"] {
    display: none;
  }

  form .button {
    height: 45px;
    margin: 35px 0;
  }

  form .button input {
    height: 100%;
    width: 100%;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: linear-gradient(135deg, #037266, #40978e, #85bcb6);
  }

  form .button input:hover {
    /* transform: scale(0.99); */
    background: linear-gradient(-135deg,#037266, #40978e, #85bcb6);
  }

  @media (max-width: 584px) {
    .container {
      max-width: 100%;
    }

    form .user-details .input-box {
      margin-bottom: 15px;
      width: 100%;
    }

    form .category {
      width: 100%;
    }

    .content form .user-details {
      max-height: 300px;
      overflow-y: scroll;
    }

    .user-details::-webkit-scrollbar {
      width: 5px;
    }
  }

  @media (max-width: 459px) {
    .container .content .category {
      flex-direction: column;
    }
  }
</style>
