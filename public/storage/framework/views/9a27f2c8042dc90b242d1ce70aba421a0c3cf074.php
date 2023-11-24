
<?php $__env->startSection('content'); ?>
<section class="container my-5">
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="row">
                <section class="col-12">
                    <h1><?php echo e($category->name); ?></h1>
                    <hr>
                </section>
            </section>
            <section class="row">
            <?php $__currentLoopData = $category->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <section class="col-md-4">
                    <section class="mb-2 overflow-hidden" style="max-height: 15rem; border-radius:10px;"><img class="img-fluid" src="<?php echo e(Storage::url("/app/public/{$post->image}")); ?>" alt=""></section>
                    <h2 class="h5 text-truncate"><?php echo e($post->title); ?></h2>
                    <p><?php echo e(substr($post->body,0,150).'...'); ?></p>
                    <p><a class="btn btn-primary" href="" role="button">View details »</a></p>      
                </section> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\blogSite\resources\views/category.blade.php ENDPATH**/ ?>