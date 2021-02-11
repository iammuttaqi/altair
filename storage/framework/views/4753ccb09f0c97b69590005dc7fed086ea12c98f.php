<?php $__env->startSection('title', 'Profile '); ?>

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
                                <h2 class="heading_b"><span class="uk-text-truncate"> Profile List</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-overflow-container uk-margin-bottom">
                                <div style="padding: 5px;margin-bottom: 10px;" class="dt_colVis_buttons"></div>
                                <table class="uk-table" cellspacing="0" width="100%" id="data_table" >
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Company Name</th>
                                        <!--<th>Company Address</th>-->
                                        <th>Company Email</th>
                                        <th>Company Phone</th>
                                        <!--<th>Company Slogan</th>-->
                                        <th>Publication Status</th>
                                        <th>Company Logo</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Company Name</th>
                                        <!--<th>Company Address</th>-->
                                        <th>Company Email</th>
                                        <th>Company Phone</th>
                                        <th>Company Slogan</th>
                                        <th>Publication Status</th>
                                        <!--<th>Company Logo</th>-->
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i=1; ?>
                                    <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($i++); ?></td>
                                            <td><?php echo e($profile->company_name); ?></td>
                                            <!--<td><?php echo e($profile->company_address); ?></td>-->
                                            <td><?php echo e($profile->company_email); ?></td>
                                            <td><?php echo e($profile->company_phone); ?></td>
                                            <!--<td><?php echo e($profile->company_slogan); ?></td>-->
                                            <td><?php echo e($profile->publication_status == '1' ? 'Published' : 'Unpublished'); ?></td>
                                            <td><img src="<?php echo e(url('public/'.$profile->company_logo)); ?>" width="60" height="50" > </td>
                                            <td class="uk-text-center">
                                                <a href="<?php echo route('edit-profile',$profile->id); ?>" class="batch-edit"><i title="Edit" class=" material-icons">&#xE254;</i></a>
                                                <a onclick="deleterow(this);return false;" href="<?php echo e(route('delete-profile',$profile->id)); ?>"><i data-uk-tooltip="{pos:'top'}" title="Delete" class="material-icons">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Add branch plus sign -->

                            <!--<div class="md-fab-wrapper branch-create">-->
                            <!--    <a id="add_branch_button" href="<?php echo route('add-profile'); ?>" class="md-fab md-fab-accent branch-create">-->
                            <!--        <i class="material-icons">&#xE145;</i>-->
                            <!--    </a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload =  function (ev) {
            $("#sidebar_profile").addClass('current_section');
        }

        function deleterow(link) {

            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }
        $('#sidebar_profile').addClass('current_section');



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