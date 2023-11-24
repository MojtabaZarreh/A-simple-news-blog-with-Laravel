
<?php $__env->startSection('content'); ?>
                <section class="mb-2 d-flex justify-content-between align-items-center">
                    <h2 class="h4">Articles</h2>
                    <a href="<?php echo e(url('panel/posts/create')); ?>" class="btn btn-sm btn-success">Create</a>
                </section> 
                <section class="table-responsive">
                    <table class="table table-striped table-">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>image</th>
                            <th>title</th>
                            <th>Category</th>
                            <th>body</th>
                            <th>status</th>
                            <th>setting</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                                <td><?php echo e($post->id); ?></td>
                                <td><img style="width: 70px; height: 70px;" src="<?php echo e(Storage::url("/app/public/{$post->image}")); ?>" alt="Image"></td>
                                <td><?php echo e($post->title); ?></td>
                                <td><?php echo e($post->category->name); ?></td>
                                <td><?php echo e(substr($post->body,0,30)); ?></td>
                                <td>
                                    <?php if($post->status == 10): ?>
                                        <span class="text-success">enable</span> 
                                    <?php else: ?>
                                        <span class="text-danger">disable</span> 
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('changeStaus', $post->id)); ?>" class="btn btn-warning btn-sm">Change status</a>
                                    <a href="<?php echo e(route('postedit', $post->id)); ?>" class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?php echo e(route('postdelete', $post->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\blogSite\resources\views/panel/post/index.blade.php ENDPATH**/ ?>