<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 30px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: #000;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
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
body {
  background-image: url('Langkawi background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<ul>
             <li class="active"><a href="Home.php">Home</a></li>
             <li><a href="Reservations.php">Reservation</a></li>
              <li><a href="Gallery.php">Gallery</a></li>
             <li><a href="Eco-Tourisim Shopping.php">Eco-Tourism</a></li>
             <li><a href="About Us.php">About Us</a></li>
             <li><a href="#">Contact Us</a></li>
           </ul>  
         </div>
         
          <div class="main">
          <div class="logo">
           <img src="Logo clear.png">
          </div>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Perteep.jpg" alt="Perteep Naidu" width="100%" height="503" style="width:100%">
      <div class="container">
        <h2>Perteep Naidu</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Maaz.jpg" alt="Maaz Bin Khalid" width="100%" height="503" style="width:100%">
      <div class="container">
        <h2>Maaz Bin Khalid</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
       
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="SRC4.png" alt="John" width="100%" height="503" style="width:100%">
      <div class="container">
        <h2>Muhammad Fahad</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
