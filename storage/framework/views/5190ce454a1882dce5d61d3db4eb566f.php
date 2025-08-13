<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Edit User')); ?>

<?php $__env->startSection('content'); ?>

    <user-publish-form
        :actions="<?php echo e(json_encode($actions)); ?>"
        method="patch"
        publish-container="base"
        initial-title="<?php echo e($title); ?>"
        initial-reference="<?php echo e($reference); ?>"
        :initial-fieldset="<?php echo e(json_encode($blueprint)); ?>"
        :initial-values="<?php echo e(json_encode($values)); ?>"
        :initial-meta="<?php echo e(json_encode($meta)); ?>"
        :can-edit-password="<?php echo e(Statamic\Support\Str::bool($canEditPassword)); ?>"
        :can-edit-blueprint="<?php echo e(Statamic\Support\Str::bool($user->can('configure fields'))); ?>"
        :requires-current-password="<?php echo e(Statamic\Support\Str::bool($requiresCurrentPassword)); ?>"
        :initial-item-actions="<?php echo e(json_encode($itemActions)); ?>"
        item-action-url="<?php echo e(cp_route('users.actions.run')); ?>"
    ></user-publish-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/users/edit.blade.php ENDPATH**/ ?>