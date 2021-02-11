<script>
    function notify(ele){

        ele.style.display = "none";
    }


</script>


      <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-1-1">
                <?php if(Session::has('info')): ?>
                <div class="uk-alert uk-alert-info" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    <?php echo e(Session::get('info')); ?>

                </div>
               <?php endif; ?>
                <?php if(Session::has('danger')): ?>
                <div class="uk-alert uk-alert-danger" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    <?php echo e(Session::get('danger')); ?>

                </div>
                <?php endif; ?>
              <?php if(Session::has('warning')): ?>
                <div class="uk-alert uk-alert-warning" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    <?php echo e(Session::get('warning')); ?>

                </div>
              <?php endif; ?>
                    <?php if(Session::has('success')): ?>
                <div class="uk-alert uk-alert-success" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    <?php echo e(Session::get('success')); ?>

                </div>
                  <?php endif; ?>
                    <?php if(Session::has('alert')): ?>
                <div class="uk-alert uk-alert" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    <?php echo e(Session::get('alert')); ?>

                </div>
                    <?php endif; ?>
                <?php if(Session::has('message')): ?>
                <div class="uk-alert uk-alert-large" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    <h4 class="heading_b">Notice</h4>
                    <?php echo e(Session::get('message')); ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
<?php /**PATH C:\laragon\www\altair\resources\views/layouts/backend/includes/notice.blade.php ENDPATH**/ ?>