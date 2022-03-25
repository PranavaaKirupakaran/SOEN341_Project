<div class="wrap-icon-section minicart">
    <a href="/cart" class="link-direction">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        <div class="left-info">
            <?php if(Cart::instance('cart')->count()>0): ?>
            <span class="index"><?php echo e(Cart::instance('cart')->count()); ?> item</span>
            <?php endif; ?>
            <span class="title">Cart</span>
        </div>
    </a>
</div><?php /**PATH C:\Users\patel\OneDrive\Documents\GitHub\SOEN341_Project\ecommerce\resources\views/livewire/cartlist-count-component.blade.php ENDPATH**/ ?>