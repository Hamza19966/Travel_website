<!DOCTYPE html>
<html>
<head>
     <title>Purest Tourists</title>
     
     
<style>
*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}
header{
    background-image:linear-gradient(rgba(0,2,5,0.5),rgba(0,0,0,0.5));
    height: 100vh;
	background-position: center;
}
body {
  background-image: url('Langkawi background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}


ul{
	float: right;
	list-style-type: none;
	margin-top: 25px;
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: #fff;
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;
}
ul li a:hover{
	background-color:#fff;
	color:#000;
}
ul li.active a{
	background-color: #fff;
	color: #000;
}
.logo img{
	float: left;
	width: 250px;
	height: auto;
}
.main{
	max-width: 1200px;
	margin: left;
}
.title{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.title h1{
	color: #fff;
	font-size: 70px;
}
.button{
	position: absolute;
	top: 62%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.btn{
	border:1px solid #fff;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}
.btn:hover{
	background-color:#fff;
	color:#000;
}
</style>

</head>
<body>



     <header>
        <div class="main">
          <div class="logo">
           <img src="Logo clear.png">
          </div>
           <ul>
             <li class="active"><a href="#">Home</a></li>
             <li><a href="Reservations.php">Reservation</a></li>
             <li><a href="Gallery.php">Gallery</a></li>
             <li><a href="Eco-Tourisim Shopping.php">Eco-Tourism</a></li>
             <li><a href="About Us.php">About Us</a></li>
             <li><a href="#">Contact Us</a></li>
             <li><a href="Login Form.php">Login</a></li>
           </ul>  
         </div>
         <div class="title">
           <h1>PUREST TOURISTS</h1>
         </div>
   
      
  
</body>
</html>