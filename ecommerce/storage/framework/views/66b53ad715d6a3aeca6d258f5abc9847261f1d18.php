<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Product
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.products')); ?>" class="btn btn-success pull-right"> All Products </a>
                            </div>
                        </div> 
                    </div> 
                    <div class="panel-body">
                        <?php if(Session::has('message')): ?>
                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                        <?php endif; ?>
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group">
                                <label class="col-md-4 control-label"> Product Name </label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name"/>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Product Slug </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Short Description </label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" placeholder="Short Description" wire:model="short_description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Description </label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" placeholder="Description" wire:model="discription"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Regular price </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Sale Price </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> SKU </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" > Stock </label>
                                    <div class="col-md-4">
                                        <select class="form-control"wire:model="stock_status">
                                            <option value="instock">InStock</option>
                                            <option value="outofstock">Out of Stock</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" > Featured </label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="featured">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Quantity </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" > Product Image </label>
                                    <div class="col-md-4">
                                        <input type="file" class="input-file" wire:model="image"/>
                                        <?php if($image): ?>
                                            <img src="<?php echo e($image->temporaryUrl()); ?>" width="120" />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Category </label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="category_id">
                                            <option value=""> Select Category</option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" wire:model="stock_status"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary"> Submit </button>
                                    </div>
                                </div>

                        </form>
                </div>   
            </div> 
        </div>    
    </div>
</div>
<?php /**PATH C:\Users\patel\OneDrive\Documents\GitHub\SOEN341_Project\ecommerce\resources\views/livewire/admin/admin-add-product-component.blade.php ENDPATH**/ ?>