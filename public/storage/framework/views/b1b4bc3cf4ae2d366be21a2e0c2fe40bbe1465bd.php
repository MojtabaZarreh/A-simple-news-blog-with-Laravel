

<?php $__env->startSection('content'); ?>
<section class="mb-2 d-flex justify-content-between align-items-center">
                    <h2 class="h4">Categories</h2>
                    <a href="<?php echo e(url('panel/category/create')); ?>" class="btn btn-sm btn-success">Create</a>
                </section>
                <section class="table-responsive">
                    <table class="table table-striped table-">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>setting</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($category->id); ?></td>
                                <td><?php echo e($category->name); ?></td>
                                <td>
                                    <a href="<?php echo e(route('edit', ['id'=>$category->id])); ?>" class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?php echo e(route('delete', $category->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\blogSite\resources\views/panel/category/index.blade.php ENDPATH**/ ?>