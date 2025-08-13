<?php use function Statamic\trans as __; ?>

<?php $str = app('Statamic\Support\Str'); ?>

<?php $__env->startSection('title', __('Create User')); ?>

<?php $__env->startSection('content'); ?>
    <user-wizard
        route="<?php echo e(cp_route('users.store')); ?>"
        users-index-url="<?php echo e(cp_route('users.index')); ?>"
        users-create-url="<?php echo e(cp_route('users.create')); ?>"
        :can-create-supers="<?php echo e($str::bool($user->isSuper())); ?>"
        :can-assign-roles="<?php echo e($str::bool($user->can('assign roles'))); ?>"
        :can-assign-groups="<?php echo e($str::bool($user->can('assign user groups'))); ?>"
        :activation-expiry="<?php echo e($expiry); ?>"
        :separate-name-fields="<?php echo e($str::bool($separateNameFields)); ?>"
        :can-send-invitation="<?php echo e($str::bool($canSendInvitation)); ?>"
        :blueprint="<?php echo e(json_encode($blueprint)); ?>"
        :fields="<?php echo e(json_encode($fields)); ?>"
        :meta="<?php echo e(json_encode($meta)); ?>"
        :initial-values="<?php echo e(json_encode($values)); ?>"
    >
    </user-wizard>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/users/create.blade.php ENDPATH**/ ?>