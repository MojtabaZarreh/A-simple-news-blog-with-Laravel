<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News blog</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/styleh.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstraph.min.css')); ?>">
</head>
<body>
<section id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-blue ">

        <a class="navbar-brand " href="<?php echo e(url('/')); ?>" >News blog</a>
        <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent ">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active ">
                    <a class="nav-link" href="<?php echo e(url('/categories')); ?>">Categories<span class="sr-only ">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href=" "></a>
                </li>
            </ul>
        </div>

<section class="d-inline">
    <?php if(auth()->guard()->check()): ?>
        <span class="text-decoration-none text-white px-2"><?php echo e(Auth::user()->name); ?></span>
        <a class="text-decoration-none text-white px-2" href="<?php echo e(route('logout')); ?>">logout</a>
    <?php else: ?>
        <a class="text-decoration-none text-white px-2" href="<?php echo e(route('login')); ?>">Login</a>
        <a class="text-decoration-none text-white px-2" href="<?php echo e(route('register')); ?>">Register</a>
    <?php endif; ?>
</section>
</nav>

<?php echo $__env->yieldContent('content'); ?>
</section>
<script src="<?php echo e(asset('assets/js/jqueryh.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstraph.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\wamp64\www\blogSite\resources\views/layouts/homelayout.blade.php ENDPATH**/ ?>