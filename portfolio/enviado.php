<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Benjamin Tarache - Portfolio</title>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@300;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
	<link rel="stylesheet" href="style.css">


	<!-- Fav and touch icons -->
    <link href="images/favicon.jpg" rel="shortcut icon" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.jpg">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.jpg">
</head>

	
<body>

	<section id="contact" class="contact">
		
		<div class="contentc">
			<h2 class="title blanco">Great!</h2>
			
		</div>
		
		<div class="containerc">
			

			
			<div class="contactform">
				<div class="enviado-wrap">
					<a href="index.php">
						<img src="images/check2.png" class="img-fluid">
					</a>
					<h4 class="sep-1 tcenter mg-b">Your message has been sent</h4>
					<a href="index.php"><p class="sep-1 tcenter">Back to main page</p></a>
				</div>	
			</div>
		</div>
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.min.js"></script>
	<script type="text/javascript" src="js/lightslider.js"></script>
	<script src="js/vanilla-tilt.min.js"></script>
	<script src="js/jquery.smoove.js"></script>
	<script src="js/script.js" type="text/javascript"></script>

	<script type="text/javascript">
		function imgSlider(anything){
			document.querySelector('.pepsi').src = anything;
		}
		function changeBgColor(color){
			const sec = document.querySelector('.sec');
			sec.style.background = color
		} 


		function menuToggle(){
			const toggleMenu = document.querySelector('.toggleMenu');
			const navigation = document.querySelector('.navigation');
			toggleMenu.classList.toggle('active'); 
			navigation.classList.toggle('active');
		}
	</script>
	<script type="text/javascript">
		window.addEventListener("scroll", function (){
			var header = document.querySelector("header");
			header.classList.toggle("sticky", window.scrollY > 300);
		});
	</script>
	<script>
		
		$('.blockk').smoove({offset: '20%'});

	</script>

	<script>
		gsap.registerPlugin(ScrollTrigger);
		gsap.to('progress',{
			value: 100,
			ease: 'none',
			scrollTrigger: {scrub: 0.3}
		})
	</script>

	
	<script type="text/javascript">
		VanillaTilt.init(document.querySelectorAll(".box"), {
			max: 25,
			speed: 400
		});
	</script>
 <script>
      $('header>ul.active>li>a').on('click', function(){
      $('.toggleMenu.active').collapse('hide');
    });
    </script>

</body>
</html>