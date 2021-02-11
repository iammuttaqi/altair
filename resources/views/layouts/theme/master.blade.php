@include('layouts.theme.includes.head')
<body class=" sidebar_main_open sidebar_main_swipe">
@include('layouts.theme.includes.sidebar')
@include('layouts.theme.includes.header')




<div id="page_content">
    <div id="page_content_inner">
        <!-- main content start from here -->

       @yield('content')
        <!-- main content end from here -->

    </div>
</div>





@include('layouts.theme.includes.js_script')

</body>
</html>