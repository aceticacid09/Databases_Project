<?php 
    require_once('C:/xampp/htdocs/webDB/connection.php');

    if(isset($_REQUEST['update_id'])) {
         try {
            $no = $_REQUEST['update_id'];
            $select_stmt = $db->prepare("SELECT * FROM employee WHERE no = :o");
            $select_stmt->bindParam(':o', $no);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
         }  catch(PDOException $e){
            $e->getMessage();
         }
    }

    if(isset($_REQUEST['update'])) {
        $name_new= $_REQUEST['txt_name'];
        $lastname_new= $_REQUEST['txt_lastname'];
        $edulev= $_REQUEST['txt_edulev'];

        if(empty($no)) {
            $errorMsg = "Please Enter ID";
        } else {
            try {
                if(!isset($errorMsg)) {
                    $update_stmt = $db->prepare("UPDATE customer SET name = :n , lastname = :ln, edulev = :el WHERE no = :o");
                    $update_stmt->bindParam(':n', $name_new);
                    $update_stmt->bindParam(':ln', $lastname_new);
                    $update_stmt->bindParam(':el', $edulev_new);
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
                <label for="computer_id" class="col-sm-3 control-label"> Name </label>
                <div class="col-sm-6">
                    <input type="text" name="txt_name" class="form-control" value="<?php echo $name?>">
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <div class="row">
                <label for="computer_id" class="col-sm-3 control-label"> Last name </label>
                <div class="col-sm-6">
                    <input type="text" name="txt_lastname" class="form-control" value="<?php echo $lastname?>">
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <div class="row">
                <label for="computer_id" class="col-sm-3 control-label"> Education level </label>
                <div class="col-sm-6">
                    <input type="text" name="txt_edulev" class="form-control" value="<?php echo $edulev?>">
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <div class="col-md-12 mt-5">
                <input type="submit" name="update" class="btn btn-success" value="Update">
                <a href="CRUD_TABLE_Employees.php" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        

    </form>

    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>