<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flexslider.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/chosen.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/color-01.css')); ?>">
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
								<li class="menu-item" >
									<a title="" href="/"><span class=""></span></a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<?php if(Route::has('login')): ?>
									<?php if(auth()->guard()->check()): ?>
										<?php if(Auth::user()->utype=='ADM'): ?>
										<!--Admin-->
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account(<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													
													<li class="menu-item">
														<a title="My Profile" href="<?php echo e(route('admin.profile')); ?>">My Profile</a>
													</li>
													<li class="menu-item">
														<a title="Products" href="<?php echo e(route('admin.products')); ?>">All Products</a>
													</li>
													
													<li class="menu-item">
														<a title="All Orders" href="<?php echo e(route('admin.orders')); ?>">All Orders</a>
													</li>
													<li class="menu-item">
														<a title="Categories" href="<?php echo e(route('admin.categories')); ?>">Categories</a>
													</li>
													<li class="menu-item">
														<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
													</li>
													<form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
														<?php echo csrf_field(); ?>
													</form>
												</ul>
											</li>
										<?php elseif(Auth::user()->utype=='USR'): ?>
										<!--Customer-->
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account(<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													
													<li class="menu-item">
														<a title="My Orders" href="<?php echo e(route('user.orders')); ?>">My Orders</a>
													</li>
													<li class="menu-item">
														<a title="Change Password" href="<?php echo e(route('user.changepassword')); ?>">Change Password</a>
													</li>
													<li class="menu-item">
														<a title="My Profile" href="<?php echo e(route('user.profile')); ?>">My Profile</a>
													</li>
													<li class="menu-item">
														<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
													</li>
													<form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
														<?php echo csrf_field(); ?>
													</form>
												</ul>
											</li>
										<?php elseif(Auth::user()->utype=='SELL'): ?>
										<!--Seller-->
										<li class="menu-item menu-item-has-children parent" >
											<a title="My Account" href="#">My Account (<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="submenu curency" >
												
												<li class="menu-item">
													<a title="All Orders" href="<?php echo e(route('seller.orders')); ?>">All Orders</a>
												</li>
												<li class="menu-item">
													<a title="My Profile" href="<?php echo e(route('seller.profile')); ?>">My Profile</a>
												</li>
												<li class="menu-item">
													<a title="Products" href="<?php echo e(route('seller.addproduct')); ?>">Add Products</a>
												</li>
												<li class="menu-item">
													<a title="Categories" href="<?php echo e(route('seller.categories')); ?>">Categories</a>
												</li>
												<li class="menu-item">
													<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
												</li>
												<form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
													<?php echo csrf_field(); ?>
												</form>
											</ul>
										</li>
										<?php endif; ?>
									<?php else: ?>
										<li class="menu-item"><a title="Register or Login" href="<?php echo e(route('login')); ?>">Login</a></li>
										<li class="menu-item"><a title="Register or Login" href="<?php echo e(route('register')); ?>">Register</a></li>
									<?php endif; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="<?php echo e(asset('assets/images/logo-top-1.png')); ?>" alt="mercado"></a>
							<br><br>
						</div>

						<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header-search-component')->html();
} elseif ($_instance->childHasBeenRendered('PFXDcnp')) {
    $componentId = $_instance->getRenderedChildComponentId('PFXDcnp');
    $componentTag = $_instance->getRenderedChildComponentTagName('PFXDcnp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PFXDcnp');
} else {
    $response = \Livewire\Livewire::mount('header-search-component');
    $html = $response->html();
    $_instance->logRenderedChild('PFXDcnp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

						<div class="wrap-icon right-section">
							<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('wishlist-count-component')->html();
} elseif ($_instance->childHasBeenRendered('U228iYO')) {
    $componentId = $_instance->getRenderedChildComponentId('U228iYO');
    $componentTag = $_instance->getRenderedChildComponentTagName('U228iYO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('U228iYO');
} else {
    $response = \Livewire\Livewire::mount('wishlist-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('U228iYO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
							
							<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cartlist-count-component')->html();
} elseif ($_instance->childHasBeenRendered('vjkSuSJ')) {
    $componentId = $_instance->getRenderedChildComponentId('vjkSuSJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('vjkSuSJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vjkSuSJ');
} else {
    $response = \Livewire\Livewire::mount('cartlist-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('vjkSuSJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

							<div class="wrap-icon-section show-up-after-1024">
								<a href="/" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="nav-section header-sticky">


					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Cart</a>
								</li>
								<!--<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Checkout</a>
								</li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php echo e($slot); ?>


	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Delivery</h4>
								<p class="fc-desc">For Orders Over $70</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-dollar" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Return Policy</h4>
								<p class="fc-desc">21-Day Money-Back Guarantee</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-cc-visa" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Payment</h4>
								<p class="fc-desc">Safe & Reliable</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Customer Service</h4>
								<p class="fc-desc">Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Get In Touch With Us</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map" aria-hidden="true"></i>
												<p class="contact-txt">1455 De Maisonneuve Blvd. W. Montreal, Quebec, H3G 1M8</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">+1.514.462.7498</p>
											</li>
											<li>
												<i class="fa fa-envelope-open" aria-hidden="true"></i>
												<p class="contact-txt">info@tag.ca</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Follow Us On Social Media</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="/" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="/" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="/" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Get Exclusive Promotions</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Type your e-mail address">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2022 Group Q - SOEN 341</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="/" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="/" class="link-term">Return Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<?php echo \Livewire\Livewire::scripts(); ?>

	<script src="<?php echo e(asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.flexslider.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/chosen.jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/functions.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
	<?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH C:\Users\patel\OneDrive\Documents\GitHub\SOEN341_Project\ecommerce\resources\views/layouts/base.blade.php ENDPATH**/ ?>