<li class="<?php echo e($item->isActive() ? 'current' : ''); ?>">
    <a href="<?php echo e($item->url()); ?>">
        <i><?php echo $item->svg(); ?></i><span><?php echo e(__($item->name())); ?></span>
        <span class="badge-sm bg-red-500 dark:bg-blue-900 rtl:mr-2 ltr:ml-2"><?php echo e(Statamic\Facades\Stache::duplicates()->count()); ?></span>
    </a>
</li>
<?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/nav/duplicates.blade.php ENDPATH**/ ?>