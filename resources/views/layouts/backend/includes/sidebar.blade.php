<?php
    $helper = new App\Lib\Helpers();
    $header = new App\Lib\Header();
?>

<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="{{ route('home') }}" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="{{ asset('assets/img/logo_main.png') }}" alt="Admin" style="width: 85%; margin-top: 25px;"/>
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
            @php
                $modules = $helper->getAllModules();
            @endphp
            @if(isset($modules) && $modules->count() > 0)
                @foreach($modules as $module)

                    <li id="{{ $module->slug."_".$module->id }}" class="">
                        <a href="#" id="{{ $module->slug }}">
                            <span class="menu_icon"><i class="material-icons">{{ $module->icon_code }}</i></span>
                            <span class="menu_title">{{ $module->name }}</span>
                        </a>
                        <ul>
                            @if(isset($module->category) && $module->category == 1)
                                <li id="sidebar_dashboard_category_{{ $module->id }}" class="" @if($module->category == 1) title="Category" @endif>
                                    <a href="{{ route('category_index',['module_id'=>$module->id]) }}">
                                        <span class="menu_title">Category</span>
                                    </a>
                                </li>
                            @endif

                            @if(isset($module->sub_category) && $module->sub_category == 1)
                                <li id="sidebar_dashboard_sub_category_{{ $module->id }}" class="" @if($module->sub_category == 1) title="Sub Category" @endif>

                                    @php
                                        $category_id = $helper->getCategoryId($module->id);
                                    @endphp

                                    <a href="{{ route('sub_category_index',['module_id'=>$module->id]) }}">
                                        <span class="menu_title">Sub Category</span>
                                    </a>
                                </li>
                            @endif

                            @if(isset($module->further_sub_category) && $module->further_sub_category == 1)
                                <li id="sidebar_dashboard_further_sub_category_{{ $module->id }}" class="" @if($module->further_sub_category == 1) title="Further Sub Category" @endif>
                                    <a href="{{ route('further_subcategory_index',['module_id'=>$module->id]) }}">
                                        <span class="menu_title">Further Sub Category</span>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </li>
                @endforeach
            @endif

            <li id="newsletter" class="" title="Newsletter">
                <a href="{{ route('subscription_list') }}">
                    <span class="menu_icon"><i class="material-icons">subscriptions</i></span>
                    <span class="menu_title">Subscriptions</span>
                </a>
            </li>

        </ul>
    </div>
</aside><!-- main sidebar end -->