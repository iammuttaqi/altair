<?php $__env->startSection('title', 'Category'); ?>

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
                                <h2 class="heading_b"><span class="uk-text-truncate">Subscription List</span></h2>
                            </div>
                        </div>

                        <div class="user_content">
                            <div class="uk-overflow-container uk-margin-bottom">
                                <table class="uk-table" cellspacing="0" width="100%" id="data_table" >
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Category Name</th>
                                        <th>Send Time</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Category Name</th>
                                        <th>Send Time</th>
                                        <th class="uk-text-center">Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    
                                    <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->index + 1); ?></td>
                                            <td><a href="mailto:<?php echo e($subcription->email); ?>"><?php echo e($subcription->email); ?></a></td>
                                            <td><?php echo e($subcription->created_at); ?></td>
                                            <td class="uk-text-center">
                                                <a onclick="deleterow(this);return false;" href="<?php echo e(route('subcription_delete',$subcription->id)); ?>"><i data-uk-tooltip="{pos:'top'}" title="Delete" class="material-icons">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Add branch plus sign -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_footer_js'); ?>
    <script type="text/javascript">
        $('#data_table').DataTable({
            "pageLength": 50
        });
    </script>

    <script>

        

        
        
        

        function deleterow(link) {
            UIkit.modal.confirm('Are you sure?', function(){
                window.location.href = link;
            });
        }

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>