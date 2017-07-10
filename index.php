<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	
	<title>SAJ</title>
	<?php wp_head(); ?>
</head>
<body style="background-image:url(<?php bloginfo('template_url') ?>/img/back.png)">

	<header>
	    <div class="container_nav">
	        <nav class="main_menu wrapper">
               <input type="checkbox" name="toggle" id="menu" class="toggleMenu">
                <label for="menu" class="toggleMenu"><svg xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink" height="25px" version="1.1" viewBox="0 0 25 25" width="25px"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="TabBar-Icons" stroke="none" stroke-width="1"><g fill="#fff" id="Hamburger"><path d="M0,2 L25,2 L25,6 L0,6 L0,2 Z M0,10 L25,10 L25,14 L0,14 L0,10 Z M0,18 L25,18 L25,22 L0,22 L0,18 Z"/></g></g></svg></label>
                <ul>
                    <div class="icon">
                    	<a href="#" class="i"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    	<a href="#" class="i"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    	<a href="#" class="i"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    	<a href="#" class="i"><i class="fa fa-youtube" aria-hidden="true"></i></a>

                    </div>
                    <li class="ph"><img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="logo">
                    <p>Backyard Landscaping</p></li>
                    <div class="phone"><img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="logo">
                    <p>Backyard Landscaping</p></div>
                    <li><a herf="#">HOME</a></li>
                    <li><a herf="#">ABOUT</a></li>
                    <li><a herf="#">NEWS</a></li>
                    <li><a herf="#">TESTIMONIALS</a></li>
                    <li><a herf="#">CONTACT US</a></li>                   
                </ul>
	        </nav>
	    </div>
	</header>
		<div class="container">
			<div class="wrap">
				<div class="slider">
					<input id="slide-1" type="radio" name="slides" checked>
					<section class="slide slide-one" style="background-image:url(<?php bloginfo('template_url') ?>/img/slide-1.png)"></section>
					<input id="slide-2" type="radio" name="slides">
					<section class="slide slide-two" style="background-image:url(<?php bloginfo('template_url') ?>/img/slide-2.png)">></section>
					<input id="slide-3" type="radio" name="slides">
					<section class="slide slide-three" style="background-image:url(<?php bloginfo('template_url') ?>/img/slide-3.png)"></section>
					<input id="slide-4" type="radio" name="slides">
					<section class="slide slide-four" style="background-image:url(<?php bloginfo('template_url') ?>/img/slide-4.png)"></section>

					<div class="control">
						<label for="slide-1">1</label>
						<label for="slide-2">2</label>
						<label for="slide-3">3</label>
						<label for="slide-4">4</label>
					</div>
				</div>
			<div class="goodserv">
				<div class="good">
					<div class="circl"><img src="<?php bloginfo('template_url') ?>/img/like.png" alt="like"></div>
					<p>Good service</p>
				</div>
				<div class="high">
					<div class="circl"><img src="<?php bloginfo('template_url') ?>/img/service.png" alt="service"></div>
					<p>High performance</p>
				</div>
				<div class="exper">
					<div class="circl"><img src="<?php bloginfo('template_url') ?>/img/star.png" alt="star"></div>
					<p>Experience</p>
				</div>
			</div>
			</div>

			

			<div class="content_a">
				<div class="wrap_add"><span>ADDITIONAL TASK</span></div>
				<div class="title_black">
					<h2>ABOUT US</h2>
				</div>
			<div class="video"><iframe width="478" height="268" src="https://www.youtube.com/embed/tJ9iyUUtw84" frameborder="0" allowfullscreen></iframe></div>
			<section class="section_a">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce libero dui, pharetra vitae tempus id, interdum in elit. Fusce cursus interdum auctor. Proin et aliquam tellus, vel egestas sapien.</p>
				<ol>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing</li>
					<li>Deleniti fuga minus molestias omnis perferendis voluptatem.</li>
					<li>Laboriosam maiores nisi nulla recusandae repellendus vero.</li>
					<li>Corporis, eos impedit pariatur quaerat quod reprehenderit?</li>
					<li>Proin et aliquam tellus, vel egestas sapien</li>
				</ol>
			</section>
			
			</div>
			<div class="content_b">
				<div class="title_white">
					<h2>LATEST NEWS</h2>
				</div>
				
				<section class="section_b">
					<img src="<?php bloginfo('template_url') ?>/img/img_1.png" alt="image">
					<div class="news">
						<h3>NEWS TITLE</h3>
						<span>posted 10.12.15</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, alias asperiores assumenda consequatur cum cumque delectus doloremque doloribus ducimus earum laboriosam laudantium nam necessitatibus nostrum praesentium quisquam ratione repellendus rerum sed tempore tenetur vel voluptate voluptatibus. Ab consectetur corporis delectus harum iusto laboriosam maxime molestiae odio quisquam quod quos sit temporibus, totam vel veniam veritatis?[...]</p>
						<a class="right" href="#">READ MORE</a>
					</div>
				</section>

				<section class="section_c">
					<div class="news news_fix">
						<h3>NEWS TITLE</h3>
						<span>posted 10.12.15</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, alias asperiores assumenda consequatur cum cumque delectus doloremque doloribus ducimus earum laboriosam laudantium nam necessitatibus nostrum praesentium quisquam ratione repellendus rerum sed tempore tenetur vel voluptate voluptatibus. Ab consectetur corporis delectus harum iusto laboriosam maxime molestiae odio quisquam quod quos sit temporibus, totam vel veniam veritatis?[...]</p>
						<a class="left" href="#">READ MORE</a>
					</div>
					<img src="<?php bloginfo('template_url') ?>/img/img_2.png" alt="image">
				</section>
			</div>
			<div class="wraper_wraper">
				<div class="qwerty"></div>
				<div class="title_blackk" style="background: #fff;">
					<h2>TESTIMONIALS</h2>
				</div>
			<!-- Swiper -->
		    <div class="swiper-container gallery-top">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<div class="cv">
							<img  src="<?php bloginfo('template_url') ?>/img/1.png" alt="img">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus enim facilis fugiat illum ipsam laudantium libero non reprehenderit totam ullam?<br><br><span> - Lorem ipsum</span></p>
						</div>
		            </div>
		            <div class="swiper-slide" >
		           		<div class="cv">
							<img src="<?php bloginfo('template_url') ?>/img/111.png" alt="img">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus enim facilis fugiat illum ipsam laudantium libero non reprehenderit totam ullam?<br><br><span> - Lorem ipsum</span></p>
						</div>
					</div>
		            <div class="swiper-slide">
			            <div class="cv">
							<img src="<?php bloginfo('template_url') ?>/img/222.png" alt="img">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus enim facilis fugiat illum ipsam laudantium libero non reprehenderit totam ullam?<br><br><span> - Lorem ipsum</span></p>
						</div>
					</div>
		        </div>
		    </div>
		    <div class="swiper-container gallery-thumbs">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide" style="background-image:url(<?php bloginfo('template_url') ?>/img/1.png)"></div>
		            <div class="swiper-slide" style="background-image:url(<?php bloginfo('template_url') ?>/img/2.png)"></div>
		            <div class="swiper-slide" style="background-image:url(<?php bloginfo('template_url') ?>/img/3.png)"></div>  </div>
    		 </div>
   			 
		</div>

		<div class="info">
			<div class="contact">
				<h4>CONTACT US</h4>
				<p>Unit 8 Honywood Business Park<br>
				Honywood Road<br>
				Basildon, Essex, SS14 3HW<br>
				</p>
				<a href="tel:01268 272 030">Tel: 01268 272 030</a>
				<a href="fax:01268 272 040">Fax: 01268 272 040"</a>
				<a href="mailto:info@saigb.co.uk">Email: info@saigb.co.uk</a>
			</div>
			<div class="find">
				<h4>FIND US</h4>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2478.909815018431!2d0.4886708161635236!3d51.58821622964846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8c4120dddb2a3%3A0xecc370153cab40c8!2sHonywood+Business+Park!5e0!3m2!1sru!2sua!4v1499590134232" width="465" height="176" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<form class="write" action="mailto:info@saigb.co.uk">
				<h4>WRITE US</h4>
				<input type="text" placeholder="Name">
				<input type="email" placeholder="E-mail">
				<textarea placeholder="Message"></textarea>
				<button class="right">SUBMIT</button>
			</form>
		</div>
		<footer>Copyright © 2015 SAI GB Ltd. <a href="#">Privacy Policy and Terms & Conditions</a></footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
