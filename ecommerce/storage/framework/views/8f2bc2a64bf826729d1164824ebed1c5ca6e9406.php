<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage Profile
                </div>
                <div class="panel-body">
                    <?php if(Session::has('message')): ?>
                        <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                    <?php endif; ?>
                    <form wire:submit.prevent="updateProfile()">
                        <div class="col-md-4">
                            <?php if($newimage): ?>
                                <img src="<?php echo e($newimage->temporaryUrl()); ?>" width="100%"/>
                            <?php elseif($image): ?>
                                <img src="<?php echo e(asset('assets/images/profile')); ?>/<?php echo e($user->profile->image); ?>" width="100%"/>
                            <?php else: ?>
                                <img src="<?php echo e(asset('assets/images/profile/profile-dummy.png')); ?>" width="100%"/>
                            <?php endif; ?>
                            <input type="file" class="form-control" wire:model="newimage"/>
                        </div>
                        <div class="col-md-8">
                            <p><b>Name: </b><input type="text" class="form-control" wire:model="name"/></p>
                            <p><b>Email: </b><?php echo e($email); ?></p>
                            <p><b>Address Line 1: </b><input type="text" class="form-control" wire:model="line1"/></p>
                            <p><b>Address Line 2: </b><input type="text" class="form-control" wire:model="line2"/></p>
                            <p><b>City: </b><input type="text" class="form-control" wire:model="city"/></p>
                            <p><b>Province: </b><input type="text" class="form-control" wire:model="province"/></p>
                            <p><b>Country: </b><input type="text" class="form-control" wire:model="country"/></p>
                            <p><b>Postal Code: </b><input type="text" class="form-control" wire:model="postal"/></p>
                            <button wire:click="updateProfile()" type="submit" class="btn btn-info pull-right">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\patel\OneDrive\Documents\GitHub\SOEN341_Project\ecommerce\resources\views/livewire/user/user-edit-profile-component.blade.php ENDPATH**/ ?>