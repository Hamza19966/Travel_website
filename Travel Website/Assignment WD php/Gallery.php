<!DOCTYPE html>
<html>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}
body {
  background-image: url('Langkawi background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.header {
  text-align: center;
  padding: 25px;
}
.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0 4px;
}


.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 100%;
  padding: 0 4px;
}

.column img {
  margin-top: 5px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
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
	width: 200px;
	height: auto;
}
</style>
<body>

<ul>
             <li class="active"><a href="Home.php">Home</a></li>
             <li><a href="Reservations.php">Reservation</a></li>
             <li><a href="#">Gallery</a></li>
             <li><a href="Eco-Tourisim Shopping.php">Eco-Tourism</a></li>
             <li><a href="About Us.php">About Us</a></li>
             <li><a href="#">Contact Us</a></li>
           </ul>  
         </div>
         <div class="main">
          <div class="logo">
           <img src="Logo clear.png">
          </div>
<!-- Header -->
<div class="header">
  <h1>Photos of langkawi</h1>
  <strong><p>One informational video is also there you can watch and experience it even before you go to Langkawi.</p></strong>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
  <iframe width="100%" height="9%" src="https://www.youtube.com/embed/Sj_lR_UTt-s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <img src="Sunset.jpg" style="width:100%">
    <img src="Sea view.jpg" style="width:100%">
    <img src="Mountain view.jpg" style="width:100%">
    <img src="Cable car 2.jpg" style="width:100%">
    <img src="Island.jpg" style="width:100%">
    <img src="Temple.jpg" style="width:100%">
    
  </div>
   <div class="column">
    <img src="Jungle.jpg" style="width:100%">
    <img src="Kedan.jpg" style="width:100%">
    <img src="Tropical island.jpg" style="width:100%">
    <img src="Boats.jpg" style="width:100%">
    <img src="Structure.jpg" style="width:100%">
    <img src="benches.jpg" style="width:100%">
   <img src="Sunset 2.jpg" style="width:100%">
   <img src="Temple.jpg" style="width:100%">
   <img src="Cable car.jpg" style="width:100%" height="9%">
  </div>>
   </div>
</body>
</html>