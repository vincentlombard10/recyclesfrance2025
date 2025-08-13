<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Users')); ?>
<?php $__env->startSection('wrapper_class', 'max-w-full'); ?>

<?php $__env->startSection('content'); ?>

    <header class="flex items-center mb-6">
        <h1 class="flex-1">
            <?php echo e(__('Users')); ?>

        </h1>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('configure fields')): ?>
            <dropdown-list class="rtl:ml-2 ltr:mr-2">
                <dropdown-item :text="__('Edit Blueprint')" redirect="<?php echo e(cp_route('users.blueprint.edit')); ?>"></dropdown-item>
            </dropdown-list>
        <?php endif; ?>

        <?php if(Statamic::pro() && $user->can('create', 'Statamic\Contracts\Auth\User')): ?>
            <a href="<?php echo e(cp_route('users.create')); ?>" class="btn-primary rtl:mr-4 ltr:ml-4"><?php echo e(__('Create User')); ?></a>
        <?php endif; ?>
    </header>

    <user-listing
        listing-key="users"
        initial-sort-column="<?php echo e(config('statamic.users.sort_field', 'email')); ?>"
        initial-sort-direction="<?php echo e(config('statamic.users.sort_direction', 'asc')); ?>"
        :filters="<?php echo e($filters->toJson()); ?>"
        action-url="<?php echo e(cp_route('users.actions.run')); ?>"
    ></user-listing>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Users'),
        'url' => Statamic::docsUrl('users')
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/users/index.blade.php ENDPATH**/ ?>