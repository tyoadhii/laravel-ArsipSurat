<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pengarsipan Dokumen</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.svg')); ?>" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <div id="app">
        <!-- start: SIDEBAR SECTION -->
        <?php echo $__env->make('layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end: SIDEBAR SECTION -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <?php echo $__env->yieldContent('content'); ?>

            <!-- start: FOOTER SECTION -->
            
            <!-- end: FOOTER SECTION -->
        </div>
    </div>
    <script src="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
        <?php if($message = Session::get('success')): ?>
            toastr.success("<?php echo e($message); ?>");
        <?php elseif($message = Session::get('error')): ?>
            toastr.error("<?php echo e($message); ?>");
        <?php endif; ?>
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel-ArsipSurat\resources\views/layouts/master.blade.php ENDPATH**/ ?>