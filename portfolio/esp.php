<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Benjamin Tarache - Portafolio</title>
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
	
	<section id="intro" class="secesp">
		<div class="container">
		<header>
			<a href="#intro"><img src="images/logo-2.png" class="logo"></a>
			<div class="toggleMenu collapse navbar-collapse" onclick="menuToggle();"></div>
			<ul class="navigation">
				<li><a href="#about">Autor</a></li>
				<li><a href="#services">Servicios</a></li>
				<li><a href="#portfolio">Portafolio</a></li>
				<li><a href="#contact">Contacto</a></li>
			</ul>
		</header>
		<div class="content-intro">
			<div class="textBox">
				<img src="images/letters-esp.svg" class="img-fluid">
			</div>
			<div class="imgBox">
				<img src="images/mane2.png" class="pepsi">
			</div>
		</div>
		<ul class="thumb">
			<li><img src="images/mane2.png" onclick="imgSlider('images/mane2.png');changeBgColor('#01c1e6')"></li>
			<li><img src="images/mane3.png" onclick="imgSlider('images/mane3.png');changeBgColor('#ffcc00')"></li>
			<li><img src="images/manequin.png" onclick="imgSlider('images/manequin.png');changeBgColor('#4939d0 ')"></li>

		</ul>
		<ul class="sci">
			<li><a href="index.php"><img src="images/f-uk.png" alt="English" title="English"></a></li>
			<li><a href="esp.php"><img src="images/f-es.png" alt="Español" title="Español"></a></li>
		</ul>
		</div>
	</section>

	<section id="about" class="about">
		<div class="about-col-1">
			<h2 class="title blanco blockk" data-move-x="-200px" data-rotate="45deg">Autor</h2>
			<h4 class="blockk" data-rotate-y="270deg" data-move-v="60%">Ingeniero en Computación,<br> con experiencia como<br> Desarrollador Web<br> Desarrollador Frontend</h4>	
		</div>
		<div class="about-col-2">
