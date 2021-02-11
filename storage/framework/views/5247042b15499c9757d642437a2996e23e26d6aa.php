<?php
    $helper = new App\Lib\Helpers();
    $header = new App\Lib\Header();
?>

<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="<?php echo e(route('home')); ?>" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="<?php echo e(asset('frontend/images/logo-small.png')); ?>" alt="" style="width: 85%; margin-top: 25px;"/>
                <img class="logo_light" src="#" alt="" height="15" width="71"/>
            </a>
            <a href="#" class="sSidebar_show sidebar_logo_small">
                <img class="logo_regular" src="#" alt="" height="32" width="32"/>
                <img class="logo_light" src="#" alt="" height="32" width="32"/>
            </a>
        </div>
    </div>

    <div class="menu_section">
        <ul>
            <?php 
                $modules = $helper->getAllModules();
             ?>
            <?php if(isset($modules) && $modules->count() > 0): ?>
                <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li id="<?php echo e($module->slug."_".$module->id); ?>" class="">
                        <a href="#" id="<?php echo e($module->slug); ?>">
                            <span class="menu_icon"><i class="material-icons"><?php echo e($module->icon_code); ?></i></span>
                            <span class="menu_title"><?php echo e($module->name); ?></span>
                        </a>
                        <ul>
                            <?php if(isset($module->category) && $module->category == 1): ?>
                                <li id="sidebar_dashboard_category_<?php echo e($module->id); ?>" class="" <?php if($module->category == 1): ?> title="Category" <?php endif; ?>>
                                    <a href="<?php echo e(route('category_index',['module_id'=>$module->id])); ?>">
                                        <span class="menu_title">Category</span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if(isset($module->sub_category) && $module->sub_category == 1): ?>
                                <li id="sidebar_dashboard_sub_category_<?php echo e($module->id); ?>" class="" <?php if($module->sub_category == 1): ?> title="Sub Category" <?php endif; ?>>

                                    <?php 
                                        $category_id = $helper->getCategoryId($module->id);
                                     ?>

                                    <a href="<?php echo e(route('sub_category_index',['module_id'=>$module->id])); ?>">
                                        <span class="menu_title">Sub Category</span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if(isset($module->further_sub_category) && $module->further_sub_category == 1): ?>
                                <li id="sidebar_dashboard_further_sub_category_<?php echo e($module->id); ?>" class="" <?php if($module->further_sub_category == 1): ?> title="Further Sub Category" <?php endif; ?>>
                                    <a href="<?php echo e(route('further_subcategory_index',['module_id'=>$module->id])); ?>">
                                        <span class="menu_title">Further Sub Category</span>
                                    </a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <li id="newsletter" class="" title="Newsletter">
                <a href="<?php echo e(route('subscription_list')); ?>">
                    <span class="menu_icon"><i class="material-icons">subscriptions</i></span>
                    <span class="menu_title">Subscriptions</span>
                </a>
            </li>

        </ul>
    </div>
</aside><!-- main sidebar end -->