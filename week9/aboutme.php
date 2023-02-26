<!DOCTYPE html>
<html>
	<head>
		<title> About Me </title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href='https://fonts.google.com/specimen/Poppins'>
			<link rel="icon" type="image/x-icon" href="img/icon.png">
			<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<ul>
			<li><a href="formvalidation.php">Form Validation</a></li>
			<li><a href="references.php">References</a></li>
			<li><a href="aboutme.php">About Me</a></li>
			<li><a href="profilepage.php">Profile Page</a></li>
		</ul>
		<script>
			function myFunction() {
			alert('Hello');
			}
		</script>
		<!--
		<div class="references">
			<h1 style="margin-left: auto; margin-right: auto"> TO BE FILLED IN </h1>
		</div>
		-->

	<!-- Container for the image gallery -->
	<div class="container">

	<!-- Full-width images with number text -->
	<div class="mySlides">
	  <div class="numbertext">1 / 6</div>
		<img src="img/photo1.jpg" style="width: 20%;">
	</div>
  
	<div class="mySlides">
	  <div class="numbertext">2 / 6</div>
		<img src="img/photo2.jpg" style="width: 20%">
	</div>
  
	<div class="mySlides">
	  <div class="numbertext">3 / 6</div>
		<img src="img/photo3.jpg" style="width: 20%">
	</div>
  
	<div class="mySlides">
	  <div class="numbertext">4 / 6</div>
		<img src="img/photo4.jpg" style="width: 20%">
	</div>
  
	<div class="mySlides">
	  <div class="numbertext">5 / 6</div>
		<img src="img/photo5.jpg" style="width: 20%">
	</div>
  
	<div class="mySlides">
	  <div class="numbertext">6 / 6</div>
		<img src="img/photo6.jpg" style="width: 20%">
	</div>
  
	<!-- Next and previous buttons -->
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
  
	<!-- Image text -->
	<div class="caption-container">
	  <p id="caption"></p>
	</div>
  </div> 
		<button onclick="myFunction()">Try it</button>
		<button onclick="myFunction()">Try it</button>
		<p id="demo"></p>
		<p>Click "Try it". Wait 3 seconds, and the page will alert "Hello".</p>
		<button onclick="setTimeout(myFunction, 3000);">Try it</button>
		<script>
			let slideIndex = 1;
				showSlides(slideIndex);

			// Next/previous controls
			function plusSlides(n) {
				showSlides(slideIndex += n);
				}

				// Thumbnail image controls
			function currentSlide(n) {
				showSlides(slideIndex = n);
				}

			function showSlides(n) {
				let i;
				let slides = document.getElementsByClassName("mySlides");
				let dots = document.getElementsByClassName("demo");
				let captionText = document.getElementById("caption");
					if (n > slides.length) {
						slideIndex = 1
					}
					if (n < 1) {
						slideIndex = slides.length
					}
					for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";
					}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
				slides[slideIndex-1].style.display = "block";
				dots[slideIndex-1].className += " active";
				captionText.innerHTML = dots[slideIndex-1].alt;
			} 

			function myFunction() {
					alert("This is the 'About Me' Section.");
			}
			function myFunction() {
				let text;
				let person = prompt("Please enter your name:", "Harry Potter");
				if (person == null || person == "") {
					text = "User cancelled the prompt.";
				} else {
					text = "Hello " + person + "! How are you today?";
				}
				document.getElementById("demo").innerHTML = text;
			}
			function myFunction() {
				alert('Hello');
			}
		</script>
	</body>
</html>