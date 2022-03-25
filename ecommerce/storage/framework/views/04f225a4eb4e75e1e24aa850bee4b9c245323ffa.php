<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profile
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <?php if($user->profile->image): ?>
                            <img src="<?php echo e(asset('assets/images/profile')); ?>/<?php echo e($user->profile->image); ?>" width="100%"/>
                        <?php else: ?>
                        <img src="<?php echo e(asset('assets/images/profile/profile-dummy.png')); ?>" width="100%"/>
                        <?php endif; ?>                             
                    </div>
                    <div class="col-md-8">
                        <p><b>Name: </b><?php echo e($user->name); ?></p>
                        <p><b>Email: </b><?php echo e($user->email); ?></p>
                        <p><b>Address Line 1: </b><?php echo e($user->profile->line1); ?></p>
                        <p><b>Address Line 2: </b><?php echo e($user->profile->line2); ?></p>
                        <p><b>City: </b><?php echo e($user->profile->city); ?></p>
                        <p><b>Province: </b><?php echo e($user->profile->province); ?></p>
                        <p><b>Country: </b><?php echo e($user->profile->country); ?></p>
                        <p><b>Postal Code: </b><?php echo e($user->profile->postal); ?></p>
                        <a href="<?php echo e(route('user.editprofile')); ?>" class="btn btn-info pull-right">Update Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\patel\OneDrive\Documents\GitHub\SOEN341_Project\ecommerce\resources\views/livewire/user/user-profile-component.blade.php ENDPATH**/ ?>