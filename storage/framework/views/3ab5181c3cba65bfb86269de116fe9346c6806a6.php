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

            <?php echo Form::open(['url' => route("sub_category_store"), 'method' => 'POST', 'class' => 'user_edit_form', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']); ?>


                <?php if(isset($module_id)): ?>
                    <input type="hidden" name="module_id" value="<?php echo e($module_id); ?>" />
                <?php endif; ?>
                <?php if(isset($module_id)): ?>
                    <input type="hidden" name="category_id" value="<?php echo e($categoryId); ?>" />
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
                                        <select class="md-input" name="category_id" id="category_id" class="form-control" disabled>
                                            <option value="<?php echo e($category->id); ?>"selected ><?php echo e($category->name); ?></option>
                                        </select>
                                       
                                    </div>
                                </div>

                                <input type="hidden" name="category_id" id="category_id" value="<?php echo e($category->id); ?>">

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="sub_category_name">Sub Category Name<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="name">Sub Category Name</label>
                                        <input class="md-input" type="text" id="sub_category_name" name="sub_category_name" value="<?php echo e(old('sub_category_name')); ?>" required="required">
                                        <?php if($errors->has('sub_category_name')): ?>
                                            <br/>
                                            <span style="color:orangered;"><?php echo $errors->first('sub_category_name'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-5-5">
                                        <table class="uk-table">
                                            <thead>
                                            <tr>
                                                <th colspan="3">Sub Category Values Input Fields</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $sub_category_input_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category_input_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($sub_category_input_value->sub_cat_input_name); ?></td>
                                                    <td><?php echo $sub_category_input_value->inputFieldId->code; ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                

                                
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-2-5">
                                        <table class="uk-table">
                                            <thead>
                                            <tr>
                                                <th colspan="3">All Further Sub Category Input Value Fields</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $input_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input_field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($input_field->name); ?></td>
                                                    <td><input type="checkbox" name="input_fields_id[ <?php echo e($input_field->id); ?> ]" id="input_fields_id_<?php echo e($input_field->id); ?>" value="<?php echo e($input_field->id); ?>" data-md-icheck/> </td>
                                                    <td><input class="md-input" type="text" name="further_sub_cat_input_name[ <?php echo e($input_field->id); ?> ]" id="further_sub_cat_input_name<?php echo e($input_field->id); ?>" value=""/> </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                

                                <div class="uk-grid uk-ma" data-uk-grid-margin>
                                    <div class="uk-width-1-1 uk-float-left">
                                        <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
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
        $('#<?php echo e($module->slug."_".$module->id); ?>').addClass('current_section');
        $('#sidebar_dashboard_sub_category_<?php echo e($module->id); ?>').addClass('act_item');
    </script>

    <script src="<?php echo e(asset('assets/js/pages/components_notifications.min.js')); ?> "></script>
    <script src="<?php echo e(asset('bower_components/ckeditor/ckeditor.js')); ?> "></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>