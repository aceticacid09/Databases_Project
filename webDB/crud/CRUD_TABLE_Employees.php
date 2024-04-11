<!-- php (part deleting data) -->
<?php 
    require_once('C:/xampp/htdocs/webDB/connection.php');

    if(isset($_REQUEST['delete_id'])) {
        $no = $_REQUEST['delete_id'];
        
        $select_stmt = $db->prepare("SELECT * FROM employee WHERE no = :o");
        $select_stmt->bindParam(':o', $no);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

        $delete_stmt = $db->prepare('DELETE FROM employee WHERE no = :o');
        $delete_stmt->bindParam(':o', $no);
        $delete_stmt->execute();

        header('Location:CRUD_TABLE_Employees.php');
    } 
?>

<!-- html website -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CRUD Employees Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<body style="background: linear-gradient(45deg, #3498db, #2ecc71); height: 100vh;">
	<nav class="navbar" style="background-color: #40978e;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<h2>ㅤTerm Project</h2>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"> </span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" style="color: #000;" aria-current="page"
							href="CRUD_TABLE_Car.php">ㅤㅤTable Car</a>
						<a class="nav-link active" style="color: #000;" aria-current="page"
							href="CRUD_TABLE_Customer.php">ㅤㅤTable Customer</a>
						<a class="nav-link active" style="color: #000;" aria-current="page"
							href="CRUD_TABLE_Employees.php">ㅤㅤTable Employees</a>
						<a class="nav-link active" style="color: #000;" aria-current="page"
							href="CRUD_TABLE_SecondhandCarshop.php">ㅤㅤTable Second hand Car Shop</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>

</body>

<style>
h2 {
		color: white;
	}

body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	

a.btn-edit{
		background: lightgreen;
		border: 2px solid white;
		padding: 10px 15px;
		margin: 20px;
		border-radius: 5px;
		text-decoration: none;
		transition-duration: 0.5s;
		float: right;
	}

a.btn-edit:hover{
	border-radius: 5px;
}

a.btn-delete{
	background: #ff7167;
	border: 2px solid white;
	padding: 10px 15px;
	margin: 20px;
	border-radius: 5px;
	text-decoration: none;
	transition-duration: 0.5s;
	float: right;
}

a.btn-delete:hover{
	border-radius: 5px;
}

</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employee</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="add_Employee_crud.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Person</span></a>					
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Last name</th>
                        <th>Education level</th>
						<th></th>
						<th>options</th>
					</tr>
				</thead>
				<tbody>
<!-- php (part showing data) -->
				<?php
						include "C:/xampp/htdocs/webDB/connection.php";
						$sql = "select * from employee";
						$result = $db->query($sql);
						if(!$result){
						die("Invalid query!");
						}
						while($row=$result->fetch(PDO::FETCH_ASSOC)){
						echo "
					<tr>
						<th>$row[no]</th>
						<td>$row[name]</td>
						<td>$row[lastname]</td>
						<td>$row[edulev]</td>
						<td>
							<a class='btn-edit' href='edit_Employee_crud.php?update_id=$row[no]'>Edit</a>
						</td>
						<td>
							<a class='btn-delete' href='?delete_id=$row[no]'>Delete</a>
						</td>
					</tr>
					";
						}
					?>

				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->

<!-- php (part adding data) -->
<?php 
    require_once('C:/xampp/htdocs/webDB/connection.php');

    if(isset($_REQUEST['btn_insert'])) {
        $name= $_REQUEST['txt_name'];
        $lastname = $_REQUEST['txt_lastname'];
        $edulev = $_REQUEST['txt_edulev'];


        if (empty($name)) {
            $errorMsg = "Please enter Name";
        } elseif (empty($lastname)){
            $errorMsg = "Please enter Last name";
        } elseif (empty($edulev)){
            $errorMsg = "Please enter Education level";
        } else {

            try {
                if (!isset($errorMsg)) {
                    $insert_stmt = $db->prepare("INSERT INTO employee(name,lastname,edulev) VALUES (:n, :ln, :el)");
                    $insert_stmt -> bindParam(':n', $name);
                    $insert_stmt -> bindParam(':ln', $lastname);
                    $insert_stmt -> bindParam(':el', $edulev);

    
                    if($insert_stmt->execute()) {
                        $insertMsg = "Insert Successfully...";
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }      
    }
?>

</body>
</html>