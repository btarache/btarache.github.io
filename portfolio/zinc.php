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
	<progress max="100" value="0"></progress>
	
	<section id="intro" class="sec">
		<div class="container">
		<header>
			<a href="#intro"><img src="images/logo-2.png" class="logo"></a>
			<div class="toggleMenu collapse navbar-collapse" onclick="menuToggle();"></div>
			<ul class="navigation">
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</header>
		<div class="content-intro">
			<div class="textBox">
				<img src="images/letters.svg" class="img-fluid">
			</div>
			<div class="imgBox">
				<img src="images/mane3.png" class="pepsi">
			</div>
		</div>
		<ul class="thumb">
			<li><img src="images/mane3.png" onclick="imgSlider('images/mane3.png');changeBgColor('#ffcc00')"></li>
			<li><img src="images/mane2.png" onclick="imgSlider('images/mane2.png');changeBgColor('#01c1e6')"></li>
			<li><img src="images/manequin.png" onclick="imgSlider('images/manequin.png');changeBgColor('#4939d0 ')"></li>

		</ul>
		<ul class="sci">
			<li><a href="esp.php"><img src="images/f-es.png" alt="Español" title="Español"></a></li>
			<li><a href="index.php"><img src="images/f-uk.png" alt="English" title="English"></a></li>
		</ul>
		</div>
	</section>

	<section id="about" class="about">
		<div class="about-col-1">
			<h2 class="title blanco blockk" data-move-x="-200px" data-rotate="45deg">About me</h2>
			<h4 class="blockk" data-rotate-y="270deg" data-move-v="60%">Computer Engineer, with experience as Web Developer<br> Frontend Developer</h4>	
		</div>
		<div class="about-col-2">

