<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if(Route::currentRouteName()=='home'): ?>
		<title>eShop (Largest ecommerce platform of Bangladesh)</title>
	<?php else: ?>
		<title><?php echo e(Route::currentRouteName()); ?></title>
	<?php endif; ?>
	
    <link rel="shortcut icon" type="image/x-icon" href="asset/darazIcon.webp">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flexslider.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/chosen.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/mystyles.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/color-01.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/all.css')); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
	
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">

				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item">
									<li><a href="/user/dashboard"><i class="fas fa-user"> </i> Dashboard | </a></li>
									
								</li>
								<li class="menu-item" style="margin-left: 8px;">
									<a href="/wishlist"><i class="fas fa-heart"></i> Wishlist |</a>
									
								</li>
								<li class="menu-item" style="margin-left: 8px;">
									<a href="/cart"><i class="fas fa-cart-shopping"></i> Cart |</a>
									
								</li>
								<li class="menu-item" style="margin-left: 8px;">
									<a href="/checkout"><i class="fas fa-shopping-bag"></i> Checkout </a>
									
								</li>
								
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"></span>Language: <b>English</b><i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="bangla" href="#">Bangla</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Taka (BDT)" href="#">Taka (BDT)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li>
								
								<?php if(Route::has('login')): ?>
									<?php if(auth()->guard()->check()): ?>
										<?php if(Auth::user()->utype === 'ADM'): ?>
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account(<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
													</li>
													<li class="menu-item">
														<a title="Categories" href="<?php echo e(route('admin.categories')); ?>">Categories</a>
													</li>
													<li class="menu-item">
														<a title="Products" href="<?php echo e(route('admin.product')); ?>">All Products</a>
													</li>
													<li class="menu-item">
														<a title="Purchases" href="<?php echo e(route('admin.purchase')); ?>">All Purchases</a>
													</li>
													<li class="menu-item">
														<a title="Product Balance" href="<?php echo e(route('admin.balance')); ?>">Product Balance</a>
													</li>
													<li class="menu-item">
														<a title="Ledger" href="<?php echo e(route('admin.ledger')); ?>">Ledger</a>
													</li>

													<li class="menu-item">
														<a href="<?php echo e(route('admin.homecategories')); ?>" title="Manage Home Categories">Manage Home Categories</a>
													</li>
													<li class="menu-item">
														<a href="<?php echo e(route('admin.sale')); ?>" title="Sale Setting">Sale Setting</a>
													</li>
													<li class="menu-item">
														<a href="<?php echo e(route('admin.contact')); ?>" title="Contact Messages">Contact Messages</a>
													</li>
													<li class="menu-item">
														<a href="<?php echo e(route('admin.orders')); ?>" title="Orders">All Orders</a>
													</li>
													
													<li class="menu-item">
														<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
													</li>
													<form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
														<?php echo csrf_field(); ?>
								
													</form>
												</ul>
											</li>
										<?php else: ?>
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account(<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
													</li>
													<li class="menu-item" >
														<a title="My Orders" href="<?php echo e(route('user.orders')); ?>">My Orders</a>
													</li>
													<li class="menu-item">
														<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
													</li>
													<form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
														<?php echo csrf_field(); ?>
								
													</form>
												</ul>
											</li>
										<?php endif; ?>
								<?php else: ?> 
									<li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('login')); ?>">Login</a></li>
									<li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('register')); ?>">Register</a></li>
								<?php endif; ?>
							<?php endif; ?>
						
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="left-section img-center">

							<a href="/" class="link-to-home"><img src="<?php echo e(asset('asset/darazLogo.png')); ?>"></a>
						</div>
							


						<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header-search-component')->html();
} elseif ($_instance->childHasBeenRendered('TBo9QjO')) {
    $componentId = $_instance->getRenderedChildComponentId('TBo9QjO');
    $componentTag = $_instance->getRenderedChildComponentTagName('TBo9QjO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TBo9QjO');
} else {
    $response = \Livewire\Livewire::mount('header-search-component');
    $html = $response->html();
    $_instance->logRenderedChild('TBo9QjO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

						<div class="wrap-icon right-section">
							
							<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('wishlist-count-component')->html();
} elseif ($_instance->childHasBeenRendered('u72pFDM')) {
    $componentId = $_instance->getRenderedChildComponentId('u72pFDM');
    $componentTag = $_instance->getRenderedChildComponentTagName('u72pFDM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('u72pFDM');
} else {
    $response = \Livewire\Livewire::mount('wishlist-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('u72pFDM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

							<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-count-component')->html();
} elseif ($_instance->childHasBeenRendered('o4gAN3G')) {
    $componentId = $_instance->getRenderedChildComponentId('o4gAN3G');
    $componentTag = $_instance->getRenderedChildComponentTagName('o4gAN3G');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('o4gAN3G');
} else {
    $response = \Livewire\Livewire::mount('cart-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('o4gAN3G', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
							
						</div>

					</div>
				</div>

				<div class="mainbar header-sticky">
					<ul class="navbarr">
						<li>
							<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('nav-all-categories-component')->html();
} elseif ($_instance->childHasBeenRendered('cHR0reC')) {
    $componentId = $_instance->getRenderedChildComponentId('cHR0reC');
    $componentTag = $_instance->getRenderedChildComponentTagName('cHR0reC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cHR0reC');
} else {
    $response = \Livewire\Livewire::mount('nav-all-categories-component');
    $html = $response->html();
    $_instance->logRenderedChild('cHR0reC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
						</li>
						<?php if(Route::currentRouteName()=='home'): ?>
							<li><a class="active" href="/">Home</a></li>
						<?php else: ?>
							<li><a href="/">Home</a></li>
						<?php endif; ?>
						<?php if(Route::currentRouteName()=='product.shop'): ?>
							<li><a class="active" href="/shop">Shop</a></li>
						<?php else: ?>
							<li><a href="/shop">Shop</a></li>
						<?php endif; ?>
						<?php if(Request::url()=='http://eshoppingbd.xyz/product-category/womens-fashion'): ?>
							<li><a class="active" href="/product-category/womens-fashion">Fashion</a></li>
						<?php else: ?>
							<li><a href="/product-category/womens-fashion">Fashion</a></li>
						<?php endif; ?>
						<?php if(Request::url()=='http://eshoppingbd.xyz/product-category/electronics'): ?>
							<li><a class="active" href="/product-category/electronics">Electronics</a></li>
						<?php else: ?>
							<li><a href="/product-category/electronics">Electronics</a></li>
						<?php endif; ?>
						<?php if(Request::url()=='http://eshoppingbd.xyz/product-category/mobile-laptop'): ?>
							<li><a class="active" href="/product-category/mobile-laptop">Mobile & Laptop</a></li>
						<?php else: ?>
							<li><a href="/product-category/mobile-laptop">Mobile & Laptop</a></li>
						<?php endif; ?>
						<?php if(Route::currentRouteName()=='blog'): ?>
							<li><a class="active" href="/blog">Blogs</a></li>
						<?php else: ?>
							<li><a href="/blog">Blogs</a></li>
						<?php endif; ?>

						<?php if(Route::currentRouteName()=='aboutus'): ?>
							<li><a class="active" href="/about-us">About Us</a></li>
						<?php else: ?>
							<li><a href="/about-us">About Us</a></li>
						<?php endif; ?>

						<?php if(Route::currentRouteName()=='contact'): ?>
							<li><a class="active" href="/contact-us">Contact Us</a></li>
						<?php else: ?>
							<li><a href="/contact-us">Contact Us</a></li>
						<?php endif; ?>

						
						
					</ul>
				</div>
				
				<div id="mobile">
					<i id="bar" class="fas fa-outdent"></i>
				</div>

			</div>
		</div>
	</header>

	<?php echo e($slot); ?>


	
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			
			<div>
				<style>
					/* newsletter */
					#newsletter {
						display: flex;
						justify-content: space-between;
						flex-wrap: wrap;
						align-items: center;
						background-image: url("asset/newsletter.webp");
						height: 120px;
						background-repeat: no-repeat;
						background-position: 20% 30%;
						background-color: #041e42; 
					}

					#newsletter h4 {
						font-size: 22px;
						font-weight: 700;
						color: #fff;
						margin-left: 60px;
					}
	
					#newsletter p {
						font-size: 14px;
						font-weight: 600;
						color: #dbebfb;
						margin-left: 60px;
					}

					#newsletter p span {
						color: #ffb303;
						font-weight: bold;
					}

					#newsletter .form {
						display: flex;
						width: 40%;
					}

					#newsletter input {
						height: 40px;
						padding: 0 1.25em;
						font-size: 14px;
						width: 100%;
						border: 1px solid transparent;
						border-radius: 4px;
						outline: none;
						background-color: white;
						border-top-right-radius: 0;
						border-bottom-right-radius: 0;

					}

					#newsletter button{
						background-color: #088178;
						color: #fff;
						white-space: nowrap;
						padding: 5px;
						font-weight: 700;
						font-size: 14px;
						margin-right: 50px;
						border-top-right-radius: 4px;
						border-bottom-right-radius: 4px;
					}

					@media (max-width:477px) {
						#newsletter {
							display: flex;
							justify-content: space-between;
							flex-wrap: wrap;
							align-items: center;
							background-image: url("asset/newsletter.webp");
							height: 70px;
							background-repeat: no-repeat;
							/* background-position: 20% 30%; */
							background-color: #041e42; 
						}

						#newsletter h4 {
							font-size: 14px;
							color: #fff;
							margin-left: 10px;
						}
	
						#newsletter p {
							font-size: 10px;
							color: #dbebfb;
							margin-left: 10px;
						}

						#newsletter p span {
							color: #ffb303;
							font-weight: bold;
						}

						#newsletter .form {
							display: flex;
							width: 40%;
						}

						#newsletter input {
							height: 20px;
							padding: 0 1.25em;
							font-size: 14px;
							width: 100%;
							border: 1px solid transparent;
							border-radius: 4px;
							outline: none;
							background-color: white;
							border-top-right-radius: 0;
							border-bottom-right-radius: 0;

						}

						#newsletter button{
							background-color: #088178;
							color: #fff;
							white-space: nowrap;
							padding: 2px;
							font-weight: 700;
							font-size: 8px;

							border-top-right-radius: 2px;
							border-bottom-right-radius: 2px;
						}

					}
				</style>

				<!-- Newsletter -->
				<section id="newsletter">
					<div class="newstest">
						<h4>Sign Up For Newsletter</h4>
						<p>Get E-mail updates about <span>special offers</span></p>
					</div>
					<div class="form">
						<input type="text" placeholder="Email">
						<button>Sign Up</button>
					</div>
				</section>
			</div>

			<div class="main-footer-content">

				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<a href="/"><img src="asset/darazLogo.png" alt="" style="height: 60px;"></a>
								<h3 class="item-header" style="margin-top: 10px;">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail" >
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">New York, USA</p>
											</li>
											<li style="margin-top: -10px;">
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">+8801600111222, +8801700012345</p>
											</li>
											<li style="margin-top: -10px;">
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">contact@amazon.com</p>
											</li>											
										</ul>
									</div>
									<div class="item-content">
										<div class="wrap-list-item social-network">
											<ul>
												<li><a href="https://www.twitter.com/" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="https://www.facebook.com/" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="https://www.pinterest.com/" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
												<li><a href="https://www.instagram.com/" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
												<li><a href="https://www.vimeo.com/" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">My Account</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">My Account</a></li>
												<li class="menu-item"><a href="/user/dashboard" class="link-term">Dashboard</a></li>
												<li class="menu-item"><a href="/user/orders" class="link-term">Delivery Status</a></li>
												<li class="menu-item"><a href="/cart" class="link-term">My Cart</a></li>
												<li class="menu-item"><a href="/wishlist" class="link-term">My Wishlist</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">About</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="/about-us" class="link-term">About Us</a></li>
												<li class="menu-item"><a href="#" class="link-term">Privacy Policy</a></li>
												<li class="menu-item"><a href="#" class="link-term">Terms & Conditions</a></li>
												<li class="menu-item"><a href="/contact-us" class="link-term">Contact Us</a></li>
												<li class="menu-item"><a href="/blog" class="link-term">Blogs</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>	
						
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Dowload App</h3>
								<p>From App Store or Google Play</p>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="asset/play-store.png" alt="" width="128" height="36"></figure></a></li>
											<li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="asset/app-store.png" alt="" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="wrap-footer-item">
								<h3 class="item-header">Secured Payment Gateways</h3>
								<img src="asset/payment-gateway.png" alt="" width="200" height="36">
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="coppy-right-box" style="margin-top: 15px">
				<style>
					.copyright {
						width: 100%;
						text-align: center;
						color: #bbb7b7;
						padding: 5px;
					  }
				</style>
				<div class="container">
					<div class="copyright">
						<p>© copyright 2023 - www.eshop.com</p>
				  	</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="<?php echo e(asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.flexslider.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/chosen.jquery.min.js')); ?>"></script> 
	<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/functions.js')); ?>"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.js" integrity="sha512-UOJe4paV6hYWBnS0c9GnIRH8PLm2nFK22uhfAvsTIqd3uwnWsVri1OPn5fJYdLtGY3wB11LGHJ4yPU1WFJeBYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php echo \Livewire\Livewire::scripts(); ?>


	<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\eShop\resources\views/layouts/base.blade.php ENDPATH**/ ?>