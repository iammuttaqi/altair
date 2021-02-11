<div class="uk-navbar-flip">
    <ul class="uk-navbar-nav user_actions">
        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
        
         <?php echo $__env->make('layouts.theme.includes.nav_alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
            <a href="#" class="user_action_image"><img class="md-user-image" src="<?php echo e(url('uploads/default.png')); ?>" alt=""/></a>
            <div class="uk-dropdown uk-dropdown-small">
                <ul class="uk-nav js-uk-prevent">
                    
                    <li><a href="<?php echo e(route('change_password_cms')); ?>">Change Password</a></li>
                    <li><a href="<?php echo e(route('logout_cms')); ?>">Logout</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>