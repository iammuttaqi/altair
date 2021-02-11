<?php $__env->startSection('title', 'Input Field'); ?>

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
                                <h2 class="heading_b"><span class="uk-text-truncate">Input Field List</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-overflow-container uk-margin-bottom">
                                <table class="uk-table" cellspacing="0" width="100%" id="data_table" >
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Input Field Name</th>
                                        <th>Code</th>
                                        <th>Slug Name</th>
                                        <th>Type</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Input Field Name</th>
                                        <th>Code</th>
                                        <th>Slug Name</th>
                                        <th>Type</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  $i=1;  ?>
                                        <?php $__currentLoopData = $input_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input_field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i++); ?></td>
                                                <td><?php echo e($input_field->name); ?></td>
                                                <td><?php echo e($input_field->code); ?></td>
                                                <td><?php echo e($input_field->slug_name); ?></td>
                                                <td><?php echo e($input_field->type == 1 ? 'File' : ''); ?></td>
                                                <td class="uk-text-center">
                                                    <a href="<?php echo route('inputfield_edit', $input_field->id); ?>" class="batch-edit"><i title="Edit" class=" material-icons">&#xE254;</i></a>
                                                    <a onclick="deleterow(this);return false;" href="<?php echo e(route('inputfield_delete', $input_field->id)); ?>">
                                                        <i data-uk-tooltip="{pos:'top'}" title="Delete" class="material-icons">&#xE872;</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Add branch plus sign -->

                            <div class="md-fab-wrapper branch-create">
                                <a id="add_branch_button" href="<?php echo route('inputfield_create'); ?>" class="md-fab md-fab-accent branch-create">
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
            $("#sidebar_input_field").addClass('current_section');
        }

        function deleterow(link) {

            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }

        $('#sidebar_input_field').addClass('current_section');

    </script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_footer_js'); ?>
    <script type="text/javascript">
        $('#data_table').DataTable({
            "pageLength": 50
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>