<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Navigation')); ?>

<?php $__env->startSection('content'); ?>

    <?php if (! ($navs->isEmpty())): ?>

        <header class="flex items-center justify-between mb-6">
            <h1><?php echo e(__('Navigation')); ?></h1>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', 'Statamic\Contracts\Structures\Nav')): ?>
                <a href="<?php echo e(cp_route('navigation.create')); ?>" class="btn-primary"><?php echo e(__('Create Navigation')); ?></a>
            <?php endif; ?>
        </header>

        <navigation-listing
            :initial-rows="<?php echo e(json_encode($navs)); ?>">
        </navigation-listing>

    <?php else: ?>

        <?php echo $__env->make('statamic::partials.empty-state', [
            'title' => __('Navigation'),
            'description' => __('statamic::messages.navigation_configure_intro'),
            'svg' => 'empty/navigation',
            'button_text' => __('Create Navigation'),
            'button_url' => cp_route('navigation.create'),
            'can' => $user->can('create', 'Statamic\Contracts\Structures\Nav')
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php endif; ?>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Navigation'),
        'url' => Statamic::docsUrl('navigation')
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/navigation/index.blade.php ENDPATH**/ ?>