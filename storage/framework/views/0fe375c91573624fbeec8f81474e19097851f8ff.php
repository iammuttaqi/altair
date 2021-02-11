

<?php echo $__env->make('layouts.backend.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('custom_header_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/error_page.min.css')); ?>" />
<?php $__env->stopSection(); ?>
<body class="error_page">

<div class="error_page_header">
    <div class="uk-width-8-10 uk-container-center">
        404!
    </div>
</div>
<div class="error_page_content">
    <div class="uk-width-8-10 uk-container-center">
        <p class="heading_b">Page not found</p>
        <p class="uk-text-large">
            The requested URL <span class="uk-text-muted">/some_url</span> was not found on this server.
        </p>
        <a href="#" onclick="history.go(-1);return false;">Go back to previous page</a>
    </div>
</div>

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

</body>
</html>