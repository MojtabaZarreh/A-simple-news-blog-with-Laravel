<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP tutorial</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap.min.css')); ?>" media="all" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>" media="all" type="text/css">
</head>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<body>
    <section id="app">
        <section style="height: 100vh; background-color: #138496;" class="d-flex justify-content-center align-items-center">
            <section style="width: 20rem;">
                <h1 class="bg-warning rounded-top px-2 mb-0 py-3 h5">Register</h1>
                <section class="bg-light my-0 px-2"><small class="text-danger"></small></section>
                <form class="pt-3 pb-1 px-2 bg-light rounded-bottom" method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                <section class="form-group">
                        <label for="email" :value="__('Email')">Email</label>
                        <input type="email" class="form-control" name="email":value="old('email')" id="email" placeholder="email ...">
                    </section>
                    <section class="form-group">
                        <label for="name" :value="__('Name')">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name...">
                    </section>
                    <section class="form-group">
                        <label for="password" :value="__('Password')">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password ..." required autocomplete="new-password">
                    </section>
                    <section class="form-group">
                        <label for="password_confirmation" :value="__('Confirm Password')">Confirm</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="confirm ..." require>
                    </section>
                    <section class="mt-4 mb-2 d-flex justify-content-between">
                        <input type="submit" class="btn btn-success btn-sm" value="register">
                        <a class="" href="">login</a>
                    </section>
                </form>
            </section>
        </section>

    </section>
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\wamp64\www\blogSite\resources\views/auth/register.blade.php ENDPATH**/ ?>