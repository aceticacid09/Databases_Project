<?php 
    require_once('connection.php');

    if(isset($_REQUEST['update_id'])) {
         try {
            $Car_ID = $_REQUEST['update_id'];
            $select_stmt = $db->prepare("SELECT * FROM car WHERE Car_ID = :c");
            $select_stmt->bindParam(':c', $Car_ID);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
         }  catch(PDOException $e){
            $e->getMessage();
         }
    }

    if(isset($_REQUEST['update_Car_ID'])) {
        $Car_Model_new= $_REQUEST['txt_Car_Model'];
        $Car_Price_new= $_REQUEST['txt_Car_Price']; 

        if(empty($Car_ID)) {
            $errorMsg = "Please Enter Car ID";
        } else {
            try {
                if(!isset($errorMsg)) {
                    $update_stmt = $db->prepare("UPDATE car SET  Car_Model = :cm, Car_Price = :cp  WHERE Car_ID = :c");
                    $update_stmt->bindParam(':cm', $Car_Model_new);
                    $update_stmt->bindParam(':cp', $Car_Price_new);
                    $update_stmt->bindParam(':c', $Car_ID);


                    if($update_stmt->execute()) {
                        $updateMsg = "Record update successfully...";
                        header("refresh:2;CRUD_TABLE_Car.php");
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
    <title>Car</title>

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
                <label for="computer_id" class="col-sm-3 control-label"> Car_Model </label>
                <div class="col-sm-6">
                    <input type="text" name="txt_Car_Model" class="form-control" value="<?php echo $Car_Model?>">
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <div class="row">
                <label for="computer_id" class="col-sm-3 control-label"> Car_Price </label>
                <div class="col-sm-6">
                    <input type="text" name="txt_Car_Price" class="form-control" value="<?php echo $Car_Price?>">
                </div>
            </div>
        </div>
        <div class="form-group text-center">
            <div class="col-md-12 mt-5">
                <input type="submit" name="update_Car_ID" class="btn btn-success" value="Update">
                <a href="CRUD_TABLE_Customer.php" class="btn btn-danger">Cancel</a>
            </div>
        </div>

    </form>

    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>