

<?php $__env->startSection('title','Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    
    <p style="text-align: center">Welcome <a><?php echo e(Auth::user()->name); ?></a></p>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_footer_js'); ?>
    <script>

        $('#data_table_1').DataTable({
            "pageLength": 50
        });

        $('#data_table_2').DataTable({
            "pageLength": 50
        });

        $('#data_table_3').DataTable({
            "pageLength": 50
        });

        $('#sidebar_dashboard').addClass('current_section');
        // load parsley config (altair_admin_common.js)
        altair_forms.parsley_validation_config();
    </script>
    <script src="bower_components/parsleyjs/dist/parsley.min.js"></script>
    <script src="<?php echo e(asset('assets/js/pages/components_notifications.min.js')); ?> "></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\altair\resources\views/welcome.blade.php ENDPATH**/ ?>