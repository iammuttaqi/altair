<div class="uk-navbar-flip">
    <ul class="uk-navbar-nav user_actions">
        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
         @include('layouts.theme.includes.nav_alert')
        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/></a>
            <div class="uk-dropdown uk-dropdown-small">
                <ul class="uk-nav js-uk-prevent">
                    <li><a href="page_user_profile.html">My profile</a></li>
                    <li><a href="page_settings.html">Settings</a></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>