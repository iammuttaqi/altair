@extends('layouts.theme.master')

@section('content')
    <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                    <span class="uk-text-muted uk-text-small">Visitors (last 7d)</span>
                    <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>12456</noscript></span></h2>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                    <span class="uk-text-muted uk-text-small">Sale</span>
                    <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>142384</noscript></span></h2>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                    <span class="uk-text-muted uk-text-small">Orders Completed</span>
                    <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>64</noscript></span>%</h2>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_live peity_data">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                    <span class="uk-text-muted uk-text-small">Visitors (live)</span>
                    <h2 class="uk-margin-remove" id="peity_live_text">46</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- large chart -->
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="md-card">
                <div class="md-card-toolbar">
                    <div class="md-card-toolbar-actions">
                        <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                        <i class="md-icon material-icons">&#xE5D5;</i>
                        <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                            <i class="md-icon material-icons">&#xE5D4;</i>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav">
                                    <li><a href="#">Action 1</a></li>
                                    <li><a href="#">Action 2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3 class="md-card-toolbar-heading-text">
                        Chart
                    </h3>
                </div>
                <div class="md-card-content">
                    <div class="mGraph-wrapper">
                        <div id="mGraph_sale" class="mGraph" data-uk-check-display></div>
                    </div>
                    <div class="md-card-fullscreen-content">
                        <div class="uk-overflow-container">
                            <table class="uk-table uk-table-no-border uk-text-nowrap">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Best Seller</th>
                                    <th>Total Sale</th>
                                    <th>Change</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>January 2014</td>
                                    <td>Dicta molestias quae.</td>
                                    <td>$3 234 162</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>February 2014</td>
                                    <td>Nihil animi veritatis.</td>
                                    <td>$3 771 083</td>
                                    <td class="uk-text-success">+2.5%</td>
                                </tr>
                                <tr>
                                    <td>March 2014</td>
                                    <td>Sit voluptatem ea.</td>
                                    <td>$2 429 352</td>
                                    <td class="uk-text-danger">-4.6%</td>
                                </tr>
                                <tr>
                                    <td>April 2014</td>
                                    <td>Et cupiditate aut quae.</td>
                                    <td>$4 844 169</td>
                                    <td class="uk-text-success">+7%</td>
                                </tr>
                                <tr>
                                    <td>May 2014</td>
                                    <td>Repudiandae voluptatum.</td>
                                    <td>$5 284 318</td>
                                    <td class="uk-text-success">+3.2%</td>
                                </tr>
                                <tr>
                                    <td>June 2014</td>
                                    <td>Dolore ullam voluptatum.</td>
                                    <td>$4 688 183</td>
                                    <td class="uk-text-danger">-6%</td>
                                </tr>
                                <tr>
                                    <td>July 2014</td>
                                    <td>Et quidem rerum assumenda.</td>
                                    <td>$4 353 427</td>
                                    <td class="uk-text-success">-5.3%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="uk-margin-large-top uk-margin-small-bottom heading_list uk-text-success">Some Info:</p>
                        <p class="uk-margin-top-remove">Voluptates aut voluptate a quaerat magni enim tenetur saepe totam autem dolorem dolorem sunt quidem quo unde possimus molestiae velit quidem dolore eveniet consequuntur beatae natus quasi explicabo atque eius suscipit dolores dicta veritatis aut id neque veniam id odio magni qui excepturi unde nisi consequatur ipsa nobis corporis ullam repellat nam est vel quas ipsa et iste eveniet asperiores asperiores saepe id cupiditate accusantium perspiciatis expedita veritatis sequi unde quos ex fugit non tempora ab nesciunt et velit architecto explicabo sapiente excepturi nobis est distinctio quo blanditiis molestias sed est praesentium rerum aliquid dignissimos eum aut consequatur doloremque natus aut ducimus temporibus nam incidunt odit ipsum non dolorem amet esse quis est culpa et reiciendis iste dolores odio libero ducimus sed fugiat nostrum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- circular charts -->
    <div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-5 uk-text-center uk-sortable sortable-handler" id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>
        <div>
            <div class="md-card md-card-hover md-card-overlay">
                <div class="md-card-content">
                    <div class="epc_chart" data-percent="76" data-bar-color="#03a9f4">
                        <span class="epc_chart_icon"><i class="material-icons">&#xE0BE;</i></span>
                    </div>
                </div>
                <div class="md-card-overlay-content">
                    <div class="uk-clearfix md-card-overlay-header">
                        <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                        <h3>
                            User Messages
                        </h3>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur.
                </div>
            </div>
        </div>
        <div>
            <div class="md-card md-card-hover md-card-overlay">
                <div class="md-card-content uk-flex uk-flex-center uk-flex-middle">
                    <span class="peity_conversions_large peity_data">5,3,9,6,5,9,7</span>
                </div>
                <div class="md-card-overlay-content">
                    <div class="uk-clearfix md-card-overlay-header">
                        <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                        <h3>
                            Conversions
                        </h3>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
            </div>
        </div>
        <div>
            <div class="md-card md-card-hover md-card-overlay md-card-overlay-active">
                <div class="md-card-content" id="canvas_1">
                    <div class="epc_chart" data-percent="37" data-bar-color="#9c27b0">
                        <span class="epc_chart_icon"><i class="material-icons">&#xE85D;</i></span>
                    </div>
                </div>
                <div class="md-card-overlay-content">
                    <div class="uk-clearfix md-card-overlay-header">
                        <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                        <h3>
                            Tasks List
                        </h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <button class="md-btn md-btn-primary">More</button>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card md-card-hover md-card-overlay">
                <div class="md-card-content">
                    <div class="epc_chart" data-percent="53" data-bar-color="#009688">
                        <span class="epc_chart_text"><span class="countUpMe">53</span>%</span>
                    </div>
                </div>
                <div class="md-card-overlay-content">
                    <div class="uk-clearfix md-card-overlay-header">
                        <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                        <h3>
                            Orders
                        </h3>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
            </div>
        </div>
        <div>
            <div class="md-card md-card-hover md-card-overlay">
                <div class="md-card-content">
                    <div class="epc_chart" data-percent="37" data-bar-color="#607d8b">
                        <span class="epc_chart_icon"><i class="material-icons">&#xE7FE;</i></span>
                    </div>
                </div>
                <div class="md-card-overlay-content">
                    <div class="uk-clearfix md-card-overlay-header">
                        <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                        <h3>
                            User Registrations
                        </h3>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
            </div>
        </div>
    </div>

    <!-- tasks -->
    <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
        <div class="uk-width-medium-1-2">
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table">
                            <thead>
                            <tr>
                                <th class="uk-text-nowrap">Task</th>
                                <th class="uk-text-nowrap">Status</th>
                                <th class="uk-text-nowrap">Progress</th>
                                <th class="uk-text-nowrap uk-text-right">Due Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="uk-table-middle">
                                <td class="uk-width-3-10 uk-text-nowrap"><a href="scrum_board.html">ALTR-231</a></td>
                                <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge">In progress</span></td>
                                <td class="uk-width-3-10">
                                    <div class="uk-progress uk-progress-mini uk-progress-warning uk-margin-remove">
                                        <div class="uk-progress-bar" style="width: 40%;"></div>
                                    </div>
                                </td>
                                <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">24.11.2015</td>
                            </tr>
                            <tr class="uk-table-middle">
                                <td class="uk-width-3-10 uk-text-nowrap"><a href="scrum_board.html">ALTR-82</a></td>
                                <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-warning">Open</span></td>
                                <td class="uk-width-3-10">
                                    <div class="uk-progress uk-progress-mini uk-progress-success uk-margin-remove">
                                        <div class="uk-progress-bar" style="width: 82%;"></div>
                                    </div>
                                </td>
                                <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">21.11.2015</td>
                            </tr>
                            <tr class="uk-table-middle">
                                <td class="uk-width-3-10 uk-text-nowrap"><a href="scrum_board.html">ALTR-123</a></td>
                                <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-primary">New</span></td>
                                <td class="uk-width-3-10">
                                    <div class="uk-progress uk-progress-mini uk-margin-remove">
                                        <div class="uk-progress-bar" style="width: 0;"></div>
                                    </div>
                                </td>
                                <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">12.11.2015</td>
                            </tr>
                            <tr class="uk-table-middle">
                                <td class="uk-width-3-10 uk-text-nowrap"><a href="scrum_board.html">ALTR-164</a></td>
                                <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-success">Resolved</span></td>
                                <td class="uk-width-3-10">
                                    <div class="uk-progress uk-progress-mini uk-progress-primary uk-margin-remove">
                                        <div class="uk-progress-bar" style="width: 61%;"></div>
                                    </div>
                                </td>
                                <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">17.11.2015</td>
                            </tr>
                            <tr class="uk-table-middle">
                                <td class="uk-width-3-10 uk-text-nowrap"><a href="scrum_board.html">ALTR-123</a></td>
                                <td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge uk-badge-danger">Overdue</span></td>
                                <td class="uk-width-3-10">
                                    <div class="uk-progress uk-progress-mini uk-progress-danger uk-margin-remove">
                                        <div class="uk-progress-bar" style="width: 10%;"></div>
                                    </div>
                                </td>
                                <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">12.11.2015</td>
                            </tr>
                            <tr class="uk-table-middle">
                                <td class="uk-width-3-10"><a href="scrum_board.html">ALTR-92</a></td>
                                <td class="uk-width-2-10"><span class="uk-badge uk-badge-success">Open</span></td>
                                <td class="uk-width-3-10">
                                    <div class="uk-progress uk-progress-mini uk-margin-remove">
                                        <div class="uk-progress-bar" style="width: 90%;"></div>
                                    </div>
                                </td>
                                <td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">08.11.2015</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-medium-1-2">
            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a uk-margin-bottom">Statistics</h3>
                    <div id="ct-chart" class="chartist"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- info cards -->
    <div class="uk-grid uk-grid-medium uk-grid-width-medium-1-2 uk-grid-width-large-1-3" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
        <div>
            <div class="md-card">
                <div class="md-card-head md-bg-light-blue-600">
                    <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-right'}">
                        <i class="md-icon material-icons md-icon-light">&#xE5D4;</i>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav">
                                <li><a href="#">User profile</a></li>
                                <li><a href="#">User permissions</a></li>
                                <li><a href="#" class="uk-text-danger">Delete user</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-text-center">
                        <img class="md-card-head-avatar" src="assets/img/avatars/avatar_11.png" alt=""/>
                    </div>
                    <h3 class="md-card-head-text uk-text-center md-color-white">
                        Mariah Hartmann                                <span>ashlynn.jenkins@keeling.com</span>
                    </h3>
                </div>
                <div class="md-card-content">
                    <ul class="md-list md-list-addon">
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE158;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">xyost@yahoo.com</span>
                                <span class="uk-text-small uk-text-muted">Email</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">774.330.8804x99429</span>
                                <span class="uk-text-small uk-text-muted">Phone</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon uk-icon-facebook-official"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">facebook.com/envato</span>
                                <span class="uk-text-small uk-text-muted">Facebook</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon uk-icon-twitter"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">twitter.com/envato</span>
                                <span class="uk-text-small uk-text-muted">Twitter</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-head">
                    <div id="video_player"></div>
                </div>
                <div class="md-card-content">
                    <ul class="md-list md-list-addon md-list-interactive" id="video_player_playlist">
                        <li data-video-src="-CYs99M7hzA">
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE037;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Unboxing the HERO4</span>
                                <span class="uk-text-small uk-text-muted">Mashable</span>
                            </div>
                        </li>
                        <li data-video-src="te689fEo2pY">
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE037;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Apple Watch Unboxing & Setup</span>
                                <span class="uk-text-small uk-text-muted">Unbox Therapy</span>
                            </div>
                        </li>
                        <li data-video-src="7AFJeaYojhU">
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE037;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Energous WattUp Power Transmitter</span>
                                <span class="uk-text-small uk-text-muted">TechCrunch</span>
                            </div>
                        </li>
                        <li data-video-src="hajnEpCq5SE">
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon material-icons">&#xE037;</i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">The new MacBook - Design</span>
                                <span class="uk-text-small uk-text-muted">Apple</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="md-card">
                <div class="md-card-head head_background" style="background-image: url('assets/img/gallery/Image17.jpg')">
                    <div class="md-card-head-menu">
                        <i class="md-icon material-icons md-icon-light">&#xE5D5;</i>
                    </div>
                    <h3 class="md-card-head-text">
                        Some City
                    </h3>
                    <div class="md-card-head-subtext">
                        <i class="md-card-head-icon wi wi-day-sunny-overcast uk-margin-right"></i>
                        <span>14&deg;</span>
                    </div>
                </div>
                <div class="md-card-content">
                    <ul class="md-list md-list-addon">
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon wi wi-day-sunny-overcast"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">22&deg; Mostly Sunny</span>
                                <span class="uk-text-small uk-text-muted">18 Aug (Thursday)</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon wi wi-cloudy"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">19&deg; Partly Cloudy</span>
                                <span class="uk-text-small uk-text-muted">19 Aug (Friday)</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon wi wi-day-rain"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">16&deg; Rainy</span>
                                <span class="uk-text-small uk-text-muted">20 Aug (Saturday)</span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-addon-element">
                                <i class="md-list-addon-icon wi wi-day-sunny uk-text-warning"></i>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">24&deg; Sunny</span>
                                <span class="uk-text-small uk-text-muted">20 Aug (Saturday)</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
        <div class="uk-width-large-1-2">
            <div class="md-card">
                <div id="clndr_events" class="clndr-wrapper">
                    <script>
                        // calendar events
                        clndrEvents = [
                            { date: '2016-08-08', title: 'Doctor appointment', url: 'javascript:void(0)', timeStart: '10:00', timeEnd: '11:00' },
                            { date: '2016-08-09', title: 'John\'s Birthday', url: 'javascript:void(0)' },
                            { date: '2016-08-09', title: 'Party', url: 'javascript:void(0)', timeStart: '08:00', timeEnd: '08:30' },
                            { date: '2016-08-13', title: 'Meeting', url: 'javascript:void(0)', timeStart: '18:00', timeEnd: '18:20' },
                            { date: '2016-08-18', title: 'Work Out', url: 'javascript:void(0)', timeStart: '07:00', timeEnd: '08:00' },
                            { date: '2016-08-18', title: 'Business Meeting', url: 'javascript:void(0)', timeStart: '11:10', timeEnd: '11:45' },
                            { date: '2016-08-23', title: 'Meeting', url: 'javascript:void(0)', timeStart: '20:25', timeEnd: '20:50' },
                            { date: '2016-08-26', title: 'Haircut', url: 'javascript:void(0)' },
                            { date: '2016-08-26', title: 'Lunch with Katy', url: 'javascript:void(0)', timeStart: '08:45', timeEnd: '09:45' },
                            { date: '2016-08-26', title: 'Concept review', url: 'javascript:void(0)', timeStart: '15:00', timeEnd: '16:00' },
                            { date: '2016-08-27', title: 'Swimming Poll', url: 'javascript:void(0)', timeStart: '13:50', timeEnd: '14:20' },
                            { date: '2016-08-29', title: 'Team Meeting', url: 'javascript:void(0)', timeStart: '17:25', timeEnd: '18:15' },
                            { date: '2016-09-02', title: 'Dinner with John', url: 'javascript:void(0)', timeStart: '16:25', timeEnd: '18:45' },
                            { date: '2016-09-13', title: 'Business Meeting', url: 'javascript:void(0)', timeStart: '10:00', timeEnd: '11:00' }
                        ]
                    </script>
                    <script id="clndr_events_template" type="text/x-handlebars-template">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon clndr_add_event material-icons">&#xE145;</i>
                                <i class="md-icon clndr_today material-icons">&#xE8DF;</i>
                                <i class="md-icon clndr_previous material-icons">&#xE408;</i>
                                <i class="md-icon clndr_next material-icons uk-margin-remove">&#xE409;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">

                            </h3>
                        </div>
                        <div class="clndr_days">
                            <div class="clndr_days_names">

                                <div class="day-header"></div>

                            </div>
                            <div class="clndr_days_grid">



                            </div>
                        </div>
                        <div class="clndr_events">
                            <i class="material-icons clndr_events_close_button">&#xE5CD;</i>

                            <div class="clndr_event" data-clndr-event="">
                                <a href="">
                                    <span class="clndr_event_title"></span>
                                    <span class="clndr_event_more_info">


                                            </span>
                                </a>
                            </div>

                        </div>
                    </script>
                </div>
                <div class="uk-modal" id="modal_clndr_new_event">
                    <div class="uk-modal-dialog">
                        <div class="uk-modal-header">
                            <h3 class="uk-modal-title">New Event</h3>
                        </div>
                        <div class="uk-margin-bottom">
                            <label for="clndr_event_title_control">Event Title</label>
                            <input type="text" class="md-input" id="clndr_event_title_control" />
                        </div>
                        <div class="uk-margin-medium-bottom">
                            <label for="clndr_event_link_control">Event Link</label>
                            <input type="text" class="md-input" id="clndr_event_link_control" />
                        </div>
                        <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-large-bottom" data-uk-grid-margin>
                            <div>
                                <div class="uk-input-group">
                                    <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                    <label for="clndr_event_date_control">Event Date</label>
                                    <input class="md-input" type="text" id="clndr_event_date_control" data-uk-datepicker="{format:'YYYY-MM-DD', minDate: '2016-08-17' }">
                                </div>
                            </div>
                            <div>
                                <div class="uk-input-group">
                                    <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                    <label for="clndr_event_start_control">Event Start</label>
                                    <input class="md-input" type="text" id="clndr_event_start_control" data-uk-timepicker>
                                </div>
                            </div>
                            <div>
                                <div class="uk-input-group">
                                    <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                    <label for="clndr_event_end_control">Event End</label>
                                    <input class="md-input" type="text" id="clndr_event_end_control" data-uk-timepicker>
                                </div>
                            </div>
                        </div>
                        <div class="uk-modal-footer uk-text-right">
                            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="clndr_new_event_submit">Add Event</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-large-1-2">
            <div class="md-card">
                <div id="map_users_controls"></div>
                <div id="map_users" class="gmap"></div>
                <div class="md-card-content">
                    <ul class="md-list md-list-addon gmap_list" id="map_users_list">
                        <li data-gmap-lat="37.406267"  data-gmap-lon="-122.06742" data-gmap-user="Xzavier Johnson" data-gmap-user-company="Kuhic-Wolff">
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_01_tn.png" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Xzavier Johnson</span>
                                <span class="uk-text-small uk-text-muted">Kuhic-Wolff</span>
                            </div>
                        </li>
                        <li data-gmap-lat="37.379267"  data-gmap-lon="-122.02148" data-gmap-user="Ephraim Schaden" data-gmap-user-company="Thompson, Ullrich and Nolan">
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Ephraim Schaden</span>
                                <span class="uk-text-small uk-text-muted">Thompson, Ullrich and Nolan</span>
                            </div>
                        </li>
                        <li data-gmap-lat="37.410267"  data-gmap-lon="-122.11048" data-gmap-user="Sylvia Turcotte IV" data-gmap-user-company="Tremblay, Cole and Dooley">
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_03_tn.png" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Sylvia Turcotte IV</span>
                                <span class="uk-text-small uk-text-muted">Tremblay, Cole and Dooley</span>
                            </div>
                        </li>
                        <li data-gmap-lat="37.397267"  data-gmap-lon="-122.084417" data-gmap-user="Alberto Halvorson" data-gmap-user-company="Donnelly-Lang">
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_04_tn.png" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Alberto Halvorson</span>
                                <span class="uk-text-small uk-text-muted">Donnelly-Lang</span>
                            </div>
                        </li>
                        <li data-gmap-lat="37.372267"  data-gmap-lon="-122.090417" data-gmap-user="Mr. Vito Hilll MD" data-gmap-user-company="Kertzmann PLC">
                            <div class="md-list-addon-element">
                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_05_tn.png" alt=""/>
                            </div>
                            <div class="md-list-content">
                                <span class="md-list-heading">Mr. Vito Hilll MD</span>
                                <span class="uk-text-small uk-text-muted">Kertzmann PLC</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom_header_css')
    <!-- additional styles for plugins -->
    <!-- weather icons -->
    <link rel="stylesheet" href="bower_components/weather-icons/css/weather-icons.min.css" media="all">
    <!-- metrics graphics (charts) -->
    <link rel="stylesheet" href="bower_components/metrics-graphics/dist/metricsgraphics.css">
    <!-- chartist -->
    <link rel="stylesheet" href="bower_components/chartist/dist/chartist.min.css">
