<!DOCTYPE html>
<html>
<head>
</head>
<body>
<style style="text/css">
body{
 margin: 0;
 padding: 0;
 font-family: sans-serif;
 background: url(blog2.jpg);
 background-size:cover;
 background-height:cover;
}
.scroll-left {
height: 50px;
overflow: hidden;
position: relative;
}
.scroll-left p {
position: absolute;
width: 100%;
height: 100%;
margin: 0;
line-height: 50px;
text-align: center;
/* Starting position */
-moz-transform:translateX(100%);
-webkit-transform:translateX(100%);
transform:translateX(100%);
/* Apply animation to this element */
-moz-animation: scroll-left 10s linear infinite;
-webkit-animation: scroll-left 10s linear infinite;
animation: scroll-left 10s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes scroll-left {
0% { -moz-transform: translateX(100%); }
100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes scroll-left {
0% { -webkit-transform: translateX(100%); }
100% { -webkit-transform: translateX(-100%); }
}
@keyframes scroll-left {
0% {
-moz-transform: translateX(100%); /* Browser bug fix */
-webkit-transform: translateX(100%); /* Browser bug fix */
transform: translateX(100%);
}
100% {
-moz-transform: translateX(-100%); /* Browser bug fix */
-webkit-transform: translateX(-100%); /* Browser bug fix */
transform: translateX(-100%);
}
}
.scroll-left p{
 position: relative;
 top: 0;
 left: 0;
 padding: 10px 0;
 font-size: 45px;
 color: rgb(0,0,0);
}
.scroll-right{
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-50%);
 width: 400px;
 padding: 40px;
 background: rgba(60,179,113, 0.8);
 box-sizing: border-box;
 box-shadow: 0 15px 25px rgba(0,0,0,0.5);
 border-radius:10px;
}
.scroll-right .deepak img{
 position: relative;
 padding: 10px 0;
 height: 300px;
 width:320px;
}
</style>
<div class="scroll-left">
<p>WELCOME TO DS GUIDEBOOK</p>
</div>
<div class="scroll-right">
 <div class="deepak">
<img src="logo2.png">
</div>
<a href="login.php" class="btn btn-warning btn-block btn-lg">Lets enter</a>
</div>
</body>
</html>
