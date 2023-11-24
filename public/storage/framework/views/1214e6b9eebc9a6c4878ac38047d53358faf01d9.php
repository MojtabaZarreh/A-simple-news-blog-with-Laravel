

<?php $__env->startSection('content'); ?>
        <section class="container-fluid">
            <section class="row">
                <section class="col-md-2 p-0">
                </section>
                <section class="col-md-10 pt-3">
                    <form action="<?php echo e(url('panel/category/store')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                        <section class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="name ...">
                        </section>
                        <section class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </section>
                    </form>
                </section>
            </section>
        </section>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\blogSite\resources\views/panel/category/create.blade.php ENDPATH**/ ?>