<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', Statamic::crumb($group->title(), 'User Group')); ?>
<?php $__env->startSection('wrapper_class', 'max-w-full'); ?>

<?php $__env->startSection('content'); ?>

<header class="mb-6">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('user-groups.index'),
            'title' => __('User Groups')
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="flex items-center">
            <h1 v-pre class="flex-1"><?php echo e(__($group->title())); ?></h1>
            <dropdown-list class="rtl:ml-2 ltr:mr-2">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $group)): ?>
                    <dropdown-item :text="__('Edit User Group')" redirect="<?php echo e($group->editUrl()); ?>"></dropdown-item>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $group)): ?>
                    <dropdown-item :text="__('Delete User Group')" class="warning" @click="$refs.deleter.confirm()">
                        <resource-deleter
                            ref="deleter"
                            resource-title="<?php echo e($group->title()); ?>"
                            route="<?php echo e(cp_route('user-groups.destroy', $group->handle())); ?>"
                            redirect="<?php echo e(cp_route('user-groups.index')); ?>"
                        ></resource-deleter>
                    </dropdown-item>
                <?php endif; ?>
            </dropdown-list>
        </div>
    </header>

    <user-listing
        listing-key="usergroup-users"
        group="<?php echo e($group->id()); ?>"
        :filters="<?php echo e($filters->toJson()); ?>"
        :allow-filter-presets="false"
        action-url="<?php echo e(cp_route('users.actions.run')); ?>"
    ></user-listing>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/usergroups/show.blade.php ENDPATH**/ ?>