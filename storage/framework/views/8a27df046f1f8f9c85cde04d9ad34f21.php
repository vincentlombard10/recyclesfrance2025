<?php use function Statamic\trans as __; ?>



<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('statamic::partials.outside-logo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="max-w-xs rounded shadow-lg flex items-center justify-center relative mx-auto">
        <div class="outside-shadow absolute inset-0"></div>
        <div class="card auth-card">
            <div class="text-center pb-4 mb-4">
                <h1 class="mb-4 text-lg text-gray-800 dark:text-white/80"><?php echo e(__('Forgot Your Password?')); ?></h1>
                <p class="text-sm text-gray dark:text-dark-175"><?php echo e(__('statamic::messages.forgot_password_enter_email')); ?></p>
            </div>

            <?php if(session('status')): ?>
                <div class="alert alert-success mb-6">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(cp_route('password.email')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-8">
                    <label for="email" class="mb-2"><?php echo e(__('Email Address')); ?></label>
                    <input id="email" type="text" class="input-text input-text" name="email" value="<?php echo e(old('email')); ?>" >

                    <?php $__errorArgs = ['email', 'user.forgot_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-red-500 text-xs mt-2"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button type="submit" class="btn-primary">
                    <?php echo e(__('Submit')); ?>

                </button>
            </form>

        </div>
    </div>

    <div class="w-full text-center mt-4 dark:mt-6">
        <a href="<?php echo e(cp_route('login')); ?>" class="forgot-password-link text-sm opacity-75 hover:opacity-100">
            <?php echo e(__('I remember my password')); ?>

        </a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::outside', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>