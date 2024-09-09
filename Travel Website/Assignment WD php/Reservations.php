<!DOCTYPE html>
<html>
<head>
<title>Purest Tourists</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}
header{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
    height: 100vh;
	background-size: cover;
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
	width: 150px;
	height: auto;
}
.main{
	max-width: 1200px;
	margin: auto;
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
            <img src="Logo Clear.png">
          </div>
           <ul>
             <li><a href="Home.php">Home</a></li>
             <li class="active"><a href="#">Reservation</a></li>
             <li><a href="Gallery.php">Gallery</a></li>
             <li><a href="Eco-Tourisim Shopping.php">Eco-Tourism</a></li>
             <li><a href="About Us.php">About Us</a></li>
             <li><a href="Contact Us.html">Contact Us</a></li>
           </ul>  
       </div>
      <div class="button">
           <a href="Hotel Information.php" class="btn">HOTEL</a>
           <a href="Transportation.php" class="btn">TRANSPORTATION</a>
           <a href="Restaurants Information.php" class="btn">RESTAURANTS</a>
</header>
</body>
</html>

