<<<<<<< HEAD
<?php
 include('header.php');
 ?>
=======
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Smart Store Website Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
							<strong class="opencart"> </strong>
								<span class="cart_title">Cart</span>
									<span class="no_product">(empty)</span>
							</a>
						</div>
			      </div>
	     <div class="languages">
	    	<div id="language" class="wrapper-dropdown" tabindex="1">EN
						<strong class="opencart"> </strong>
						<ul class="dropdown languges">
							 <li>
							 	<a href="#" title="Français">
									<span><img src="images/gb.png" alt="en" width="26" height="26"></span><span class="lang">English</span>
								</a>
							 </li>
								<li>
									<a href="#" title="Français">
										<span><img src="images/au.png" alt="fr" width="26" height="26"></span><span class="lang">Français</span>
									</a>
								</li>
						<li>
							<a href="#" title="Español">
								<span><img src="images/bm.png" alt="es" width="26" height="26"></span><span class="lang">Español</span>
							</a>
						</li>
								<li>
									<a href="#" title="Deutsch">
										<span><img src="images/ck.png" alt="de" width="26" height="26"></span><span class="lang">Deutsch</span>
									</a>
								</li>
						<li>
							<a href="#" title="Russian">
								<span><img src="images/cu.png" alt="ru" width="26" height="26"></span><span class="lang">Russian</span>
							</a>
						</li>
				   </ul>
		     </div>
		     <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});
				}
			}

			$(function() {

				var dd = new DropDown( $('#language') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown').removeClass('active');
				});

			});

		</script>
		 </div>
			<div class="currency">
					<div id="currency" class="wrapper-dropdown" tabindex="1">$
						<strong class="opencart"> </strong>
						<ul class="dropdown">
							<li><a href="#"><span>$</span>Dollar</a></li>
							<li><a href="#"><span>€</span>Euro</a></li>
						</ul>
					</div>
					 <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});
				}
			}

			$(function() {

				var dd = new DropDown( $('#currency') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown').removeClass('active');
				});

			});

		</script>
   </div>
		   <div class="login">
		   	   <span><a href="login.html"><img src="images/login.png" alt="" title="login"/></a></span>
		   </div>
		 <div class="clear"></div>
	   </div>
	 <div class="clear"></div>
   </div>
	<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.html">HOME</a></li>
			<li class="activate"><a href="products.html">Products</a>
				<ul class="sub-menu list-unstyled">
				 <div class="nag-mother-list">
				   <div class="navg-drop-main">
					<div class="nav-drop">
						<li><a href="products.html">Product 1</a></li>
						<li><a href="products.html">Product 2</a></li>
						<li><a href="products.html">Product 3</a>
						</li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 1</a></li>
						<li><a href="products.html">Product 2</a></li>
						<li><a href="products.html">Product 3</a>
								</li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 1</a></li>
						<li><a href="products.html">Product 2</a></li>
						<li><a href="products.html">Product 3</a></li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 1</a></li>
						<li><a href="products.html">Product 2</a></li>
						<li><a href="products.html">Product 3</a></li>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="navg-drop-main">
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>

						</li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>
								</li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="clear"> </div>
				 </div>
				 <div class="navg-drop-main">
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>

						</li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>
								</li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="clear"> </div>
				 </div>
				</div>
			</ul>
			</li>
			<li><a href="products.html">Top Brand</a>
				<ul class="sub-menu list-unstyled sub-menu2">
				  <div class="navg-drop-main">
						<div class="nav-drop nav-top-brand">
							<li><a href="products.html">Product 1</a></li>
							<li><a href="products.html">Product 2</a></li>
							<li><a href="products.html">Product 3</a></li>
							<li><a href="products.html">Product 4</a></li>
						   <li><a href="products.html">Product 5</a></li>
						   <li><a href="products.html">Product 6</a></li>
						</div>
					</div>
				</ul>
			</li>
			<li><a href="faq.html">Services</a>
				<ul class="sub-menu list-unstyled sub-menu3">
				  <div class="navg-drop-main">
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>

						</li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>
								</li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="nav-drop">
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="clear"> </div>
				 </div>
			  </ul>
			</li>
			<li><a href="about.html">About</a></li>
			<li><a href="#">Delivery</a></li>
			<li><a href="Promote.html">PROMOTE</a></li>
			<li><a href="contact.html">CONTACT</a></li>
			<div class="clear"> </div>
		</ul>
		</nav>
		<script src="js/menu.js" type="text/javascript"></script>
		</div>
 </div>
>>>>>>> tam
 <div class="main">
    <div class="content">
    	<div class="support">

    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2 style = "text-align: center ">Contact Quyết Tiến Store</h2>
					    <form>
					    	<div>
						    	<span><label> <i class="fa fa-user">Name</i></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div>
						    	<span><label><i class="fa fa-address-card-o">Email</i></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div>
						     	<span><label><i class="fa fa-phone">Phone</i></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div>
						    	<span><label><i class="fa fa-envelope">Message</i></label></span>
						    	<span><textarea> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="SUBMIT"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h2 style = "color : red">Địa chỉ </h2>
					    	  <div class="map">
							   	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1722107977635!2d106.70892531477153!3d10.798118992306767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528b01862b1c9%3A0x2c7094d4f546f290!2zMjAwIFjDtCBWaeG6v3QgTmdo4buHIFTEqW5oLCBQaMaw4budbmcgMjEsIELDrG5oIFRo4bqhbmgsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1543403047723" width="315" height="350" frameborder="0" style="border:0" allowfullscreen></iframe><br>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h2 style = " color: red">Thông tin của chúng tôi </h2>
						    	<p><i class="fa fa-home">200 Xô Viết Nghệ Tĩnh </i></p>
						   		<p><i class="fa fa-home">Quận Bình Thạnh , Thành phố Hồ Chí Minh</i></p>
				   		<p><i class="fa fa-phone">Phone:(00) 222 666 444</i></p>
				   		<p><i class="fa fa-fax">Fax: (000) 000 00 00 0></i></p>
				 	 	<p>Email: <span><a href="quyettien@gmail.com">quyettien@gmail.com</a></span></p>
				   		<p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
				   </div>
				 </div>
			  </div>
    </div>
 </div>
</div>
<<<<<<< HEAD
   <?php
	include('footer.php')
?>
=======
   <div class="footer">
   	  <div class="wrapper">
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#"><span>Advanced Search</span></a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="#"><span>Contact Us</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="faq.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html"><span>Site Map</span></a></li>
						<li><a href="preview-2.html"><span>Search Terms</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.html">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="faq.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>&copy; 2013 Smart Store. All Rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a> </p>
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
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>
>>>>>>> tam
