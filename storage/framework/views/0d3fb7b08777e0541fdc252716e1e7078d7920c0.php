<?php $__env->startSection('title', 'Sub Category Create'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.backend.includes.notice', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="uk-grid" ng-controller="InvoiceController">
        <div class="uk-width-large-10-10">
            <?php if(Session::has('msg')): ?>
                <div class="uk-alert uk-alert-success" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    <?php echo Session::get('msg'); ?>

                </div>
            <?php endif; ?>

            <?php if(isset($module_id)): ?>
                <input type="hidden" name="module_id" id="module_id" value="<?php echo e($module_id); ?>" />
            <?php endif; ?>

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-10-10 uk-width-large-10-10">
                    <div class="md-card">
                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Create New Sub Category</span></h2>
                                <div class="uk-width-medium-1-3">

                                </div>
                            </div>
                        </div>
                        <div class="user_content">
                            <div class="uk-margin-top">

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="category_id">Category Name<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <select class="md-input" name="category_id" id="category_id" class="form-control">
                                            <option value="0" selected>Select Category</option>
                                            <?php $__currentLoopData = $categoryies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>" ><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if($errors->has('category_id')): ?>
                                            <br/>
                                            <span style="color:orangered;"><?php echo $errors->first('category_id'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_footer_js'); ?>
    <script>
        $('#category_id').change(function() {
            var moduleId   = $('#module_id').val();
            var categoryId = $('#category_id').val();
            var baseUrl    = '';
            var extendpath = 'sub-category/create-subcat';
            window.location.replace(baseUrl+'/'+extendpath+'/'+moduleId+'/'+categoryId);
        });
    </script>
    <script>
        $('#<?php echo e($module->slug."_".$module->id); ?>').addClass('current_section');
        $('#sidebar_dashboard_sub_category_<?php echo e($module->id); ?>').addClass('act_item');
    </script>

    <script src="<?php echo e(asset('assets/js/pages/components_notifications.min.js')); ?> "></script>
    <script src="<?php echo e(asset('bower_components/ckeditor/ckeditor.js')); ?> "></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>