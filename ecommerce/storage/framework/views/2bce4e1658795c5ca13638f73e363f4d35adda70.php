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
							<li class="pr-cart-item">
								<div class="product-image">
									<figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($item->model->image); ?>" alt="<?php echo e($item->model->name); ?>"></figure>
								</div>
								<div class="product-name">
									<a class="link-to-product" href="<?php echo e(route('product.details',['slug'=>$item->model->slug])); ?>"><?php echo e($item->model->name); ?></a>
								</div>
								<div class="price-field produtc-price"><p class="price">$<?php echo e($item->model->regular_price); ?></p></div>
								<div class="quantity">
									<div class="quantity-input">
										<input type="text" name="product-quatity" value="<?php echo e($item->qty); ?>" data-max="120" pattern="[0-9]*" >
										<a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('<?php echo e($item->rowId); ?>')"></a>
										<a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('<?php echo e($item->rowId); ?>')"></a>
									</div>
								</div>
								<div class="price-field sub-total"><p class="price">$<?php echo e($item->subtotal); ?></p></div>
								<div class="delete">
									<a href="#" wire:click.prevent="destroy('<?php echo e($item->rowId); ?>')" class="btn btn-delete" title="">
										<span>Delete from your cart</span>
										<i class="fa fa-times-circle" aria-hidden="true"></i>
									</a>
								</div>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					<?php else: ?>
					<p> No Items in Cart </p>
					<?php endif; ?>
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info"><span class="title">Subtotal</span><b class="index">$<?php echo e(Cart::instance('cart')->subtotal()); ?></b></p>
						<p class="summary-info"><span class="title">Tax</span><b class="index">$<?php echo e(Cart::instance('cart')->tax()); ?></b></p>
						<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
						<p class="summary-info total-info "><span class="title">Total</span><b class="index">$<?php echo e(Cart::instance('cart')->total()); ?></b></p>
					</div>
					<div class="checkout-info">
						<label class="checkbox-field">
							<input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>Use promotion</span>
						</label>
						<a class="btn btn-checkout" href="/checkout">Check out</a>
						<a class="link-to-shop" href="/shop">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
					<div class="update-clear">
						<a class="btn btn-clear" href="#" wire:click.prevent="destroyall()">Clear Shopping Cart</a>
						<a class="btn btn-update" href="#">Update Shopping Cart</a>
					</div>
				</div>
			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->
<?php /**PATH C:\Users\patel\OneDrive\Documents\GitHub\SOEN341_Project\ecommerce\resources\views/livewire/cart-component.blade.php ENDPATH**/ ?>