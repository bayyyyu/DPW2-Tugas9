<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>BayyStore</title>
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
<link rel="stylesheet" href="{{url('public')}}/css/etalage.css">
<script src="{{url('public')}}/js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="{{url('public')}}/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script> 

</head>
<body>
<!--header-->
	@include('template.section.headerweb')

		<div class="banner banner-in">
			
		</div>
		<!---->
			<div class="container">
		<div class="single">
		<div class="col-md-9">
			<div class="single_grid">
				<div class="grid {{url('public')}}/images_3_of_2">
				<ul id="etalage">

							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image img-responsive" src="{{url('public')}}/images/sin.jpg" alt="" >
									<img class="etalage_source_image img-responsive" src="{{url('public')}}/images/sin-1.jpg" alt="" >
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="{{url('public')}}/images/sin1.jpg" alt="" >
								<img class="etalage_source_image img-responsive" src="{{url('public')}}/images/sin-2.jpg" alt="" >
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="{{url('public')}}/images/sin.jpg"  alt="" >
								<img class="etalage_source_image img-responsive" src="{{url('public')}}/images/sin-1.jpg" alt="" >
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="{{url('public')}}/images/sin2.jpg" alt=""  >
								<img class="etalage_source_image img-responsive" src="{{url('public')}}/images/sin-3.jpg" alt="" >
							</li>
						    
						</ul>

						 <div class="clearfix"> </div>		
				  </div> 
				  <!---->
				  <div class="span1_of_1_des">
				  <div class="desc1">
					<h3>Lorem Ipsum is simply dummy  </h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
					<h5>Rs. 6,990 <a href="#">click for offer</a></h5>
					<div class="available">
						<h4>Available Options :</h4>
						<ul>
							<li>Size:
								<select>
									<option>L</option>
									<option>XL</option>
									<option>S</option>
									<option>M</option>
								</select>
							</li>
							<li>Quality:
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</li>
						</ul>
						<div class="form-in">
							<a href="#" class="hvr-shutter-in-horizontal">Add To Cart</a>
						</div>
						
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Share Product :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="{{url('public')}}/images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="{{url('public')}}/images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="{{url('public')}}/images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="{{url('public')}}/images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clearfix"></div>
					</div>
			   	 </div>
			   	</div>
          	    <div class="clearfix"></div>
          	  </div>
			  <!---->
			  <div class=" possible-single">
					<h4>More Dscription:</h4>
						<div class="tab1">
							<ul class="place">
								<li><img src="{{url('public')}}/images/cir.png" alt=""></li>
								<li>Placerat ligula tincidunt</li>
							</ul>
						<p style="display: none; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab2">
							<ul class="place">
								<li><img src="{{url('public')}}/images/cir.png" alt=""></li>
								<li>Sed ut perspiciatis unde</li>
							</ul>
						<p style="display: none; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab3">
							<ul class="place">
								<li><img src="{{url('public')}}/images/cir.png" alt=""></li>
								<li>Eaque ipsa quae ab illo </li>
							</ul>
						<p style="display: none; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab4">
							<ul class="place">
								<li><img src="{{url('public')}}/images/cir.png" alt=""></li>
								<li>At vero eos et accusamus</li>
							</ul>
						<p style="display: none; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab5">
							<ul class="place">
								<li><img src="{{url('public')}}/images/cir.png" alt=""></li>
								<li>Internet tend to repeat </li>
							</ul>
						<p style="display: block; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab6">
							<ul class="place">
								<li><img src="{{url('public')}}/images/cir.png" alt=""></li>
								<li>Many desktop publishing</li>
							</ul>
						<p style="display: block; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						
						<!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 p").hide();
								$(".tab2 p").hide();
								$(".tab3 p").hide();
								$(".tab4 p").hide();
								$(".tab5 p").hide();
								$(".tab6 p").hide();
								$(".tab1 ul").click(function(){
									$(".tab1 p").slideToggle(300);
									$(".tab2 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 p").slideToggle(300);
									$(".tab1 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 p").slideToggle(300);
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
								})
								$(".tab5 ul").click(function(){
									$(".tab5 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
									$(".tab6 p").hide();
									
								})
								$(".tab6 ul").click(function(){
									$(".tab6 p").slideToggle(300);
									$(".tab5 p").hide();
									$(".tab4 p").hide();
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();																	
								})
								
								
							});
						</script>
						<!-- script -->
					</div>
			  <!---->
			</div>
	<!---->
	<div class="col-md-3">
	  <div class="w_sidebar">
		<section  class="sky-form">
					<h4>catogories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Shoes</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tops</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bags</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shoes</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jeans</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Bottle</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tent</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shoes</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bags</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shoes</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bags</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shoes</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bags</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shoes</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bags</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shoes</label>	
							</div>
						</div>
		</section>
		
		
		<section class="sky-form">
						<h4>discount</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
							</div>
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
							</div>
						</div>						
		</section>
		<section class="sky-form">
			<h4>product catogories</h4>
			<ul class="w_nav2">
				
						<li><a href="#">Feugiat(5)</a></li>
						<li><a href="#">Injected(7)</a></li>
						<li><a href="#">Fusce (2)</a></li>
						<li><a href="#">Feugiat(1)</a></li>
						<li><a href="#">Contrary(6)</a></li>
					
			</ul>
		</section>
	</div>
   </div>
   <div class="clearfix"> </div>
	</div>
	</div>

		<!---->
		@include('template.section.footerweb')
</body>
</html>
