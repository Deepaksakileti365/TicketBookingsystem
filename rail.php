<?php include('railway1.php')?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="rail.css">
 <meta charset = "utf-8">
 <title>railway booking</title>
 <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
 <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
 <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

 <!-- Javascript -->
 <script>
 $(function() {
 $( "#datepicker-13" ).datepicker();
 $( "#datepicker-13" ).datepicker("show");
 $( "#datepicker" ).datepicker();
 $( "#datepicker" ).datepicker("show");
 });
 </script>
</head>
<body>
 <img src="logo2.png" alt="logo2" class="center">
 <div class ="box">
 <h2> BOOK YOUR TICKET</h2></br></br>
 <form action="" method="post">
 <div class="inputbox">
 <input type="text" name="initial" required="" >
 <label>STARTING POINT: </label>
 </div>
 <div class="inputbox">
 <input type="text"name="destination" required="">
 <label>DESTINATION: </label>
 </div>

 <div class="inputbox">
 <label>FROM:</label><br>
 <input type = "text" name="fromdate"id = "datepicker-13">
 </div>
 <div class="inputbox">
 <label>TO:</label><br>
 <input type="text" name="todate"id="datepicker">
 </div>

 <button type="submit" name="submit">submit</button>
 </form>
 </div>
</body>
</html>