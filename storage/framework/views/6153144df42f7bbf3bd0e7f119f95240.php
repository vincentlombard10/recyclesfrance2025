<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Create User Group')); ?>

<?php $__env->startSection('content'); ?>

    <user-group-publish-form
        :actions="<?php echo e(json_encode($actions)); ?>"
        method="post"
        publish-container="base"
        :initial-title="__('Create Group')"
        :initial-fieldset="<?php echo e(json_encode($blueprint)); ?>"
        :initial-values="<?php echo e(json_encode($values)); ?>"
        :initial-meta="<?php echo e(json_encode($meta)); ?>"
        :is-creating="true"
    ></user-group-publish-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/usergroups/create.blade.php ENDPATH**/ ?>