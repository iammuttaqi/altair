<?php $__env->startSection('title', 'Further Sub Category Create'); ?>

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

            <?php echo Form::open(['url' => route("further_subcategory_store"), 'method' => 'POST', 'class' => 'user_edit_form', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']); ?>


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
                                    <h2 class="heading_b"><span class="uk-text-truncate">Create Further Sub Category</span></h2>
                                    <div class="uk-width-medium-1-3">

                                    </div>
                                </div>
                            </div>
                            <div class="user_content">
                                <div class="uk-margin-top">
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-5  uk-vertical-align">
                                            <label class="uk-vertical-align-middle" for="sub_category_id">Sub Category Name<span style="color: red;" class="asterisc">*</span></label>
                                        </div>
                                        <div class="uk-width-medium-2-5">
                                            <select class="md-input" name="sub_category_id" id="sub_category_id" class="form-control" >
                                                <option selected >Select Subcategory</option>
                                                <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($sub_category->id); ?>"><?php echo e($sub_category->name); ?> <?php echo e('('.$sub_category->category_name.')'); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('sub_category_id')): ?>
                                                <br/>
                                                <span style="color:orangered;"><?php echo $errors->first('sub_category_id'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_footer_js'); ?>
    <script>
        $('#sub_category_id').change(function() {
            var moduleId   = $('#module_id').val();
            var subCategoryId = $('#sub_category_id').val();
            var baseUrl    = '';
            var extendpath = 'further-sub-category/create-further-subcat';
            window.location.replace(baseUrl+'/'+extendpath+'/'+moduleId+'/'+subCategoryId);
        });
    </script>
    <script>
        $('#<?php echo e($module->slug."_".$module->id); ?>').addClass('current_section');
        $('#sidebar_dashboard_further_sub_category_<?php echo e($module->id); ?>').addClass('act_item');
    </script>
    <script src="<?php echo e(asset('assets/js/pages/components_notifications.min.js')); ?> "></script>
    <script src="<?php echo e(asset('bower_components/ckeditor/ckeditor.js')); ?> "></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>