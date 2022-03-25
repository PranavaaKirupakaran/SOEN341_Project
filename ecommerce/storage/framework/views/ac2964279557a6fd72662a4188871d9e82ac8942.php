<div class="wrap-search center-section">
    <div class="wrap-search-form">
        <form action="<?php echo e(route('product.search')); ?>" id="form-search-top" name="form-search-top">
            <input type="text" name="search" value="<?php echo e($search); ?>" placeholder="Search here...">
            <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            <div class="wrap-list-cate">
                <input type="hidden" name="product_cat" value="<?php echo e($product_cat); ?>" id="product-cate">
                <input type="hidden" name="product_cat_id" value="<?php echo e($product_cat_id); ?>" id="product-cate-id">
                <a href="#" class="link-control"><?php echo e(str_split($product_cat,12)[0]); ?></a>
                <ul class="list-cate">
                    <li class="level-0">All Category</li>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="level-1" data-id="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </form>
    </div>
</div><?php /**PATH C:\Users\patel\OneDrive\Documents\GitHub\SOEN341_Project\ecommerce\resources\views/livewire/header-search-component.blade.php ENDPATH**/ ?>