<!-- <div class="arrow-down"></div> -->
<div class="arrow-right"></div>
			<div class="blockk" data-rotate-y="270deg" data-move-x="150%">
				<p>Soy un desarrollador web que vive en Chicago, EE.UU. Paso mis días en muchas áreas diferentes de desarrollo web, desde programación back-end (PHP para desarrolloes en WordPress) hasta ingeniería front-end (HTML, CSS y jQuery), accesibilidad digital, experiencia de usuario y diseño visual. Soy un apasionado del desarrollo web.</p><br>
				<p>Aportando experiencia en diseño, instalación, prueba y mantenimiento de sistemas web. Equipado con un conjunto de habilidades, desarrollo de sitios web que involucran a los usuarios y brindan una experiencia de usuario positiva, trabajando dentro de un Sistema Manejador de Contenido (SMC), y así buscar mantener la apariencia de los sitios web al hacer cumplir los estándares de contenido.</p>	
			</div>	
		</div>	
	</section>


	


	<section id="services" class="services">
	<h2 class="title blanco blockk tcenter">Servicios</h2>	
		<div class="container-portfolio">
			<div class="box blockk" data-move-x="-500px" data-rotate="90deg">
				<h2 class="name">Desarrollo Web</h2>
				<button onclick="document.getElementById('id01').style.display='block'" class="buy">Desarrollo Web</button>
				<div class="circle"></div>
				<img src="images/web.png" class="product" width="200px">
			</div>

			<div class="box blockk" data-move-y="200px" data-move-x="-200px" data-rotate="45deg">
				<h2 class="name">Diseño Responsivo</h2>
				<button onclick="document.getElementById('id02').style.display='block'" class="buy">Diseño Responsivo</button>
				<div class="circle"></div>
				<img src="images/responsive.svg" class="product" width="200px">
			</div>

			<div class="box blockk" data-move-x="500px" data-rotate="90deg">
				<h2 class="name">WordPress CMS</h2>
				<button onclick="document.getElementById('id03').style.display='block'" class="buy">Desarrollo WordPress</button>
				<div class="circle"></div>
				<img src="images/wordpress.svg" class="product" width="200px">
			</div>

		</div>
		


  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
     	<span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Desarrollo Web</h2>
      		<div class="w3-container">
	          <p>Su sitio web se construye desde cero de acuerdo con sus especificaciones técnicas, manteniéndolo informado e involucrado durante todo el proceso.</p>
	        </div>
    </div>
  </div>

    <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
     	<span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Diseño Responsivo</h2>
      		<div class="w3-container">
	          <p>El Diseño Web Responsivo (DWR) significa que sólo necesita un sitio para todos los dispositivos, lo que es mucho más económico que desarrollar y mantener varios sitios.</p>
	          
	        </div>
    </div>
  </div>

    <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
     	<span onclick="document.getElementById('id03').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Desarrollo WordPress</h2>
      		<div class="w3-container">
	          <p>Un sistema de administración de contenido dinámico es el corazón de todo buen sitio web, lo que facilita mantener su sitio actualizado, sin necesidad de conocimientos técnicos o HTML. WordPress tiene una interfaz de administración simple e intuitiva y eliminamos todo el desorden para garantizar que la actualización de su sitio sea un juego de niños.</p>
	         
	        </div>
    </div>
  </div>

	</section>


		<section class="process">
		<div class="container">
			<h2 class="title blanco blockk tcenter">Proceso</h2>	
			<div class="pro-elements">
				
				<div class="element-even ordenado blockk" data-move-y="100px" data-move-z="-500px" data-rotate-x="90deg">
					<div class="element-title">
						<h3>1</h3>
						<p>Primera reunión, Benchmarking</p>
					</div>
					<div class="element-content">
						<p>Se debe planificar cada etapa del proyecto. ¿Cómo lo voy a hacer?. La recopilación de ideas es uno de los pasos más importantes en el benchmarking y del que dependerá todo el proceso para un desarrollo web óptimo.</p>
						
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
						<p>&nbsp; &nbsp;Mapa del sitio, maqueta</p>
					</div>
					<div class="element-content-o">
						<p>Cuando tienes todo el contenido, tanto visual como escrito, se procede a crear una plantilla con el resultado final de la web. Esta plantilla incluye todo lo que será la web, desde sus páginas, hasta su contenido escrito y visual.</p>
					</div>
				</div>

				<div class="element-even ordenado blockk" data-move-y="300px" data-move-z="-500px" data-rotate-x="90deg">
					<div class="element-title">
						<h3>3</h3>
						<p>Desarrollo</p>
					</div>
					<div class="element-content">
						<p>En este punto, la maqueta es una maqueta en una versión web. Este es el paso en el que nos ocupamos de las características y funciones internas de la página, se crea la parte interna de la web, como los sistemas operativos, contenidos, etc.</p>
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
						<p>Prueba, lanzamiento, refinamiento</p>
					</div>
					<div class="element-content-o">
						<p>Teniendo todo preparado y asegurándonos de que la página funciona correctamente, es momento de ir al punto que los desarrolladores web preferimos, el lanzamiento. Es común encontrar elementos que necesitarán ser corregidos.</p>
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
						<p><span>Desarrollo web:</span> puede abarcar desde el desarrollo de una sola página estática de texto sin formato hasta complejas aplicaciones de Internet basadas en web (aplicaciones web), negocios electrónicos y servicios de redes sociales.</p>
					</div>		
				</div>
				<div class="row mg-b mg-r">
					<div class="bs-im"><img src="images/check2.png" class="img-fluid"></div>
					<div class="bs-cont">
						<p><span>Diseño Responsivo:</span> proporciona soluciones al hacer que los sitios web y las aplicaciones sean lo suficientemente inteligentes como para cambiar el tamaño y adaptar su contenido según el tamaño de la pantalla del dispositivo.</p>
					</div>		
				</div>
				<div class="row mg-b mg-r">
					<div class="bs-im"><img src="images/check2.png" class="img-fluid"></div>
					<div class="bs-cont">
						<p>Nuestros sitios web de CMS se basan en <span> WordPress! </span>, que es completamente de código abierto y desarrollado activamente por una comunidad global de desarrolladores web.</p>
					</div>		
				</div>
			</div>
			<div class="bs-col-1"><img src="images/mac.png" class="img-fluid"></div>	
		</div>
	

	

	<section id="portfolio" class="main">
	<h2 class="title negr tcenter">Portafolio</h2>
	<!--slider------------->
	<ul id="autoWidth" class="cs-hidden">
			<!--1------------------------------>
	  	<li class="item-a porta"><a href="http://www.ruz-design.com" target="_blank">
		  <div class="boxa box-img01">
		  <div class="slide-details">
		  <p>Ruz Design</p>
		  <p>Nueva York</p>
		  </div>
		 <!-- <div class="user user-img01"></div> -->
		  </div></a>
		</li>
		<!--2------------------------------>
		<li class="item-b porta"><a href="http://www.uc.edu.ve" target="_blank">
			<div class="boxa box-img02">
			<div class="slide-details">
			  <p>Universidad de Carabobo</p>
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
			  <p>Plantilla</p>
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
			<h2 class="title blanco">Contacto</h2>
		</div>
		<div class="containerc">
			<div class="contactinfo">
				<div class="boxc">
					<div class="iconc"><i class="fa fa-map-marker"></i></div>
					<div class="textc">
						<h3>Dirección</h3>
						<p>Chicago, USA - 60639</p>
						</div>
				</div>

				<div class="boxc">
					<div class="iconc"><i class="fa fa-phone"></i></div>
					<div class="textc">
						<h3>Teléfono</h3>
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
				<form method="post" action="sendesp.php">
					<h2>Enviar Mensaje</h2>
					<div class="inputbox">
						<input type="text" name="nombre" required="required">
						<span>Nombre</span>
					</div>
					<div class="inputbox">
						<input type="text" name="correo" required="required">
						<span>Email</span>
					</div>
					<div class="inputbox">
						<textarea name="mensaje"></textarea>
						<span>Tu mensaje</span>
					</div>
					<div class="inputbox">
						<input type="submit" name="" value="Enviar">
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
				<p>Benjamín Tarache<br>Desarrollo Web</p><br>
			</div>
			<div class="container">
				<div class="footer-bottom">
					<div>
					<p>Chicago, 60639 - USA</p>
					<p>Todos los derechos reservados &copy; <span> <script>document.write(new Date().getFullYear())</script></span></p>
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
			const sec = document.querySelector('.secesp');
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