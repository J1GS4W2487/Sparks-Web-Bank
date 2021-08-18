<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <script src="script.js">
      $('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    </script>
    <title>Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
 

<header class="w3-display-container w3-wide" id="bank1">
    <img class="w3-image" src="img/sraa.jpg" alt="Fashion Blog" width="1270" height="544">
    <div class="w3-display-left w3-padding-large">
      
    </div>
  
<div id="demo" class="carousel slide" data-ride="carousel">


<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>

</ul>

<div class="carousel-inner">


  <div class="carousel-item active ">
  <a href="createuser.php"> <button type="button" class="b1">CREATE YOUR ACCOUNT !</button></a>
    <img src="img/a1aa.jpg"  width="1290" height="500">
    
  </div>
  <div class="carousel-item">
  <a href="transfermoney.php"> <button type="button" class="b1">TRANSFER MONEY !</button></a>
    <img src="img/amay.jpg"  width="1290" height="500">
  
  </div>
  <div class="carousel-item">
   <a href="transactionhistory.php"> <button type="button" class="b1">CHECK TRANASCTIONS !</button></a>
    <img src="img/ha.png"  width="1280" height="500">
</div>
  
</div>



<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>




  <section id="jig1" class="section counter">
	<div class="container" >
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h3 class="mb-0" color="white"><span class="counter-stat font-weight-bold" id="a1">1,00,000+</span></h3>
					<p class="text-muted">SECURE ACCOUNTS</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h3 class="counter-count"><span class="counter-stat font-weight-bold" id="a1"> 70,000+</span></h3>
					<p class="text-muted">HAPPY BANKERS</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<h3 class="mb-0"><span class="counter-stat font-weight-bold" id="a1">10</span></h3>
					<p class="text-muted">ACTIVE COUNTRIES</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center">
					<h3 class="mb-0"><span class="counter-stat font-weight-bold" id="a1">90+
          </span></h3>
					<p class="text-muted">BANKING AWARDS </p>
				</div>
			</div>
		</div>
	</div>
</section>

<button type="button" class="b2">OUR BRANCHES</button></a>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="img/SINGAPORE.jpg"  width="1290" height="500">
    </div>
    <div class="carousel-item">
    <img src="img/BEST.jpg"  width="1290" height="500">
    </div>
    <div class="carousel-item">
    <img src="img/USA.jpg"  width="1290" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


      <footer class="hi">
        <p> <b>JIGNESH SHAILESH MATHURE</b> | GRIP21 The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>