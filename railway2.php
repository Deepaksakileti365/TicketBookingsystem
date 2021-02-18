<?php
include('config.php');
$msg="";
if(isset($_POST['submit'])){
$Trainnumber=mysqli_real_escape_string($db,$_POST['Trainnumber']);
$Trainname=mysqli_real_escape_string($db,$_POST['Trainname']);
$cost=mysqli_real_escape_string($db,$_POST['cost']);
$target_dir="image/";
$target_file=$target_dir.basename($_FILES['Trainimage']["name"]);
move_uploaded_file($_FILES['Trainimage']["tmp_name"],$target_file);
}
if(empty($Trainnumber))
{
array_push($errors,"Trainnumber is required");
}
if(empty($Trainname)) {
array_push($errors,"Trainname is required");
}
if(empty($cost)) {
array_push($errors,"cost is required");
}
if(empty($target_file)){
array_push($errors,"image is required");
}
if(count($errors) == 0)
{
$sql="INSERT INTO trainlist2(Trainnumber,Trainname,cost,Trainimage)
VALUES('$Trainnumber','$Trainname','$cost','$target_file')";
mysqli_query($db,$sql);
if(mysqli_query($db,$sql))
{
$msg="train details added to the database";
}
else{
$msg="Failed to add the details";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>TRAINS LISTS</title>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="Ehttps://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-info">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 bg-light mt-5 rounded">
<h2 class= "text-center p-2"> Train Information</h2>
<form action="" method="post" class="p-2" id="form-box"
enctype="multipart/form-data">
<div class="form-group">
<input type="text" name="Trainnumber" class="form-control"
placeholder="Train number" required="">
</div>
<div class="form-group">
<input type="text" name="Trainname" class="form-control"
placeholder="Train name" required="">
</div>
<div class="form-group">
<input type="text" name="cost" class="form-control"
placeholder="cost" required="">
</div>
<div class="form-group">
<div class="custom-file">
<input type="file" name="Trainimage" class="customfile-input" id="customFile" required="">
<label for="customFile" class="custom-file-label">train
image</label>
</div>
</div>
<div class="form-group">
<input type="submit" name="submit" class="btn btn-danger
btn-block" value="Add">
</div>
<div class="form-group"><?= $msg; ?></h4>
</div>
</form>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 mt-3 bg-light rounded">
<a href="rail3.php" class="btn btn-warning btn-block btn-lg">Go to trains
list</a>
</div>
</div>
</div>
</body>
</html>