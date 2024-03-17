<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Home Page</h1>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('css'); ?>
    <style>
        .page-title{
            padding: 10vh;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PHP_xampp\1 NEW XAMPP\htdocs\Laravel\Projects\test\resources\views/pages/pages/home/index.blade.php ENDPATH**/ ?>