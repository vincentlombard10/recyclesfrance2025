<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', Statamic::crumb(__('Configure Role'), __('Permissions'))); ?>

<?php $__env->startSection('content'); ?>

    <role-publish-form
        action="<?php echo e(cp_route('roles.update', $role->handle())); ?>"
        method="patch"
        :can-assign-super="<?php echo e(Statamic\Support\Str::bool($user->isSuper())); ?>"
        initial-title="<?php echo e($role->title()); ?>"
        initial-handle="<?php echo e($role->handle()); ?>"
        :initial-super="<?php echo e(Statamic\Support\Str::bool($super)); ?>"
        :initial-permissions="<?php echo e(json_encode($permissions)); ?>"
        breadcrumb-url="<?php echo e(cp_route('roles.index')); ?>"
        v-cloak
    >
    </role-publish-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/roles/edit.blade.php ENDPATH**/ ?>