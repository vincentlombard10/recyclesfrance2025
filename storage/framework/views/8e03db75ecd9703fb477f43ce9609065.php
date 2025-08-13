<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', Statamic::crumb(__('Create Role'), __('Roles & Permissions'))); ?>

<?php $__env->startSection('content'); ?>

    <role-publish-form
        action="<?php echo e(cp_route('roles.store')); ?>"
        method="post"
        :can-assign-super="<?php echo e(Statamic\Support\Str::bool($user->isSuper())); ?>"
        :initial-permissions="<?php echo e(json_encode($permissions)); ?>"
        breadcrumb-url="<?php echo e(cp_route('roles.index')); ?>"
        index-url="<?php echo e(cp_route('roles.index')); ?>"
        v-cloak
    ></role-publish-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/roles/create.blade.php ENDPATH**/ ?>