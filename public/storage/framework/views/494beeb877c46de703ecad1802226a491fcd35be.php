
<?php $__env->startSection('content'); ?>
    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <section class="col-md-12">
                <h1><?php echo e($post->title); ?></h1>
                <h5 class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo e(url('/categories')); ?>"><?php echo e($post->category->name); ?></a>
                    <span class="date-time"><?php echo e($post->created_at); ?></span>
                </h5>
                <article class="bg-article p-3"><img class="float-right mb-2 ml-2" style="width: 18rem;" src="<?php echo e(Storage::url("/app/public/{$post->image}")); ?>" alt=""><?php echo e($post->body); ?></article>
                    <!-- <section>post not found!</section> -->
            </section>
        </section>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\blogSite\resources\views/detail.blade.php ENDPATH**/ ?>