<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('User Groups')); ?>

<?php $__env->startSection('content'); ?>

    <?php if (! ($groups->isEmpty())): ?>

        <div class="flex mb-6">
            <h1 class="flex-1">
                <?php echo e(__('User Groups')); ?>

            </h1>
            <a href="<?php echo e(cp_route('user-groups.create')); ?>" class="btn-primary"><?php echo e(__('Create User Group')); ?></a>
        </div>

        <user-group-listing :initial-rows="<?php echo e(json_encode($groups)); ?>"></user-group-listing>

    <?php else: ?>

        <?php echo $__env->make('statamic::partials.empty-state', [
            'title' => __('User Groups'),
            'description' => __('statamic::messages.user_groups_intro'),
            'svg' => 'empty/users',
            'button_text' => __('Create User Group'),
            'button_url' => cp_route('user-groups.create'),
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php endif; ?>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('User Groups'),
        'url' => Statamic::docsUrl('users#user-groups')
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/usergroups/index.blade.php ENDPATH**/ ?>