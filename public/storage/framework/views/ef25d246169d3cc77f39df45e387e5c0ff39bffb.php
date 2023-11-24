
<?php $__env->startSection('content'); ?>
    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <section class="col-md-4">
                    <section class="mb-2 overflow-hidden" style="max-height: 15rem; border-radius:10px;"><img class="img-fluid" src="<?php echo e(Storage::url("/app/public/{$post->image}")); ?>" alt=""></section>
                    <h2 class="h5 text-truncate"><?php echo e($post->title); ?></h2>
                    <p><?php echo e(substr($post->body,0,150).'...'); ?></p>
                    <p><a class="btn btn-primary" href="<?php echo e(route('showdetail', $post->id)); ?>" role="button">View details »</a></p>      
                </section>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
        </section>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.homelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\blogSite\resources\views/home.blade.php ENDPATH**/ ?>