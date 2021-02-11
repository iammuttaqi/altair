<?php $helper = app('App\Lib\Helpers'); ?>


<?php $__env->startSection('title', 'Category Edit'); ?>

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

            <?php echo Form::open(['url' => route("category_update",['category_id'=>$category->id, 'module_id'=>$module_id]), 'method' => 'POST', 'class' => 'user_edit_form', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']); ?>


            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-10-10 uk-width-large-10-10">
                    <div class="md-card">
                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Update Category</span></h2>
                                <div class="uk-width-medium-1-3">

                                </div>
                            </div>
                        </div>
                        <div class="user_content">
                            <div class="uk-margin-top">

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="modules_id">Module Name<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <select class="md-input" name="modules_id" id="modules_id" class="form-control" disabled>

                                            <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modules): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($modules->id); ?>" <?php if($modules->id == $category->modules_id): ?> selected readonly <?php endif; ?>><?php echo e($modules->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                        <?php if($errors->has('modules_id')): ?>
                                            <br/>
                                            <span style="color:orangered;"><?php echo $errors->first('modules_id'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <input type="hidden" name="modules_id" id="modules_id" value="<?php echo e($category->modules_id); ?>" >
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="category_name">Category Name<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="name">Category Name</label>
                                        <input class="md-input" type="text" id="category_name" name="category_name" value="<?php echo e($category->name); ?>" required="required" readonly>
                                        <?php if($errors->has('category_name')): ?>
                                            <br/>
                                            <span style="color:orangered;"><?php echo $errors->first('category_name'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-4-5">
                                        <table class="uk-table">
                                            <thead>
                                            <tr>
                                                <th colspan="3">Category Values Input Fields</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $category_input_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category_input_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($category_input_value->name); ?></td>
                                                    <td><?php echo $helper->setForCategoryValues($category['id'], $category_input_value['input_fields_id']); ?></td>
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
                                                <th colspan="3">All Sub Category Input Value Fields</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php $__currentLoopData = $input_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input_field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($input_field->name); ?></td>
                                                    <td><input type="checkbox" name="input_fields_id[<?php echo e($input_field->id); ?>]" id="input_fields_id_<?php echo e($input_field->id); ?>" value="<?php echo e($input_field->id); ?>" <?php echo e((isset($sub_category_input_field[$input_field->id]) ? 'checked' : '')); ?> data-md-icheck/> </td>
                                                    <td><input class="md-input" type="text" name="sub_cat_input_name[<?php echo e($input_field->id); ?>]" id="_cat_input_name<?php echo e($input_field->id); ?>" value="<?php echo e((isset($sub_category_input_field[$input_field->id]) ? $sub_category_input_field[$input_field->id] : '')); ?>"/> </td>
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
        $('#sidebar_dashboard_category_<?php echo e($module->id); ?>').addClass('act_item');
    </script>

    <script src="<?php echo e(asset('assets/js/pages/components_notifications.min.js')); ?> "></script>
    <script src="<?php echo e(asset('bower_components/ckeditor/ckeditor.js')); ?> "></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>