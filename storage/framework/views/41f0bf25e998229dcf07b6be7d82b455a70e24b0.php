<?php $__env->startSection('content'); ?>
    <div class="container" id="login-form">
        <div class="card card-container" style="height: auto">
            <h2>Create an account</h2>
            <br>
            <form class="form-signin" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <input type="text" id="" class="form-control<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>" name="first_name" placeholder="First Name" value="<?php echo e(old('first_name')); ?>">
                    <?php if($errors->has('first_name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('first_name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input type="text" id="" class="form-control<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>" name="last_name" placeholder="Last Name" value="<?php echo e(old('last_name')); ?>">
                    <?php if($errors->has('last_name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('last_name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input type="email" id="inputEmail" class="form-control<?php echo e($errors->has('email') ? ' has-error' : ''); ?>" name="email" placeholder="Email address" value="<?php echo e(old('email')); ?>">
                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input type="text" id="" class="form-control<?php echo e($errors->has('zip') ? ' has-error' : ''); ?>" name="zip" placeholder="ZIP Code" value="<?php echo e(old('zip')); ?>">
                    <?php if($errors->has('zip')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('zip')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input type="password" id="inputPassword" class="form-control<?php echo e($errors->has('password') ? ' has-error' : ''); ?>" name="password" placeholder="Password">
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input type="password" id="" class="form-control<?php echo e($errors->has('confirm_password') ? ' has-error' : ''); ?>" name="password_confirmation" placeholder="Confirm Password">
                    <?php if($errors->has('confirm_password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('confirm_password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>


                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" id="tos-agree" checked="checked"> I agree to the TOS
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" id="submit-btn">Sign Up</button>
            </form>
        </div>
        <h2 class="sign-now">Already have an account?
            <span><a href="/login" class="no-decoration">Sign In</a></span></h2>
    </div>
    <script>
        $(document).ready(function () {
            $('#tos-agree').click(function () {
                if ($(this).prop('checked')) {
                    $('#submit-btn').removeAttr('disabled');
                }
                else {
                    $('#submit-btn').attr('disabled', 'disabled');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.access', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>