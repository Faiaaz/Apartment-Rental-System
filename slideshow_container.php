<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="slideshow-container">

		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="apartment_images/1491937269Modern_Apartment_Design_Green_Walls_by_SVOYA_on_architecture_beast-1.jpg" style="width:100%">
		  <div class="my-cap-text">
		    <!-- ... btn 1 ... -->
		  	 <div class="my-btn">
				 <a href="available_flats.php">Available Flats</a>

		  	 </div>
		  	 <!-- ... btn 2 .... -->
		  	 <div class="my-btn2">
				 <a href="post_ad.php"> Post Ad</a>

		  	 </div>

		  </div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="apartment_images/1491974892An-orb-fireplace-and-hot-tub-flank-the-cool-pool.jpg" style="width:100%">
		  <div class="my-cap-text">
		  		 <!-- ... btn 1 ... -->
		  	 <div class="my-btn">
				 <a href="available_flats.php">Available Flats</a>

		  	 </div>
		  	 <!-- ... btn 2 .... -->
		  	 <div class="my-btn2">
				 <a href="post_ad.php"> Post Ad</a>

		  	 </div>

		  </div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="apartment_images/149193688147708583.jpg" style="width:100%">
		  <div class="my-cap-text">
		  	  <!-- ... btn 1 ... -->
		  	 <div class="my-btn">
				 <a href="available_flats.php">Available Flats</a>

		  	 </div>
		  	 <!-- ... btn 2 .... -->
		  	 <div class="my-btn2">
				 <a href="post_ad.php"> Post Ad</a>

		  	 </div>
		  	
		  </div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	</div>

	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
	</script>
