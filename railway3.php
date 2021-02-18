<!DOCTYPE html>
<html>
<head>
 <title>trains details</title>
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
 <!-- Brand -->
 <a class="navbar-brand" href="#">DS GUIDEBOOK</a>
 <!-- Toggler/collapsibe Button -->
 <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#collapsibleNavbar">
 <span class="navbar-toggler-icon"></span>
 </button>
 <!-- Navbar links -->
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
 <ul class="navbar-nav ml-auto">
 <li class="nav-item">
 <a class="nav-link" href="#">TRAIN DETAILS</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#">HELP</a>
 </li>
 </ul>
 </div> 
</nav>
<?php
require 'config.php';
$sql="SELECT * FROM trainlist2";
$result=mysqli_query($db,$sql);
?>
<div class="container">
 <div class="row">
 <?php
 while($row=mysqli_fetch_array($result))
 {
 ?>
 <div class="col-lg-4 mt-3 mb-3">
 <div class="card-deck">
 <div class="card border-info p-2">
 <img src="<?=$row['Trainimage']; ?>" class="card-img-top" height="320">
 <h5 class="card-title">train name : <?= $row['Trainname']; ?></h5>
 <h3>trainnumber: <?= number_format($row['Trainnumber']); ?></h3>
 <h3>cost: <?= number_format($row['cost']); ?></h3>
 <a href="order2.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-block btnlg">book ticket</a>
 </div>
 </div>
 </div>
 <?php } ?>
 </div>
</div>
</body>
</html>
