	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">Home</a></li>
					<li class="item-link"><span>Cart</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<div class="wrap-iten-in-cart">
					<?php if(Session::has('success_message')): ?>
					<div class="alert alert-success">
						<strong> Success </strong> <?php echo e(Session::get('success_message')); ?>

					</div>
					<?php endif; ?>
					<?php if(Cart::instance('cart')->count()>0): ?>
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
						<?php $__currentLoopData = Cart::instance('cart')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($item->model!=null): ?>
							<li class="pr-cart-item">
								<div class="product-image">
									<figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($item->model->image); ?>" alt="<?php echo e($item->model->name); ?>"></figure>
								</div>
								<div class="product-name">
									<a class="link-to-product" href="<?php echo e(route('product.details',['slug'=>$item->model->slug])); ?>"><?php echo e($item->model->name); ?></a>
								</div>
								<div class="price-field product-price"><p class="price">$<?php echo e($item->model->regular_price); ?></p></div>
								<div class="quantity">
									<div class="quantity-input">
										<input type="text" name="product-quatity" value="<?php echo e($item->qty); ?>" data-max="120" pattern="[0-9]*" >
										<a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('<?php echo e($item->rowId); ?>')"></a>
										<a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('<?php echo e($item->rowId); ?>')"></a>
									</div>
									<p class="text-center"><a href="#" wire:click.prevent="switchToSaveForLater('<?php echo e($item->rowId); ?>')">Save For Later</a></p>
								</div>
								<div class="price-field sub-total"><p class="price">$<?php echo e($item->subtotal); ?></p></div>
								<div class="delete">
									<a href="#" wire:click.prevent="destroy('<?php echo e($item->rowId); ?>')" class="btn btn-delete" title="">
										<span>Delete from your cart</span>
										<i class="fa fa-times-circle" aria-hidden="true"></i>
									</a>
								</div>
							</li>
						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					<?php else: ?>
							<div class="text-center" style="padding: 30px 0;">
								 <h1>Your cart is empty 🙁!!</h1>
								 <p> Add items to it now</p>
								 <a href="/shop" class="btn btn-success">Shop Now</a>
							</div>
					<?php endif; ?>	
				</div>
				<?php if(Cart::instance('cart')->count()>0): ?>
				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info"><span class="title">Subtotal</span><b class="index">$<?php echo e(Cart::instance('cart')->subtotal()); ?></b></p>
						<?php if(Session::has('coupon')): ?>
							<p class="summary-info"><span class="title">Discount (<?php echo e(Session::get('coupon')['code']); ?>)</span><b class="index">-$<?php echo e(number_format($discount,2)); ?></b></p>
							<p class="summary-info"><span class="title">Subtotal </span><b class="index">$<?php echo e(number_format($subtotalAfterDiscount,2)); ?></b></p>
							<p class="summary-info"><span class="title">Tax (<?php echo e(config('cart.tax')); ?>%)</span><b class="index">$<?php echo e(number_format($taxAfterDiscount,2)); ?></b></p>
							<p class="summary-info total-info "><span class="title">Total</span><b class="index">$<?php echo e(number_format($totalAfterDiscount,2)); ?></b></p>
						<?php else: ?>
							<p class="summary-info"><span class="title">Tax</span><b class="index">$<?php echo e(Cart::instance('cart')->tax()); ?></b></p>
							<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
							<p class="summary-info total-info "><span class="title">Total</span><b class="index">$<?php echo e(Cart::instance('cart')->total()); ?></b></p>
						<?php endif; ?>
						</div>
						<div class="checkout-info">
							<?php if(!Session::has('coupon')): ?>
								<div class="summary-item">
									<form wire:submit.prevent="applyCouponCode">
										<h4 class="title- box">Coupon Code</h4>
										<?php if(Session::has('coupon_message')): ?>
											<div class="alert alert-danger" role="danger"><?php echo e(Session::get('coupon_message')); ?></div>
										<?php endif; ?>
										<p class = "row-in-form">
											<label for="coupon-code"> Enter your Coupon Code:</label>
											<input type="text" name="coupon code" wire:model="couponCode" />
										</p>
										<button type="submit" class="btn btn-small">Apply</button>
									</form>
								</div>
							<?php endif; ?>
							<a class="btn btn-checkout" href="#" wire:click.prevent="checkout">Check out</a>
							<a class="link-to-shop" href="/shop">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
						</div>
						<div class="update-clear">
							<a class="btn btn-clear" href="#" wire:click.prevent="destroyall()">Clear Shopping Cart</a>
							<a class="btn btn-update" href="/shop">Update Shopping Cart</a>
						</div>
						</div>
					
					
					<?php endif; ?>
				<div class="wrap-iten-in-cart">
					<h3 class="title-box" style="border-bottom: 1px solid; padding-bottom:15px;"><?php echo e(Cart::instance('saveForLater')->count()); ?> item(s) Saved For Later</h3>
					<?php if(Session::has('s_success_message')): ?>
					<div class="alert alert-success">
						<strong> Success </strong> <?php echo e(Session::get('s_success_message')); ?>

					</div>
					<?php endif; ?>
					<?php if(Cart::instance('saveForLater')->count()>0): ?>
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
						<?php $__currentLoopData = Cart::instance('saveForLater')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="pr-cart-item">
								<div class="product-image">
									<figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($item->model->image); ?>" alt="<?php echo e($item->model->name); ?>"></figure>
								</div>
								<div class="product-name">
									<a class="link-to-product" href="<?php echo e(route('product.details',['slug'=>$item->model->slug])); ?>"><?php echo e($item->model->name); ?></a>
								</div>
								<div class="price-field produtc-price"><p class="price">$<?php echo e($item->model->regular_price); ?></p></div>
								<div class="quantity">
									<p class="text-center"><a href="#" wire:click.prevent="moveToCart('<?php echo e($item->rowId); ?>')">Move To Cart</a></p>
								</div>
								<div class="delete">
									<a href="#" wire:click.prevent="deleteFromSaveForLater('<?php echo e($item->rowId); ?>')" class="btn btn-delete" title="">
										<span>Delete from Save For Later</span>
										<i class="fa fa-times-circle" aria-hidden="true"></i>
									</a>
								</div>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					<?php else: ?>
					<p> No item is saved for later</p>
					<?php endif; ?>
				</div>
			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->
<?php /**PATH C:\Users\patel\OneDrive\Documents\GitHub\SOEN341_Project\ecommerce\resources\views/livewire/cart-component.blade.php ENDPATH**/ ?>