<div class="arrow-right"></div>
			<div class="blockk" data-rotate-y="270deg" data-move-x="150%">
				<p>I'm a web developer living in Chicago, USA. I spend my days in many different areas of web development from backend programming (PHP for WordPress) to frontend engineering (HTML, CSS, and jQuery/Javascript). I’m extremely passionate about web development.</p><br>
				<p>Bringing forth expertise in design, installation, testing and maintenance of web systems. Equipped with a diverse and promising skill-set. Web sites design that engage users and provide a positive user experience, working within a Content Management System (CMS), maintaining the appearance of websites by enforcing content standards.</p>	
			</div>	
		</div>	
	</section>


	


	<section id="services" class="services">
	<h2 class="title blanco blockk tcenter">Services</h2>	
		<div class="container-portfolio">
			<div class="box blockk" data-move-x="-500px" data-rotate="90deg">
				<h2 class="name">Web Development</h2>
				<button onclick="document.getElementById('id01').style.display='block'" class="buy">Web Development</button>
				<div class="circle"></div>
				<img src="images/web.png" class="product" width="200px">
			</div>

			<div class="box blockk" data-move-y="200px" data-move-x="-200px" data-rotate="45deg">
				<h2 class="name">Responsive Design</h2>
				<button onclick="document.getElementById('id02').style.display='block'" class="buy">Responsive Design</button>
				<div class="circle"></div>
				<img src="images/responsive.svg" class="product" width="200px">
			</div>

			<div class="box blockk" data-move-x="500px" data-rotate="90deg">
				<h2 class="name">WordPress CMS</h2>
				<button onclick="document.getElementById('id03').style.display='block'" class="buy">WordPress Development</button>
				<div class="circle"></div>
				<img src="images/wordpress.svg" class="product" width="200px">
			</div>

		</div>
		


  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
     	<span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Web Development</h2>
      		<div class="w3-container">
	          <p>Your website is built from the ground up according to your technical specifications, keeping you informed & involved throughout the process.</p>
	        </div>
    </div>
  </div>

    <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
     	<span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Responsive Design</h2>
      		<div class="w3-container">
	          <p>Responsive web design (RWD) means you only need one site for all devices which is far cheaper than developing and maintaining multiple sites.</p>
	          
	        </div>
    </div>
  </div>

    <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
     	<span onclick="document.getElementById('id03').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>WordPress Development</h2>
      		<div class="w3-container">
	          <p>A dynamic content management system is at the heart of every good website, making it easy to keep your site up-to-date, without any technical knowledge or HTML required. WordPress has a simple, intuitive administration interface and we strip out all the clutter to ensure updating your site is child's play.</p>
	         
	        </div>
    </div>
  </div>

	</section>


		<section class="process">
		<div class="container">
			<h2 class="title blanco blockk tcenter">Process</h2>	
			<div class="pro-elements">
				
				<div class="element-even ordenado blockk" data-move-y="100px" data-move-z="-500px" data-rotate-x="90deg">
					<div class="element-title">
						<h3>1</h3>
						<p>First meeting, Benchmarking</p>
					</div>
					<div class="element-content">
						<p>Each stage of the project must be planned. How am I going to do it?. Gathering ideas is one of the most important steps in benchmarking and on which the entire process will depend for optimal web development.</p>
					</div>
					<div class="element-img">
						<img src="images/circle.png" class="img-fluid">
					</div>
					<div class="elem-sep-e"></div>
				</div>
				
				<div class="element-odd ordenado blockk" data-move-y="200px" data-move-z="-500px" data-rotate-x="90deg">
					<div class="elem-sep-o"></div>
					<div class="element-img-o">
						<img src="images/circle2.png" class="img-fluid">
					</div>
					<div class="element-title-o">
						<h3>2</h3>
						<p>&nbsp; &nbsp;Sitemap, Mockup</p>
					</div>
					<div class="element-content-o">
						<p>When you have all the content, both visual and written, you proceed to create a template with the final result of the web. This template includes everything that the web will be, from its pages, to its written and visual content.</p>
					</div>
				</div>

				<div class="element-even ordenado blockk" data-move-y="300px" data-move-z="-500px" data-rotate-x="90deg">
					<div class="element-title">
						<h3>3</h3>
						<p>Development</p>
					</div>
					<div class="element-content">
						<p>At this point the mockup is mockup in a web version. This is the step in which I take care of the internal characteristics and functions of the page, the internal part of the web is created, such as the operating systems, contents, etc.</p>
					</div>
					<div class="element-img">
						<img src="images/circle3.png" class="img-fluid">
					</div>
					<div class="elem-sep-e"></div>
				</div>
				
				<div class="element-odd ordenado blockk" data-move-y="400px" data-move-z="-500px" data-rotate-x="90deg">
					<div class="elem-sep-o"></div>
					<div class="element-img-o">
						<img src="images/circle4.png" class="img-fluid">
					</div>
					<div class="element-title-o">
						<h3>4</h3>
						<p>Testing, Launching, Refinement</p>
					</div>
					<div class="element-content-o">
						<p>Having everything prepared and making sure that the page works correctly, it is time to go to the point that every web developer prefers, the launch. it is common to find elements that need to be corrected.</p>
					</div>
				</div>

			</div>
		</div>
	</section>



		<div class="bottom-serv">
			<div class="bs-col-1 blockk">
				<div class="row mg-b mg-t mg-r">
					<div class="bs-im"><img src="images/check2.png" class="img-fluid"></div>
					<div class="bs-cont">
						<p><span>Web development:</span> can range from developing a single static page of plain text to complex Web-based Internet applications (Web apps), electronic businesses, and social network services.</p>
					</div>		
				</div>
				<div class="row mg-b mg-r">
					<div class="bs-im"><img src="images/check2.png" class="img-fluid"></div>
					<div class="bs-cont">
						<p><span>Responsive design:</span> provides solutions by making websites and applications smart enough to resize and adapt its content based on the screen size of the device.</p>
					</div>		
				</div>
				<div class="row mg-b mg-r">
					<div class="bs-im"><img src="images/check2.png" class="img-fluid"></div>
					<div class="bs-cont">
						<p>Our CMS websites are based on <span>WordPress!</span> which is fully open source and actively developed by a global community of web developers.</p>
					</div>		
				</div>
			</div>
			<div class="bs-col-1"><img src="images/mac.png" class="img-fluid"></div>	
		</div>
	

	

	<section id="portfolio" class="main">
	<h2 class="title negr tcenter">Portfolio</h2>
	<!--slider------------->
	<ul id="autoWidth" class="cs-hidden">
			<!--1------------------------------>
	  	<li class="item-a porta"><a href="http://www.ruz-design.com" target="_blank">
		  <div class="boxa box-img01">
		  <div class="slide-details">
		  <p>Ruz Design</p>
		  <p>New York</p>
		  </div>
		 <!-- <div class="user user-img01"></div> -->
		  </div></a>
		</li>
		<!--2------------------------------>
		<li class="item-b porta"><a href="http://www.uc.edu.ve" target="_blank">
			<div class="boxa box-img02">
			<div class="slide-details">
			  <p>University of Carabobo</p>
			  <p>Venezuela</p>
			  </div>
			 <!-- <div class="user user-img02"></div> -->
			</div></a>
			</li>
			<!--3------------------------------>
		<li class="item-c porta"><a href="http://www.btarache.com/eclair" target="_blank">
			<div class="boxa box-img03">
			<div class="slide-details">
			  <p>Eclair Patisserie</p>
			  <p>Template</p>
			  </div>
			 <!-- <div class="user user-img03"></div> -->
			</div></a>
		</li>
			<!--4------------------------------>
		<li class="item-d porta"><a href="http://www.reproduccion-humana.com" target="_blank">
			<div class="boxa box-img04">
			<div class="slide-details">
			  <p>Uferes</p>
			  <p>Venezuela</p>
			  </div>
			 <!-- <div class="user user-img04"></div>-->
			</div></a>
		</li>
		<!--5------------------------------>
		<li class="item-e porta"><a href="http://www.vocesdeayeryhoy.com" target="_blank">
			<div class="boxa box-img05">
			<div class="slide-details">
		  <p>Voces de Ayer y Hoy</p>
		  <p>Venezuela</p>
		  </div>
		 <!-- <div class="user user-img05"></div> -->
			</div></a>
		</li>
		<!--6------------------------------>
		<li class="item-f porta"><a href="https://www.bozzina.com" target="_blank">
			<div class="boxa box-img06">
			<div class="slide-details">
		  <p>Bozzina</p>
		  <p>Lima, Perú</p>
		  </div>
		 <!-- <div class="user user-img06"></div> -->
			</div></a>
		</li>
			<!--7------------------------------>
		<li class="item-g porta"><a href="http://www.iredecogroup.com" target="_blank">
			<div class="boxa box-img07">
			<div class="slide-details">
		  <p>Iredeco Group</p>
		  <p>Venezuela</p>
		  </div>
		 <!-- <div class="user user-img07"></div> -->
			</div></a>
		</li>
				<!--8------------------------------>
		<li class="item-h porta"><a href="http://www.proactechs.com" target="_blank">
			<div class="boxa box-img08">
			<div class="slide-details">
		  <p>Proactechs</p>
		  <p>Miami</p>
		  </div>
		 <!-- <div class="user user-img08"></div> -->
			</div></a>
		</li>
				<!--9------------------------------>
		
		<!-- <li class="item-i"><a href="http://alvinsaldana.cl" target="_blank">
			<div class="boxa box-img09">
			<div class="slide-details">
		  <p>Alvin Saldaña</p>
		  <p>Chile</p>
		  </div>
		
			</div></a>
		</li> -->
	</ul>

	</section>

	<section id="contact" class="contact">
		<div class="contentc">
			<h2 class="title blanco">Contact</h2>
		</div>
		<div class="containerc">
			<div class="contactinfo">
				<div class="boxc">
					<div class="iconc"><i class="fa fa-map-marker"></i></div>
					<div class="textc">
						<h3>Adress</h3>
						<p>Chicago, USA - 60639</p>
						</div>
				</div>

				<div class="boxc">
					<div class="iconc"><i class="fa fa-phone"></i></div>
					<div class="textc">
						<h3>Phone</h3>
						<p>+1 773-7089312</p>
					</div>
				</div>

				<div class="boxc">
					<div class="iconc"><i class="fa fa-envelope-o"></i></div>
					<div class="textc">
						<h3>E-mail</h3>
						<p>info@btarache.com</p>
					</div>
				</div>	
			</div>
			
			<div class="contactform">
				<form method="post" action="send.php">
					<h2>Send Message</h2>
					<div class="inputbox">
						<input type="text" name="nombre" required="required">
						<span>Full Name</span>
					</div>
					<div class="inputbox">
						<input type="text" name="correo" required="required">
						<span>Email</span>
					</div>
					<div class="inputbox">
						<textarea name="mensaje"></textarea>
						<span>Your Message</span>
					</div>
					<div class="inputbox">
						<input type="submit" name="" value="Send">
					</div>
				</form>
			</div>
		</div>
	</section>

	<footer>
		<div class="chicago">
			<img src="images/chicago.svg" class="img-fluid">
		</div>
		<div class="avion">
			<img src="images/plane.svg" alt="">
		</div>
		<div class="container">
			<div class="footer-content">
				<img src="images/logo.svg" class="footer-logo">
				<p>Benjamin Tarache<br>Web Development</p><br>
			</div>
			<div class="container">
				<div class="footer-bottom">
					<div>
					<p>Chicago, 60639 - USA</p>
					<p>All Rights Reserved &copy; <span> 2020</span></p>
				</div>
					<div>

					</div>
				</div>	
			</div>
		</div>
		<div class="flecha">
			<p><a href="#intro"><i class="fa fa-3x fa-arrow-circle-left"></i></a></p>
		</div>
	</footer>


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
			header.classList.toggle("sticky", window.scrollY > 200);
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