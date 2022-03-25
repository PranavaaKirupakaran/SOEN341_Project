<div>
    <div class="container" style="padding: 30px 0;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panle-default">
                        <div class='panel-heading'>
                            <div class="row">
                                <div class="col-md-6">
                                    Add New Category
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php echo e(route('seller.categories')); ?>" class="btn btn-success"> All Category </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php if(Session::has('message')): ?>
                                <div class="alert alert-success" role="alert"> <?php echo e(Session::get('message')); ?></div>
                            <?php endif; ?>
                            <form class="form-horizontal" wire:submit.prevent="storeCategory">
                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Category Name </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Category Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Category Slug </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Category Slug" class="form-control input-md" wire:model="slug"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>  
</div>
<?php /**PATH C:\Users\patel\OneDrive\Documents\GitHub\SOEN341_Project\ecommerce\resources\views/livewire/seller/seller-add-category-component.blade.php ENDPATH**/ ?>