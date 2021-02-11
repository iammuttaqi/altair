<?php $helper = app('App\Lib\Helpers'); ?>



<?php $__env->startSection('title', 'Further Sub Category '); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.backend.includes.notice', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
        <div class="uk-width-large-10-10">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-10-10">
                    <div class="md-card">

                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Further Sub Category List</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-overflow-container uk-margin-bottom">
                                <div style="padding: 5px;margin-bottom: 10px;" class="dt_colVis_buttons"></div>
                                <table class="uk-table" cellspacing="0" width="100%" id="data_table" >
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Further Sub Category Name</th>
                                        <th>Sub Category Name</th>
                                        <th>Category Name</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Further Sub Category Name</th>
                                        <th>Sub Category Name</th>
                                        <th>Category Name</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i=1; ?>
                                        <?php $__currentLoopData = $further_sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $further_sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i++); ?></td>
                                                <td><?php echo e($further_sub_category['name']); ?></td>
                                                <td><?php echo e($further_sub_category->subCategoryId['name']); ?></td>
                                                <td><?php echo e($helper->getCategoryName($further_sub_category->subCategoryId['id'])); ?></td>
                                                <td><?php echo e($further_sub_category['created_at']); ?></td>
                                                <td><?php echo e($further_sub_category['updated_at']); ?></td>
                                                <td class="uk-text-center">
                                                    <a href="<?php echo route('further_subcategory_edit',['module_id'=>$module_id, 'sub_category_id' => $further_sub_category->subCategoryId['id'], 'further_sub_category_id'=>$further_sub_category->id]); ?>" class="batch-edit"><i title="Edit" class=" material-icons">&#xE254;</i></a>
                                                    <a onclick="deleterow(this);return false;" href="<?php echo e(route('further_subcategory_delete',['module_id'=>$module_id, 'further_sub_category_id'=>$further_sub_category->id])); ?>"><i data-uk-tooltip="{pos:'top'}" title="Delete" class="material-icons">&#xE872;</i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Add branch plus sign -->

                            <div class="md-fab-wrapper branch-create">
                                <a id="add_branch_button" href="<?php echo route('further_subcategory_create', $module_id); ?>" class="md-fab md-fab-accent branch-create">
                                    <i class="material-icons">&#xE145;</i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload =  function (ev) {
            $("#sidebar_furthersubcategory").addClass('current_section');
        }

        function deleterow(link) {

            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }
        $('#sidebar_furthersubcategory').addClass('current_section');

    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_footer_js'); ?>
<script type="text/javascript">
    $('#data_table').DataTable({
        "pageLength": 50
    });


    $('#<?php echo e($module->slug."_".$module->id); ?>').addClass('current_section');
    $('#sidebar_dashboard_further_sub_category_<?php echo e($module->id); ?>').addClass('act_item');

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>