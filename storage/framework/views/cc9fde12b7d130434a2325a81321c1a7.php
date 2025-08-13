<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Roles')); ?>

<?php $__env->startSection('content'); ?>

    <?php if (! ($roles->isEmpty())): ?>

        <header class="flex items-center justify-between mb-6">
            <h1><?php echo e(__('Roles & Permissions')); ?></h1>
            <a href="<?php echo e(cp_route('roles.create')); ?>" class="btn-primary"><?php echo e(__('Create Role')); ?></a>
        </header>

        <role-listing
            :initial-rows="<?php echo e(json_encode($roles)); ?>"
            :initial-columns="<?php echo e(json_encode($columns)); ?>">
        </role-listing>

    <?php else: ?>

        <?php echo $__env->make('statamic::partials.empty-state', [
            'title' => __('Roles & Permissions'),
            'description' => __('statamic::messages.role_intro'),
            'svg' => 'empty/users',
            'button_text' => __('Create Role'),
            'button_url' => cp_route('roles.create'),
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php endif; ?>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Roles & Permissions'),
        'url' => Statamic::docsUrl('users#permissions')
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/roles/index.blade.php ENDPATH**/ ?>