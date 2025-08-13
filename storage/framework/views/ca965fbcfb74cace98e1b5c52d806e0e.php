<div class="no-results md:mt-4 max-w-md mx-auto">
    <div class="card rounded-xl text-center p-6 lg:py-10">
            <h1 class="mb-8"><?php echo e($title); ?></h1>

            <div class="hidden md:block">
                <?php echo Statamic::svg($svg ?? 'empty/content') ?>
            </div>

            <?php if($description ?? false): ?>
            <p class="text-gray-700 leading-normal my-8 text-lg antialiased">
                <?php echo e($description); ?>

            </p>
            <?php endif; ?>

            
            <?php if (! (!isset($button_url) || (isset($can) && !$can))): ?>
                <a href="<?php echo e($button_url); ?>" class="btn-primary btn-lg"><?php echo e($button_text); ?></a>
            <?php endif; ?>
        </div>
</div>
<?php /**PATH /home/recycles/vendor/statamic/cms/src/Providers/../../resources/views/partials/empty-state.blade.php ENDPATH**/ ?>