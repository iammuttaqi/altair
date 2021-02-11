<?php $__env->startSection('title', 'Module Create'); ?>

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

            <?php echo Form::open(['url' => route("module_store"), 'method' => 'POST', 'class' => 'user_edit_form', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']); ?>

            
            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-10-10 uk-width-large-10-10">
                    <div class="md-card">

                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Create New Module</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-margin-top">

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="module_name">Module Name<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="module_name">Module Name</label>
                                        <input class="md-input" type="text" id="module_name" name="module_name" value="" required>
                                        <?php if($errors->has('module_name')): ?>
                                            <br/>
                                            <span style="color:orangered;"><?php echo $errors->first('module_name'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="icon_code">Module Icon<span style="color: red;" class="asterisc"></span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="icon_code">Module Icon</label>
                                        <input class="md-input" type="text" id="icon_code" name="icon_code" value="" required>
                                        <?php if($errors->has('icon_code')): ?>
                                            <br/>
                                            <span style="color:orangered;"><?php echo $errors->first('module_name'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="name">Show on Expand<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <p>
                                            <input type="checkbox" name="category" id="category" value="1" data-md-icheck/>
                                            <label for="category" class="inline-label">Category</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" name="sub_category" id="sub_category" value="1" data-md-icheck/>
                                            <label for="sub_category" class="inline-label">Sub Category</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" name="further_sub_category" id="further_sub_category" value="1" data-md-icheck/>
                                            <label for="further_sub_category" class="inline-label">Further Sub Category</label>
                                        </p>
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle">All Input Fields<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <table class="uk-table">
                                            <thead>
                                            <tr>
                                                <th colspan="3">All Input Fields</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $input_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input_field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($input_field->name); ?></td>
                                                    <td><input type="checkbox" name="input_fields_id[<?php echo e($input_field->id); ?>]" id="input_fields_id_<?php echo e($input_field->id); ?>" value="<?php echo e($input_field->id); ?>" data-md-icheck/></td>
                                                    <td><input class="md-input" type="text" name="name[<?php echo e($input_field->id); ?>]" id="name<?php echo e($input_field->id); ?>" value=""/></td>
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
        $('#sidebar_module').addClass('current_section');
    </script>

    <script src="<?php echo e(asset('assets/js/pages/components_notifications.min.js')); ?> "></script>
    <script src="<?php echo e(asset('bower_components/ckeditor/ckeditor.js')); ?> "></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>