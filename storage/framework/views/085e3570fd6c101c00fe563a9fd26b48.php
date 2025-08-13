<div class="card p-0 overflow-hidden h-full">
    <div class="flex justify-between items-center py-4 px-4">
        <h2>
            <div class="flex items-center">
                <div class="h-6 w-6 rtl:ml-2 ltr:mr-2 text-gray-800 dark:text-dark-200">
                    <?php echo Statamic::svg('icons/light/assets') ?>
                </div>
                <?php if(count($containers) === 1): ?>
                    <span><?php echo e(__('statamic-images-missing-alt::images-missing-alt.title-for-container', ['container' => $containers[0]])); ?></span>
                <?php else: ?>
                    <span><?php echo e(__('statamic-images-missing-alt::images-missing-alt.title')); ?></span>
                <?php endif; ?>
            </div>
        </h2>
    </div>
    <div class="content px-4 pb-2">
        <p>
            <?php echo e(__('statamic-images-missing-alt::images-missing-alt.explanation')); ?>

        </p>
        <p class="font-bold">
            <?php echo e(trans_choice('statamic-images-missing-alt::images-missing-alt.count', $amount, ['amount' => $amount])); ?>

        </p>
    </div>

    <?php if($assets): ?>
        <table tabindex="0" class="data-table">
            <tbody tabindex="0">
    <?php endif; ?>
    <?php $__empty_1 = true; $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr class="sortable-row outline-none" tabindex="0">
            <td>
                <div class="flex items-center">
                    <div class="little-dot mr-2 bg-red-500"></div>
                    <a href="<?php echo e($asset['edit_url']); ?>" aria-label="<?php echo e(__('statamic-images-missing-alt::images-missing-alt.edit')); ?>"><?php echo e($asset['basename']); ?></a>
                </div>
            </td>
            <td class="actions-column"></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="content p-4">
            <p><?php echo e(__('statamic-images-missing-alt::images-missing-alt.done')); ?></p>
        </div>
    <?php endif; ?>
    <?php if($assets): ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php /**PATH /home/recycles/vendor/teamnovu/statamic-images-missing-alt/resources/views/widgets/images-missing-alt.blade.php ENDPATH**/ ?>