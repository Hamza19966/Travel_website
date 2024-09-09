<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}


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
</style>
<ul>
             <li class="active"><a href="Home.php">Home</a></li>
             <li><a href="Reservations.php">Reservation</a></li>
             <li><a href="Gallery.php">Gallery</a></li>
             <li><a href="Eco-Tourisim Shopping.php">Eco-Tourism</a></li>
             <li><a href="About Us.php">About Us</a></li>
             <li><a href="#">Contact Us</a></li>
           </ul>  



<body class="w3-light-grey">
<div class="w3-content" style="max-width:1400px">


<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Top Restaurants in Langkawi
  </b></h1>
  <p>Welcome to the webpage of hotels </p>
</header>


<div class="w3-row">
<div class="w3-col l8 s12">
  <div class="w3-card-4 w3-margin w3-white">
    <img src="Gulai.jpg" style="width:100%">
    <div class="w3-container">
      <h3><b>1. The Gulai House</b></h3>
      <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>The Gulai House at The Datai Langkawi is one of Langkawi’s best places to enjoy authentic Malay and Indian dishes whilst being surrounded by a 10 million year-old rainforest. Built in the form of a traditional wooden village house, the award-winning eatery is divided into several al fresco dining sections and decorated with candle-lit alcoves, organza drapes, as well as low tables and comfortable cushions placed on hand-woven mats.

Great for sampling a variety of signature Malay dishes in a single sitting, The Gulai House’s sampling platter comprises of otak-otak (grilled fish and prawns wrapped in banana leaf), sate ‘gamelan’ (beef and chicken satay served with peanut sauce), ketam goreng ranggup (deep-fried soft shell crab), and kerabu ayam (chicken mango salad).</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
        </div>
        <div class="w3-col m4 w3-hide-small">
          
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="w3-card-4 w3-margin w3-white">
  <img src="Planters.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>2. The Planter's</b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>The Planter’s at The Danna Langkawi overlooks the resort’s infinity pool and Pantai Kok Beach, featuring a classy colonial interior, excellent service and a live pianist in the evening. Located on the ground floor, this upmarket restaurant offers an extensive menu of Mediterranean, European-inspired and Malaysian cuisine. Vegetarian and gluten-free options are also available for those with specific dietary needs. Highly recommended are the falafel (with tahini yoghurt and pickle radish salad), premium Australian beef tenderloin (with chive and sour cream potato mash, green beans, mesclun, hollandaise and forest mushroom sauce) and sweet banana porridge (served with homemade coconut lime ice cream).</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
        </div>
        <div class="w3-col m4 w3-hide-small">
         
        </div>
      </div>
    </div>
  </div>
</div>
<div class="w3-col l4">
  <div class="w3-card w3-margin w3-margin-top">
  <img src="Cliff.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>3. The Cliff Langkawi </b></h4>
      <p>The Cliff Langkawi is certainly a winner when it comes to fine dining with unbeatable views of the Andaman Sea. Set atop a cliff at the end of Pantai Cenang, this iconic Langkawi restaurant has an open-air indoor dining area with modern furnishings, white tablecloths, warm lighting and classy décor. The Cliff Langkawi’s food offerings consist of authentic Malay and western dishes that are rich in flavour, with standouts including traditional slow-cooked beef (RM54), crab cannelloni (RM37), pan-seared foie gras (RM49) and lamb rack served with perchik sauce (RM75). </p>
<div class="w3-col m8 s12">
        </div>
    </div>
  </div><hr>
  <div class="w3-col 25">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="Pavilion.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>4. The Pailion</b></h4>
      <p>The Pavilion, an award-winning establishment at The Datai Langkawi, is arguably the best place for authentic Thai cuisine on the island. Perched high in a rainforest canopy, diners are treated to classic Thai music in the background, warm lighting, white orchids and the flickering light of candles on each table. Standout dishes here include the stir-fried beef with chilli, garlic, and Thai basil leaves (RM98), tom yam goong (RM34), and steamed snapper fish with lemongrass, chilli, and lime. Guests of the five-star resort can also hone their culinary skills and enjoy a complimentary glass of wine as The Pavilion hosts cooking classes every Friday. </p>
<div class="w3-col m8 s12">
        </div>
    </div>
  </div><hr> 
<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <p>If you want to Book an restaurant. Kindly please register.</p>
  <strong><a href="Restaurant Registration.php" class="btn">Register</a></strong>
          
        
 
</footer>

</body>
</html>
