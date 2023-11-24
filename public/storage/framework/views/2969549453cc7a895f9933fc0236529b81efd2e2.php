<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap.min.css')); ?>">
</head>
<body>
<section id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-red">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Panel</a>
                    <section class="collapse navbar-collapse" id="navbarSupportedContent"></section>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="text-decoration-none text-white" href="<?php echo e(url('/logout')); ?>">logout</a>
    </nav>
    <section class="container-fluid">
        <section class="row">
            <section class="col-md-2 p-0">
            <section class="sidebar">
                <section class="sidebar-link">
                    <a href="<?php echo e(url('panel/')); ?>">panel</a>
                </section>
                <section class="sidebar-link">
                    <a href="<?php echo e(url('panel/category/')); ?>">category</a>
                </section>
                <section class="sidebar-link">
                    <a href="<?php echo e(url('panel/posts/')); ?>">post</a>
                </section>
            </section>
            </section>
            <section class="col-md-10 pt-3">
                <?php echo $__env->yieldContent('content'); ?>
            </section>
        </section>
    </section>
</section>
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\wamp64\www\blogSite\resources\views/layouts/layout.blade.php ENDPATH**/ ?>