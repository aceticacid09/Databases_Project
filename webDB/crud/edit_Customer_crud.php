<?php 
    require_once('C:/xampp/htdocs/webDB/connection.php');

    if(isset($_REQUEST['update_id'])) {
         try {
            $no = $_REQUEST['update_id'];
            $select_stmt = $db->prepare("SELECT * FROM customer WHERE no = :o");
            $select_stmt->bindParam(':o', $no);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
         }  catch(PDOException $e){
            $e->getMessage();
         }
    }

    if(isset($_REQUEST['update'])) {
        $idcard_new= $_REQUEST['txt_idcard'];
        $name_new= $_REQUEST['txt_name'];
        $phone_new= $_REQUEST['txt_phone'];
        $address_new= $_REQUEST['txt_address'];

        if(empty($idcard)) {
            $errorMsg = "Please Enter ID Card";
        } else {
            try {
                if(!isset($errorMsg)) {
                    $update_stmt = $db->prepare("UPDATE customer SET idcard = :idc , name = :n, phone = :p, address = :a WHERE no = :o");
                    $update_stmt->bindParam(':n', $name_new);
                    $update_stmt->bindParam(':p', $phone_new);
                    $update_stmt->bindParam(':a', $address_new);
                    $update_stmt->bindParam(':idc', $idcard_new);
                    $update_stmt->bindParam(':o', $no);


                    if($update_stmt->execute()) {
                        $updateMsg = "Record update successfully...";
                        header("refresh:2;CRUD_TABLE_Customer.php");
                    }
                }
            } catch(PDOException $e){
                echo $e-> getMessage();
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>

    <link rel="stylesheet" href="boostrap.css">
</head>

<style>
     @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;0,700;1,100&display=swap');

* {
  font-family: 'Kanit', sans-serif;
}

body {
    background-color: #40978e;
}

div.display-3 {
    font-weight: bold;
}
</style>

<body>

    <div class="container">
    <div class="display-3 text-center"> Edit Page</div>

    <?php 
        if(isset($errorMsg)) {   
    ?>
        <div class="alert alert-danger">
            <strong>Wrong! <?php echo $errorMsg; ?></strong>
        </div>
    <?php } ?>

    <?php 
        if(isset($updateMsg)) {   
    ?>
        <div class="alert alert-success">
            <strong>Success! <?php echo $updateMsg; ?></strong>
        </div>
    <?php } ?>

    <form method="post" class="form-horizontal mt-5">

        <div class="form-group text-center">
            <div class="row">
                <label for="computer_id" class="col-sm-3 control-label"> ID Card </label>
                <div class="col-sm-6">
                    <input type="text" name="txt_idcard" class="form-control" value="<?php echo $idcard?>">
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <div class="row">
                <label for="computer_id" class="col-sm-3 control-label"> Name </label>
                <div class="col-sm-6">
                    <input type="text" name="txt_name" class="form-control" value="<?php echo $name?>">
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <div class="row">
                <label for="computer_id" class="col-sm-3 control-label"> Phone number </label>
                <div class="col-sm-6">
                    <input type="text" name="txt_phone" class="form-control" value="<?php echo $phone?>">
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <div class="row">
                <label for="computer_id" class="col-sm-3 control-label"> Address </label>
                <div class="col-sm-6">
                    <input type="text" name="txt_address" class="form-control" value="<?php echo $address?>">
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <div class="col-md-12 mt-5">
                <input type="submit" name="update" class="btn btn-success" value="Update">
                <a href="CRUD_TABLE_Customer.php" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        

    </form>

    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>