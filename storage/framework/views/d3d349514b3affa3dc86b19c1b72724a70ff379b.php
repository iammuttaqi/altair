<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(url('css/app.css')); ?>" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/uikit/css/uikit.almost-flat.min.css')); ?>"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/login_page.min.css')); ?>" />

</head>
<body class="login-page">
    <div style="margin-top: 150px" id="app">

        <?php echo $__env->yieldContent('content'); ?>
        
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(url('js/app.js')); ?>"></script>

    <!-- common functions -->
    <script src="<?php echo e(asset('assets/js/common.min.js')); ?>"></script>
    <!-- uikit functions -->
    <script src="<?php echo e(asset('assets/js/uikit_custom.min.js')); ?>"></script>
    <!-- altair core functions -->
    <script src="<?php echo e(asset('assets/js/altair_admin_common.min.js')); ?>"></script>

    <!-- altair login page functions -->
    <script src="<?php echo e(asset('assets/js/pages/login.min.js')); ?>"></script>

    <script>
        // check for theme
        if (typeof(Storage) !== "undefined") {
            var root = document.getElementsByTagName( 'html' )[0],
                theme = localStorage.getItem("altair_theme");
            if(theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
                root.className += ' app_theme_dark';
            }
        }
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-65191727-1', 'auto');
        ga('send', 'pageview');
    </script>

</body>
</html>
<?php /**PATH C:\laragon\www\altair\resources\views/layouts/app.blade.php ENDPATH**/ ?>