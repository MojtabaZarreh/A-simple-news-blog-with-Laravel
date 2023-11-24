
<?php $__env->startSection('content'); ?>
                <form action="<?php echo e(route('update', $category->id)); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name ..." 
                        value="<?php echo e($category->name); ?>">
                    </section>
                    <section class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </section>
                </form>

            </section>
        </section>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\blogSite\resources\views/panel/category/edit.blade.php ENDPATH**/ ?>