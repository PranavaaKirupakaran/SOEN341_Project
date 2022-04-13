	<!--main area-->
	<main id="main" class="main-site">
		<style>
		.summary-item .row-in-form input[type="password"], .summary-item .row-in-form input[type=text], .summary-item .row-in-form input[type=tel]
		{
    font-size: 13px;
    line-height: 19px;
    display: inline-block;
    height: 43px;
    padding: 2px 20px;
    max-width: 300px;
    width: 100%;
    border: 1px solid #e6e6e6;
		}

		</style>
		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>Checkout</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<form action="Post" wire:submit.prevent="placeOrder">
					<div class="row">
							<div class="col-md-12">
								<div class="wrap-address-billing">
									<h3 class="box-title">Shipping/Billing Address</h3>
									<div class="billing-address">
										<p class="row-in-form">
											<label for="fname">First name<span>*</span></label>
											<input type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
											<?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</p>
										<p class="row-in-form">
											<label for="lname">Last name<span>*</span></label>
											<input  type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
											<?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</p>
										<p class="row-in-form">
											<label for="email">Email Address:</label>
											<input  type="email" name="email" value="" placeholder="Type your email" wire:model="email">
											<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</p>
										<p class="row-in-form">
											<label for="phone">Phone number<span>*</span></label>
											<input  type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
											<?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</p>
										<p class="row-in-form">
											<label for="add">Line1:</label>
											<input  type="text" name="add" value="" placeholder="Street or apartment number" wire:model="line1">
											<?php $__errorArgs = ['line1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</p>
										<p class="row-in-form">
											<label for="add">Line2:</label>
											<input  type="text" name="add" value="" placeholder="Street or apartment number" wire:model="line2">
											<?php $__errorArgs = ['line2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</p>
										<p class="row-in-form">
											<label for="country">Country<span>*</span></label>
											<input  type="text" name="country" value="" placeholder="United States" wire:model="country">
											<?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</p>
										<p class="row-in-form">
											<label for="city">Town / City<span>*</span></label>
											<input type="text" name="city" value="" placeholder="City name" wire:model="city">
											<?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</p>
										<p class="row-in-form">
											<label for="city">Province<span>*</span></label>
											<input type="text" name="city" value="" placeholder="City name" wire:model="province">
											<?php $__errorArgs = ['province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</p>
										<p class="row-in-form">
											<label for="zip-code">Postcode / ZIP:</label>
											<input  type="text" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
											<?php $__errorArgs = ['zipcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</p>
									</div>
								</div>
							</div>
							<?php if($ship_to_different): ?>
							
								<div class="col-md-12">
									<div class="wrap-address-billing">
										<h3 class="box-title">Shipping Address</h3>
										<div class="billing-address">
											<p class="row-in-form">
												<label for="fname">First name<span>*</span></label>
												<input type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
												<?php $__errorArgs = ['s_firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>
											<p class="row-in-form">
												<label for="lname">Last name<span>*</span></label>
												<input  type="text" name="lname" value="" placeholder="Your last name" wire:model="s_lastname">
												<?php $__errorArgs = ['s_lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>
											<p class="row-in-form">
												<label for="email">Email Addreess:</label>
												<input  type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
												<?php $__errorArgs = ['s_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>
											<p class="row-in-form">
												<label for="phone">Phone number<span>*</span></label>
												<input  type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
												<?php $__errorArgs = ['s_mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>
											<p class="row-in-form">
												<label for="add">Line1:</label>
												<input  type="text" name="add" value="" placeholder="Street or apartment number" wire:model="s_line1">
												<?php $__errorArgs = ['s_line1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>
											<p class="row-in-form">
												<label for="add">Line2:</label>
												<input  type="text" name="add" value="" placeholder="Street or apartment number" wire:model="s_line2">
												
											</p>
											<p class="row-in-form">
												<label for="country">Country<span>*</span></label>
												<input  type="text" name="country" value="" placeholder="United States" wire:model="s_country">
												<?php $__errorArgs = ['s_country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>
											<p class="row-in-form">
												<label for="city">Town / City<span>*</span></label>
												<input type="text" name="city" value="" placeholder="City name" wire:model="s_city">
												<?php $__errorArgs = ['s_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>
											<p class="row-in-form">
												<label for="city">Province<span>*</span></label>
												<input type="text" name="city" value="" placeholder="City name" wire:model="s_province">
												<?php $__errorArgs = ['s_province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>
											<p class="row-in-form">
												<label for="zip-code">Postcode / ZIP:</label>
												<input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="s_zipcode">
												<?php $__errorArgs = ['s_zipcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>
										</div>
									</div>
								</div>
							<?php endif; ?>
							</div>
							<div class="summary summary-checkout">
									<div class="summary-item payment-method">
										<h4 class="title-box">Payment Method</h4>

										<div class="wrap-address-billing">
											<?php if(Session::has('stripe_error')): ?>
												<div class="alert alert-danger" role="alert"><?php echo e(Session::get('stripe_error')); ?></div>
											<?php endif; ?>
											<p class="row-in-form">
													<label for="card-no">Card Number: </label>
													<input type="text" name="card-no" value="" placeholder="Card Number" wire:model="card_no">
													<?php $__errorArgs = ['card_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>

											<p class="row-in-form">
												<label for="exp-month">Expiry Month: </label>
												<input type="text" name="exp-month" value="" placeholder="MM" wire:model="exp_month">
												<?php $__errorArgs = ['exp_month'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>

											<p class="row-in-form">
												<label for="exp-month">Expiry Year: </label>
												<input type="text" name="exp-month" value="" placeholder="YY" wire:model="exp_year">
												<?php $__errorArgs = ['exp_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>

											<p class="row-in-form">
												<label for="cvc">CVC: </label>
												<input type="password" name="cvc" value="" placeholder="CVC" wire:model="cvc">
												<?php $__errorArgs = ['cvc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</p>
										</div>
										<div class="choose-payment-methods">
											<label class="payment-method">
												<input name="payment-method" id="payment-method-bank" value="COD" type="radio" wire:model="paymentmode">
												<span>Cash On Delivery</span>
												<span class="payment-desc">Order Now Pay On Delivery</span>
											</label>
											<label class="payment-method">
												<input name="payment-method" id="payment-method-visa" value="CARD" type="radio" wire:model="paymentmode">
												<span>Debit / Credit Card</span>
												<span class="payment-desc">There is no Transaction fees</span>
											</label>
											<?php $__errorArgs = ['paymentmode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
										<?php if(Session::has('checkout')): ?>
											<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">$<?php echo e(Session::get('checkout')['total']); ?></span></p>
										<?php endif; ?>
										<button type="submit" class="btn btn-medium" >Place Order Now </button>
									</div>
									<div class="summary-item shipping-method">
										<h4 class="title-box f-title">Shipping method</h4>
										<p class="summary-info"><span class="title">Flat Rate</span></p>
										<p class="summary-info"><span class="title">Fixed $0</span></p>
									</div>
					</div>
				</form>
			</div><!--end main content area-->
			

		</div><!--end container-->
	</main>
	<!--main area-->
<?php /**PATH C:\Users\patel\OneDrive\Documents\GitHub\SOEN341_Project\ecommerce\resources\views/livewire/checkout-component.blade.php ENDPATH**/ ?>