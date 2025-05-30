
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; <?php echo e($pengaturan->name ?? config('app.name')); ?></title>
    <?php echo $__env->make('includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3">
                        <div class="login-brand">
                            <img src="<?php echo e(isset($pengaturan) && $pengaturan->logo ? URL::asset($pengaturan->logo) : 'https://via.placeholder.com/300'); ?>" alt="logo" width="100" class="shadow-lights">
                            <p class="mt-4"><?php echo e($pengaturan->name ?? config('app.name')); ?></p>
                        </div>
                        <?php if(session()->has('info')): ?>
                        <div class="alert alert-primary">
                            <?php echo e(session()->get('info')); ?>

                        </div>
                        <?php endif; ?>
                        <?php if(session()->has('status')): ?>
                        <div class="alert alert-info">
                            <?php echo e(session()->get('status')); ?>

                        </div>
                        <?php endif; ?>
                        <?php echo $__env->yieldContent('content'); ?>
                        <div class="simple-footer">
                            Copyright &copy; Pixel Overture <?php echo e(date('Y')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php echo $__env->make('includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Sistem-Informasi-Sekolah-master\resources\views/layouts/auth.blade.php ENDPATH**/ ?>