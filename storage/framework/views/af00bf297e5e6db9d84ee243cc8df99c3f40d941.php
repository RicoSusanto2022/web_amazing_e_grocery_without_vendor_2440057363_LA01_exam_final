<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('CSS/style.css')); ?>">
    <title>Amazing E Grocery</title>
</head>
<body>
    <?php if(!Auth::user()): ?>
        <?php echo $__env->make('Navbar.guest_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php if(Auth::user()->role_id == 1): ?>
            <?php echo $__env->make('Navbar.user_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
            <?php echo $__env->make('Navbar.admin_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <?php endif; ?>
    <div class="px-5 py-3 mb-3" style="min-height: 90vh">
        <?php echo $__env->yieldContent('web_content'); ?>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\BINUS5\UJIAN_AKHIR_SEMESTER_5\WebProgggg\JAWABAN\web_amazing_e_grocery\resources\views/web_template.blade.php ENDPATH**/ ?>