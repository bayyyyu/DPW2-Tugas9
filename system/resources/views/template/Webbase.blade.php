<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Admin BayyStore</title>
<link href="{{url('public')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{url('public')}}/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{url('public')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trekking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="{{url('public')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{url('public')}}/js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!--//slider-script-->
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
</head>
<body>
<!--header-->
	<div class="header">
		<div class="container">
		<div class="header-top">		
			<div class="logo">
				<a href="{{url("/index")}}"><img src="{{url('public')}}/images/logo.png" alt=""></a>
			</div>
				<div class="top-nav">
					<span class="menu"><img src="{{url('public')}}/images/menu.png" alt=""> </span>
					<ul class="icon1 sub-icon1">
						<li  ><a href="{{url("/index")}}" >Home</a></li>
						<li><a href="{{url("/products")}}" > Products</a></li>	
						<li><a href="#"><i></i></a>
						<ul class="sub-icon1 list">
						  <h3>Recently added items(2)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
										<div class="list_img"><img src="{{url('public')}}/images/15.jpg" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
										<p>Aliquam dignissim porttitor tortor </p>
										<a href="#" class="offer">1 offer applied</a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                           <div class="cart_box">
							   	 <div class="message1">
							   	     <div class="alert-close1"> </div> 
										<div class="list_img"><img src="{{url('public')}}/images/16.jpg" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
										<p>Aliquam dignissim porttitor tortor </p>
										<a href="#" class="offer">1 offer applied</a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
							  <div class="check_button"><a href="cart.html">View Cart</a></div>
					      <div class="clearfix"></div>
						</ul>
					</li>
                    <li><a href="{{url("/login")}}" > login</a></li>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
		<div class="banner">
			<div class="container">	
				<h1>Our clothing , your comfort</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
 magna aliqua.</p>
	<a href="#content" class="scroll down"><img src="{{url('public')}}/images/arr.png" alt=""></a>
			</div>
		</div>
		<div class="content" id="content">
			<div class="content-top">
				<div class="container">
					<div class="content-top-at">
					<div class="content-top-grid">
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>MEN</label>
						</a>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>WOMEN</label>
						</a>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>CHILDERN</label>
						</a>
					<div class="clearfix"> </div>
					</div>
				<a  href="{{url("/detail_products")}}" class="product-in hvr-shutter-in-horizontal">see all products</a>
				<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!---->
		<div class="container">
			<div class="content-grid">
				<h3 class="future">MEN</h3>
					<p class="five">1/5</p>
					<div class="clearfix"> </div>
				<ul id="flexiselDemo1">			
						<li><div class="men-grid">
					<a href="{{url("/detail_products")}}"><img class="img-responsive" src="{{url('public')}}/images/shoes.png" alt=""></a>
						<div class="value-in">
							<p>Shoes</p>
							<span>5,00???</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						<li><div class="men-grid">
						<a href="{{url("/detail_products")}}"><img class="img-responsive" src="{{url('public')}}/images/me1.png" alt=""></a>
						<div class="value-in">
							<p>Pants FORCLAZ</p>
							<span>25,00???</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						<li><div class="men-grid">
					<a href="single.html"><img class="img-responsive" src="{{url('public')}}/images/me2.png" alt=""></a>
						<div class="value-in">
							<p>backpack</p>
							<span>18,00???</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						
					
					</ul>
            		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 2
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="{{url('public')}}/js/jquery.flexisel.js"></script>
			</div>
			<div class="content-grid">
				<h3 class="future-in">WOMEN</h3>
					<p class="five">1/5</p>
					<div class="clearfix"> </div>
				<ul id="flexiselDemo2">			
						<li><div class="men-grid">
					<a href="{{url("/detail_products")}}"><img class="img-responsive" src="{{url('public')}}/images/me3.png" alt=""></a>
						<div class="value-in">
							<p>Giacket</p>
							<span>15,00???</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						<li><div class="men-grid">
					<a href="single.html"><img class="img-responsive" src="{{url('public')}}/images/me4.png" alt=""></a>
						<div class="value-in">
							<p>trekking shoes</p>
							<span>20,00???</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						<li><div class="men-grid">
					<a href="single.html"><img class="img-responsive" src="{{url('public')}}/images/me5.png" alt=""></a>
						<div class="value-in">
							<p>T-Shirt</p>
							<span>10,00???</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						
					
					</ul>
            		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 2
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="{{url('public')}}/js/jquery.flexisel.js"></script>
			</div>
		</div>
		<!---->
		<div class="about-us">
			<div class="container">
			<h2>about us</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
			<i class="round"> </i>
			</div>
		</div>
	</div>
		<!---->
		<div class="footer">
			<div class="footer-top">
				<div class="container">
				<a href="#" class="theme"><i> </i> ??? E-commerce psd theme available ???</a>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
				<div class="footer-bottom-at">
					<div class="col-md-6 footer-grid">
						<h3>Trekking</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-md-6 footer-grid-in">
					<ul class="footer-nav">
						<li><a href="404.html" >credits </a>|</li>
						<li><a href="privacy.html" > Privacy</a>|</li>
						<li><a href="about.html" > about</a>|</li>
						<li><a href="contact.html" > contact</a></li>
					</ul>
					<p class="footer-class">Copyright ?? 2015 Trekking Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
			</div>
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


		</div>
</body>
</html>
