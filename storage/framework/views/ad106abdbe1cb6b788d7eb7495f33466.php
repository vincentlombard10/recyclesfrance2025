<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Unauthorized')); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('statamic::partials.outside-logo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="max-w-xs rounded shadow-lg flex items-center justify-center relative mx-auto">
    <div class="outside-shadow absolute inset-0"></div>
    <div class="card auth-card">
        <div class="mb-6"><?php echo e(__('Unauthorized')); ?></div>
        <?php if(auth()->guard()->check()): ?>
            <a class="btn-primary" href="<?php echo e(cp_route('logout')); ?>?redirect=<?php echo e($redirect); ?>"><?php echo e(__('Log out')); ?></a>
        <?php else: ?>
            <a class="btn-primary" href="<?php echo e(cp_route('login')); ?>"><?php echo e(__('Log in')); ?></a>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::outside', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/auth/unauthorized.blade.php ENDPATH**/ ?>