@endsection

@section('custom_footer_js')
    <!-- page specific plugins -->
    <!-- d3 -->
    <script src="bower_components/d3/d3.min.js"></script>
    <!-- metrics graphics (charts) -->
    <script src="bower_components/metrics-graphics/dist/metricsgraphics.min.js"></script>
    <!-- chartist (charts) -->
    <script src="bower_components/chartist/dist/chartist.min.js"></script>
    <!-- maplace (google maps) -->
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="bower_components/maplace-js/dist/maplace.min.js"></script>
    <!-- peity (small charts) -->
    <script src="bower_components/peity/jquery.peity.min.js"></script>
    <!-- easy-pie-chart (circular statistics) -->
    <script src="bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- countUp -->
    <script src="bower_components/countUp.js/dist/countUp.min.js"></script>
    <!-- handlebars.js -->
    <script src="bower_components/handlebars/handlebars.min.js"></script>
    <script src="assets/js/custom/handlebars_helpers.min.js"></script>
    <!-- CLNDR -->
    <script src="bower_components/clndr/clndr.min.js"></script>
    <!-- fitvids -->
    <script src="bower_components/fitvids/jquery.fitvids.js"></script>

    <!--  dashbord functions -->
    <script src="assets/js/pages/dashboard.min.js"></script>
@endsection
