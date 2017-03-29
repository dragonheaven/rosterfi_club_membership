<?php $__env->startSection('content'); ?>
    <div class="container" id="login-form">
        <div class="card card-container" style="height: auto">
            <h2>Sign in to your account</h2>
            <br>
            <form class="form-signin" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <input type="email" id="inputEmail" class="form-control<?php echo e($errors->has('email') ? ' has-error' : ''); ?>" name="email" placeholder="Email address" autofocus>
                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
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
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                <hr class="separator-login">
                <a href="<?php echo e(url('/password/reset')); ?>">Forgot your password?</a>
            </form>
        </div>
        <h2 class="sign-now">Don’t have an account yet?
            <span><a href="/register" class="no-decoration">Sign Up</a></span></h2>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.access', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>