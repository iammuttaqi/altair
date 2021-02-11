<header id="header_main">
    <div class="header_main_content">
        <nav class="uk-navbar">

            <!-- main sidebar switch -->
            <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                <span class="sSwitchIcon"></span>
            </a>

            <!-- secondary sidebar switch -->
            <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                <span class="sSwitchIcon"></span>
            </a>

            <?php echo $__env->make('layouts.backend.includes.top_nav_left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('layouts.backend.includes.top_nav_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </nav>
    </div>
    <?php echo $__env->make('layouts.backend.includes.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header><!-- main header end -->