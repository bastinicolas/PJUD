<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="_nK">
    <link rel="icon" href="assets/_con/images/icon.png">

    <title>Con - Admin Dashboard with Material Design</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <!-- nanoScroller -->
    <link rel="stylesheet" type="text/css" href="bower_components/nanoscroller/bin/css/nanoscroller.css" />

    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="bower_components/fontawesome/css/font-awesome.min.css" />

    <!-- Material Design Icons -->
    <link rel="stylesheet" type="text/css" href="assets/material-design-icons/css/material-design-icons.min.css" />

    <!-- IonIcons -->
    <link rel="stylesheet" type="text/css" href="bower_components/ionicons/css/ionicons.min.css" />

    <!-- WeatherIcons -->
    <link rel="stylesheet" type="text/css" href="bower_components/weather-icons/css/weather-icons.min.css" />

    <!-- Rickshaw -->
    <link rel="stylesheet" type="text/css" href="bower_components/rickshaw/rickshaw.min.css" />

    <!-- nvd3 -->
    <link rel="stylesheet" type="text/css" href="bower_components/nvd3/build/nv.d3.min.css" />










    <!-- jvectormap -->
    <link rel="stylesheet" type="text/css" href="assets/jquery-jvectormap/jquery-jvectormap.css" />










    <!-- Main -->
    <link rel="stylesheet" type="text/css" href="assets/_con/css/con-base.css" />

    <!--[if lt IE 9]>
        <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <![endif]-->


</head>

<!--
  Body
    Options:
      .boxed - boxed layout for content
-->

<body>

    <!--
  Top Navbar
    Options:
      .navbar-dark - dark color scheme
      .navbar-static - static navbar
      .navbar-under - under sidebar
-->
    <nav class="navbar-top">
        <div class="nav-wrapper">

            <!-- Sidebar toggle -->
            <a href="#" class="yay-toggle">
                <div class="burg1"></div>
                <div class="burg2"></div>
                <div class="burg3"></div>
            </a>
            <!-- Sidebar toggle -->

            <!-- Logo -->
            <a href="index.html" class="brand-logo">
                <img src="assets/_con/images/logo.png" alt="Con">
            </a>
            <!-- /Logo -->

            <!-- Menu -->
            <ul>
                <li>
                    <a href="#!" class="search-bar-toggle">
                        <i class="mdi-action-search"></i>
                    </a>
                </li>
                <li>
                    <a class="dropdown-button" data-activates="test-dropdown" href="#!">
                        <i class="mdi-communication-email"></i>
                        <span class="badge new">2</span>
                    </a>
                    <div id="test-dropdown" class="dropdown-content dropdown-media">
                        <div class="card-panel">

                            <div class="media-heading">Messages <a href="mail-compose.html"><i class="mdi-content-add-circle-outline"></i></a></div>

                            <div class="media-footer"><a href="mail-inbox.html"><i class="mdi-hardware-keyboard-control"></i></a></div>

                            <div class="row mt-0">
                                <div class="col s2">
                                    <img src="assets/_con/images/user2.jpg" alt="" class="circle responsive-img">
                                </div>
                                <div class="col s10">
                                    <span class="media-date">9:02 AM</span>
                                    <a href="#" class="media-title">Dianne Chambers</a>
                                    <span>
                                        Ut feugiat tempus felis, sit amet mattis dolor accumsan quis...
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s2">
                                    <img src="assets/_con/images/user3.jpg" alt="" class="circle responsive-img">
                                </div>
                                <div class="col s10">
                                    <span class="media-date">Dec 19</span>
                                    <a href="#" class="media-title">Joanne Stephens</a>
                                    <span>
                                        Proin suscipit lobortis porta. Interdum et malesuada fames ac ante ipsum primis in faucibus...
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="user">
                    <a class="dropdown-button" data-activates="user-dropdown" href="#!">
                        <img src="assets/_con/images/user.jpg" alt="John Doe" class="circle"> John Doe <i class="mdi-navigation-expand-more right"></i>
                    </a>

                    <ul id="user-dropdown" class="dropdown-content">
                        <li>
                            <a href="page-profile.html">
                                <i class="fa fa-user"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a href="mail-inbox.html">
                                <i class="fa fa-envelope"></i> Messages
                                <span class="badge new">2 new</span>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fa fa-cogs"></i> Settings
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="page-sign-in.html">
                                <i class="fa fa-sign-out"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /Menu -->

        </div>
    </nav>
    <!-- /Top Navbar -->

    <!--
  Yay Sidebar
  Options [you can use all of theme classnames]:
    .yay-hide-to-small         - no hide menu, just set it small with big icons
    .yay-static                - stop using fixed sidebar (will scroll with content)
    .yay-gestures              - to show and hide menu using gesture swipes
    .yay-light                 - light color scheme
    .yay-hide-on-content-click - hide menu on content click

  Effects [you can use one of these classnames]:
    .yay-overlay  - overlay content
    .yay-push     - push content to right
    .yay-shrink   - shrink content width
-->
    <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures yay-light yay-static">

        <div class="top">
            <div>
                <!-- Sidebar toggle -->
                <a href="#" class="yay-toggle">
                    <div class="burg1"></div>
                    <div class="burg2"></div>
                    <div class="burg3"></div>
                </a>
                <!-- Sidebar toggle -->

                <!-- Logo -->
                <a href="#!" class="brand-logo">
                    <img src="assets/_con/images/logo-white.png" alt="Con">
                </a>
                <!-- /Logo -->
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">

                <ul>
                    <li class="yay-user-info">
                        <a href="page-profile.html">
                            <img src="assets/_con/images/user.jpg" alt="John Doe" class="circle">
                            <h3 class="yay-user-info-name"><?php echo $nombre." ".$apellido?></h3>
                            <div class="yay-user-location">
                                <i class="fa fa-map-marker"></i><?php echo $entidad?></h3>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="angularjs/" class=" waves-effect waves-blue"> <i class="ion ion-social-angular"></i> Open Angular Version </a>

                    </li>

                    <li class="label">Menu</li>

                    <li class="open">
                        <a href="dashboard.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-dashboard"></i> Dashboards
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li class="active">
                                <a href="dashboard.html" class=" waves-effect waves-blue">  Dashboard   </a>

                            </li>

                            <li>
                                <a href="dashboard-v1.html" class=" waves-effect waves-blue">  Dashboard v1   </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="widgets.html" class=" waves-effect waves-blue"> <i class="fa fa-magic"></i> Widgets </a>

                    </li>

                    <li>
                        <a href="layouts.html" class=" waves-effect waves-blue"> <i class="mdi mdi-av-web"></i> Layouts
                            <span class="badge new">new</span>
                        </a>

                    </li>

                    <li class="label">Elements</li>

                    <li>
                        <a href="css-alerts.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-css3"></i> CSS
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="css-alerts.html" class=" waves-effect waves-blue"> <i class="mdi-alert-warning"></i> Alerts </a>

                            </li>

                            <li>
                                <a href="css-badges.html" class=" waves-effect waves-blue"> <i class="mdi-action-stars"></i> Badges </a>

                            </li>

                            <li>
                                <a href="css-colors.html" class=" waves-effect waves-blue"> <i class="mdi-image-palette"></i> Colors </a>

                            </li>

                            <li>
                                <a href="css-grid.html" class=" waves-effect waves-blue"> <i class="mdi-action-dashboard"></i> Grid </a>

                            </li>

                            <li>
                                <a href="css-helpers.html" class=" waves-effect waves-blue"> <i class="mdi-action-help"></i> Helpers </a>

                            </li>

                            <li>
                                <a href="css-icons.html" class=" waves-effect waves-blue"> <i class="mdi-communication-invert-colors-on"></i> Icons </a>

                            </li>

                            <li>
                                <a href="css-shadow.html" class=" waves-effect waves-blue"> <i class="mdi-maps-layers"></i> Shadow </a>

                            </li>

                            <li>
                                <a href="css-typography.html" class=" waves-effect waves-blue"> <i class="fa fa-font"></i> Typography </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="ui-buttons.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-cubes"></i> UI Elements
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="ui-buttons.html" class=" waves-effect waves-blue"> <i class="fa fa-square"></i> Buttons </a>

                            </li>

                            <li>
                                <a href="ui-cards.html" class=" waves-effect waves-blue"> <i class="mdi-av-web"></i> Cards </a>

                            </li>

                            <li>
                                <a href="ui-chips.html" class=" waves-effect waves-blue"> <i class="fa fa-tag"></i> Chips
                                    <span class="badge new">new</span>
                                </a>

                            </li>

                            <li>
                                <a href="ui-collapsible.html" class=" waves-effect waves-blue"> <i class="mdi-action-view-day"></i> Collapsible </a>

                            </li>

                            <li>
                                <a href="ui-collections.html" class=" waves-effect waves-blue"> <i class="fa fa-server"></i> Collections </a>

                            </li>

                            <li>
                                <a href="ui-dropdown.html" class=" waves-effect waves-blue"> <i class="mdi-navigation-arrow-drop-down-circle"></i> Dropdown </a>

                            </li>

                            <li>
                                <a href="ui-modals.html" class=" waves-effect waves-blue"> <i class="fa fa-external-link"></i> Modals </a>

                            </li>

                            <li>
                                <a href="ui-nestable.html" class=" waves-effect waves-blue"> <i class="fa fa-list"></i> Nestable
                                    <span class="badge new">new</span>
                                </a>

                            </li>

                            <li>
                                <a href="ui-pagination.html" class=" waves-effect waves-blue"> <i class="mdi mdi-navigation-more-horiz"></i> Pagination </a>

                            </li>

                            <li>
                                <a href="ui-progress-bars.html" class=" waves-effect waves-blue"> <i class="fa fa-tasks"></i> Progress Bars </a>

                            </li>

                            <li>
                                <a href="ui-tabs.html" class=" waves-effect waves-blue"> <i class="mdi-action-tab-unselected"></i> Tabs </a>

                            </li>

                            <li>
                                <a href="ui-toasts.html" class=" waves-effect waves-blue"> <i class="mdi-action-announcement"></i> Toasts </a>

                            </li>

                            <li>
                                <a href="ui-tooltips.html" class=" waves-effect waves-blue"> <i class="fa fa-comment-o"></i> Tooltips </a>

                            </li>

                            <li>
                                <a href="ui-tree-view.html" class=" waves-effect waves-blue"> <i class="fa fa-list"></i> Tree View
                                    <span class="badge new">new</span>
                                </a>

                            </li>

                            <li>
                                <a href="ui-waves.html" class=" waves-effect waves-blue"> <i class="mdi-image-blur-on"></i> Waves </a>

                            </li>

                            <li>
                                <a href="ui-search-bar.html" class=" waves-effect waves-blue"> <i class="mdi-action-search"></i> Search Bar </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="media-hover-effects.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="mdi mdi-image-panorama"></i> Media
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="media-hover-effects.html" class=" waves-effect waves-blue"> <i class="mdi mdi-image-style"></i> Hover Effects </a>

                            </li>

                            <li>
                                <a href="media-scroll-effects.html" class=" waves-effect waves-blue"> <i class="fa fa-magic"></i> Scroll Effects </a>

                            </li>

                            <li>
                                <a href="media-gallery.html" class=" waves-effect waves-blue"> <i class="mdi mdi-image-collections"></i> Gallery </a>

                            </li>

                            <li>
                                <a href="media-material-box.html" class=" waves-effect waves-blue"> <i class="mdi mdi-image-collections"></i> Material Box </a>

                            </li>

                            <li>
                                <a href="media-parallax.html" class=" waves-effect waves-blue"> <i class="mdi mdi-image-panorama"></i> Parallax </a>

                            </li>

                            <li>
                                <a href="media-player.html" class=" waves-effect waves-blue"> <i class="mdi mdi-av-play-circle-outline"></i> Player </a>

                            </li>

                            <li>
                                <a href="media-slider.html" class=" waves-effect waves-blue"> <i class="mdi mdi-action-view-carousel"></i> Slider </a>

                            </li>

                        </ul>
                    </li>

                    <li class="label">Components</li>

                    <li>
                        <a href="forms-base.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-check-square-o"></i> Forms
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="forms-base.html" class=" waves-effect waves-blue"> <i class="fa fa-cube"></i> Base </a>

                            </li>

                            <li>
                                <a href="forms-advanced.html" class=" waves-effect waves-blue"> <i class="fa fa-cubes"></i> Advanced </a>

                            </li>

                            <li>
                                <a href="forms-validation.html" class=" waves-effect waves-blue"> <i class="fa fa-check-square-o"></i> Validation </a>

                            </li>

                            <li>
                                <a href="forms-editors.html" class=" waves-effect waves-blue"> <i class="fa fa-edit"></i> Editors </a>

                            </li>

                            <li>
                                <a href="forms-checkout.html" class=" waves-effect waves-blue">  Checkout   </a>

                            </li>

                            <li>
                                <a href="forms-contacts.html" class=" waves-effect waves-blue">  Contacts   </a>

                            </li>

                            <li>
                                <a href="forms-login.html" class=" waves-effect waves-blue">  Login   </a>

                            </li>

                            <li>
                                <a href="forms-register.html" class=" waves-effect waves-blue">  Register   </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="page-profile.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-globe"></i> Pages
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="page-profile.html" class=" waves-effect waves-blue">  Profile   </a>

                            </li>

                            <li>
                                <a href="page-timeline.html" class=" waves-effect waves-blue">  Timeline   </a>

                            </li>

                            <li>
                                <a href="page-calendar.html" class=" waves-effect waves-blue">  Calendar   </a>

                            </li>

                            <li>
                                <a href="page-forgot-password.html" class=" waves-effect waves-blue">  Forgot Password   </a>

                            </li>

                            <li>
                                <a href="page-lock.html" class=" waves-effect waves-blue">  Screen Lock   </a>

                            </li>

                            <li>
                                <a href="page-sign-in.html" class=" waves-effect waves-blue">  Sign In   </a>

                            </li>

                            <li>
                                <a href="page-sign-up.html" class=" waves-effect waves-blue">  Sign Up   </a>

                            </li>

                            <li>
                                <a href="page-404.html" class=" waves-effect waves-blue">  404   </a>

                            </li>

                            <li>
                                <a href="page-500.html" class=" waves-effect waves-blue">  500   </a>

                            </li>

                            <li>
                                <a href="page-blank.html" class=" waves-effect waves-blue">  Blank   </a>

                            </li>

                        </ul>
                    </li>

                    <li class="label">Extra</li>

                    <li>
                        <a href="mail-inbox.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-envelope"></i> Mailbox
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="mail-inbox.html" class=" waves-effect waves-blue"> <i class="mdi-content-inbox"></i> Inbox </a>

                            </li>

                            <li>
                                <a href="mail-compose.html" class=" waves-effect waves-blue"> <i class="mdi-content-add-circle"></i> Compose </a>

                            </li>

                            <li>
                                <a href="mail-view.html" class=" waves-effect waves-blue"> <i class="mdi-content-drafts"></i> View </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="ecommerce-dashboard.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="mdi mdi-action-shopping-cart"></i> eCommerce
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="ecommerce-dashboard.html" class=" waves-effect waves-blue"> <i class="fa fa-dashboard"></i> Dashboard </a>

                            </li>

                            <li>
                                <a href="ecommerce-products.html" class=" waves-effect waves-blue"> <i class="fa fa-tags"></i> Products </a>

                            </li>

                            <li>
                                <a href="ecommerce-product-single.html" class=" waves-effect waves-blue"> <i class="fa fa-tag"></i> Product Single </a>

                            </li>

                            <li>
                                <a href="ecommerce-orders.html" class=" waves-effect waves-blue"> <i class="fa fa-cart-plus"></i> Orders </a>

                            </li>

                            <li>
                                <a href="ecommerce-order-single.html" class=" waves-effect waves-blue"> <i class="fa fa-cart-plus"></i> Order Single </a>

                            </li>

                            <li>
                                <a href="ecommerce-customers.html" class=" waves-effect waves-blue"> <i class="fa fa-users"></i> Customers </a>

                            </li>

                            <li>
                                <a href="ecommerce-settings.html" class=" waves-effect waves-blue"> <i class="fa fa-cog"></i> Settings </a>

                            </li>

                            <li>
                                <a href="ecommerce-invoice.html" class=" waves-effect waves-blue"> <i class="ion ion-android-list"></i> Invoice </a>

                            </li>

                            <li>
                                <a href="ecommerce-pricing-tables.html" class=" waves-effect waves-blue"> <i class="fa fa-money"></i> Pricing Tables </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="charts-flot.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-bar-chart"></i> Charts
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="charts-flot.html" class=" waves-effect waves-blue">  Flot   </a>

                            </li>

                            <li>
                                <a href="charts-rickshaw.html" class=" waves-effect waves-blue">  Rickshaw   </a>

                            </li>

                            <li>
                                <a href="charts-sparkline.html" class=" waves-effect waves-blue">  Sparkline   </a>

                            </li>

                            <li>
                                <a href="charts-nvd3.html" class=" waves-effect waves-blue">  NVD3   </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="maps-google.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="mdi mdi-maps-place"></i> Maps
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="maps-google.html" class=" waves-effect waves-blue">  Google Maps   </a>

                            </li>

                            <li>
                                <a href="maps-vector.html" class=" waves-effect waves-blue">  Vector Maps   </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="ui-tables.html" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-table"></i> Tables
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="ui-tables.html" class=" waves-effect waves-blue">  Base Tables   </a>

                            </li>

                            <li>
                                <a href="ui-datatables.html" class=" waves-effect waves-blue">  Data Tables   </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-indent"></i> Menu Levels
                            <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
                        </a>
                        <ul>

                            <li>
                                <a href="#" class="yay-sub-toggle waves-effect waves-blue">  Second Level <span class="yay-collapse-icon mdi-navigation-expand-more"></span>  </a>
                                <ul>

                                    <li>
                                        <a href="#1" class="yay-sub-toggle waves-effect waves-blue">  Third Level <span class="yay-collapse-icon mdi-navigation-expand-more"></span>  </a>
                                        <ul>

                                            <li>
                                                <a href="#1" class=" waves-effect waves-blue">  Fourth Level   </a>

                                            </li>

                                            <li>
                                                <a href="#2" class=" waves-effect waves-blue">  Fourth Level   </a>

                                            </li>

                                            <li>
                                                <a href="#3" class=" waves-effect waves-blue">  Fourth Level   </a>

                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#2" class="yay-sub-toggle waves-effect waves-blue">  Third Level <span class="yay-collapse-icon mdi-navigation-expand-more"></span>  </a>
                                        <ul>

                                            <li>
                                                <a href="#1" class=" waves-effect waves-blue">  Fourth Level   </a>

                                            </li>

                                            <li>
                                                <a href="#2" class=" waves-effect waves-blue">  Fourth Level   </a>

                                            </li>

                                            <li>
                                                <a href="#3" class=" waves-effect waves-blue">  Fourth Level   </a>

                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>


                    <li class="label">Stats</li>
                    <li class="content">
                        <span><i class="fa fa-spinner"></i> Server Load</span>
                        <div class="progress small light-green lighten-4">
                            <div class="light-green accent-5" style="width: 37%"></div>
                        </div>

                        <span><i class="fa fa-thumbs-o-up"></i> User Satisfaction</span>
                        <div class="progress small">
                            <div style="width: 91%"></div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </aside>
    <!-- /Yay Sidebar -->

    <!-- Main Content -->
    <section class="content-wrap">


        <!-- Breadcrumb -->
        <div class="page-title">

            <div class="row">
                <div class="col s12 m9 l10">
                    <h1>Dashboard</h1>

                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-home"></i> Home</a> /
                        </li>

                        <li>
                            <a href="#">Category</a> /
                        </li>

                        <li>
                            <a href='dashboard.html'>Dashboard</a>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m3 l2 right-align">
                    <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
                </div>
            </div>

        </div>
        <!-- /Breadcrumb -->

        <!-- Stats Panels -->
        <div class="row">
            <div class="col l4 s12">
                <a href="#" class="card-panel stats-card indigo lighten-2 indigo-text text-lighten-5">
                    <i class="fa fa-comments-o"></i>
                    <span class="count">145</span>
                    <div class="name">Feedbacks</div>
                </a>
            </div>
            <div class="col l4 s12">
                <a href="#" class="card-panel stats-card blue lighten-2 blue-text text-lighten-5">
                    <i class="fa fa-send"></i>

                    <div class="graph">
                        <div id="sparkcard1"></div>
                    </div>

                    <span class="count">342</span>
                    <div class="name">Posts</div>
                </a>
            </div>
            <div class="col l4 s12">
                <div class="card-panel stats-card teal lighten-2 green-text text-lighten-5">
                    <div class="progress small teal lighten-1">
                        <div class="teal darken-1" style="width: 42%"></div>
                    </div>

                    <i class="fa fa-spinner"></i>
                    <span class="count">42%</span>
                    <div class="name">Server Load</div>
                </div>
            </div>
        </div>
        <!-- /Stats Panels -->

        <div class="row">
            <!-- Weather -->
            <div class="col l4 s12">
                <div class="card-panel weather-card-static indigo lighten-2 white-text">
                    <div class="row">
                        <div class="temp col s7">19°C
                            <span class="alt">66°F</span>
                        </div>
                        <div class="city col s5"><i class="fa fa-map-marker"></i> Seatle</div>
                    </div>
                    <div class="icon"><i class="wi wi-day-sunny"></i></div>
                    <div class="currently">Sunny</div>
                </div>
            </div>
            <!-- /Weather -->

            <!-- Chart with Visits -->
            <div class="col l4 s12">
                <div class="card" id="rickshawStackedArea" style="height: 191px;"></div>
            </div>
            <!-- /Chart with Visits -->

            <!-- Chart with Visits -->
            <div class="col l4 s12">
                <div class="card" id="rickshawStackedBars" style="height: 191px;"></div>
            </div>
            <!-- /Chart with Visits -->
        </div>

        <div class="row sortable">
            <!-- Stacked Area Chart -->
            <div class="col s12 l7">
                <div class="card">
                    <div class="title">
                        <h5>Statistics</h5>
                        <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a>
                        <a class="minimize" href="#">
                            <i class="mdi-navigation-expand-less"></i>
                        </a>
                    </div>
                    <div class="content">
                        <div id="flotLineChart" style="height: 300px"></div>
                    </div>
                </div>
            </div>
            <!-- /Stacked Area Chart -->

            <!-- Pie Chart -->
            <div class="col s12 l5">
                <div class="card">
                    <div class="title">
                        <h5>Browsers</h5>
                        <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a>
                        <a class="minimize" href="#">
                            <i class="mdi-navigation-expand-less"></i>
                        </a>
                    </div>
                    <div class="content">
                        <div id="flotPieChart" style="height: 300px"></div>
                    </div>
                </div>
            </div>
            <!-- /Pie Chart -->
        </div>

        <div class="row sortable">
            <!-- Orders Card -->
            <div class="col l4 s12">
                <div class="card">
                    <div class="title">
                        <h5>Orders</h5>
                        <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a>
                        <a class="minimize" href="#">
                            <i class="mdi-navigation-expand-less"></i>
                        </a>
                    </div>
                    <div class="content orders-card">

                        <h4>3,729</h4>
                        <div class="row">
                            <div class="col s6">
                                <small>Total Orders</small>
                            </div>
                            <div class="col s6 right-align">
                                77% <i class="fa fa-level-down red-text"></i>
                            </div>
                        </div>
                        <div class="progress small">
                            <div class="determinate" style="width: 77%"></div>
                        </div>

                        <h4>$7,180</h4>
                        <div class="row">
                            <div class="col s6">
                                <small>Total Income</small>
                            </div>
                            <div class="col s6 right-align">
                                43% <i class="fa fa-level-up green-text"></i>
                            </div>
                        </div>
                        <div class="progress small">
                            <div class="determinate" style="width: 43%"></div>
                        </div>

                        <h4>27</h4>
                        <div class="row">
                            <div class="col s6">
                                <small>Total Refunds</small>
                            </div>
                            <div class="col s6 right-align">
                                7%
                            </div>
                        </div>
                        <div class="progress small">
                            <div class="determinate" style="width: 7%"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Orders Card -->

            <!-- ToDo Card -->
            <div class="col l4 s12">
                <div class="card">
                    <div class="title">
                        <h5>Todo</h5>
                        <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a>
                        <a class="minimize" href="#">
                            <i class="mdi-navigation-expand-less"></i>
                        </a>
                    </div>


                    <div class="content todo-card">
                        <div class="todo-task">
                            <input type="checkbox" id="checkbox1" checked />
                            <label for="checkbox1">Transfer projects to the Gulp
                                <span class="todo-remove mdi-action-delete"></span>
                            </label>
                        </div>

                        <div class="todo-task">
                            <input type="checkbox" id="checkbox2">
                            <label for="checkbox2">Make video for Youtube
                                <span class="todo-remove mdi-action-delete"></span>
                            </label>
                        </div>

                        <div class="todo-task">
                            <input type="checkbox" id="checkbox4">
                            <label for="checkbox4">Learn Meteor.js
                                <span class="todo-remove mdi-action-delete"></span>
                            </label>
                        </div>

                        <div class="input-field">
                            <input id="todo-add" type="text">
                            <label for="todo-add">Add New</label>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /ToDo Card -->

            <!-- Image Card -->
            <div class="col l4 s12">
                <div class="card small of-h">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="assets/_con/images/image-4.jpg">
                    </div>
                    <div class="content">
                        <span class="card-title activator grey-text text-darken-4">Gallery<i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="media-gallery.html">Go to Gallery</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Gallery <i class="mdi-content-clear right"></i></span>
                        <p class="flow-text">Gallery used PhotoSwipe and Isotope plugins.</p>
                    </div>
                </div>
            </div>
            <!-- /Image Card -->
        </div>

        <div class="row">
            <!-- map -->
            <div class="col s12 l8">
                <div class="card">
                    <div id="map1" class="map" style="height: 300px;"></div>
                </div>
            </div>
            <!-- /map -->

            <!-- rickshaw -->
            <div class="col s12 l4">
                <div class="card">

                    <div class="title">
                        <h5>Server Load</h5>
                    </div>

                    <div id="rickshawGraph"></div>
                </div>
            </div>
            <!-- /rickshaw -->
        </div>


    </section>
    <!-- /Main Content -->

    <!-- Search Bar -->
    <div class="search-bar">
        <div class="layer-overlay"></div>
        <div class="layer-content">
            <form action="#!">
                <!-- Header -->
                <a class="search-bar-toggle grey-text text-darken-2" href="#!"><i class="mdi-navigation-close"></i></a>

                <!-- Search Input -->
                <div class="input-field">
                    <i class="mdi-action-search prefix"></i>
                    <input type="text" name="con-search" placeholder="Search...">
                </div>

                <!-- Search Results -->
                <div class="search-results">

                    <div class="row">
                        <div class="col s12 l4">
                            <h4>Users</h4>

                            <div class="each-result">
                                <img src="assets/_con/images/user2.jpg" alt="Felecia Castro" class="circle photo">
                                <div class="title">Felecia Castro</div>
                                <div class="label">Content Manager</div>
                            </div>

                            <div class="each-result">
                                <img src="assets/_con/images/user3.jpg" alt="Max Brooks" class="circle photo">
                                <div class="title">Max Brooks</div>
                                <div class="label">Programmer</div>
                            </div>

                            <div class="each-result">
                                <img src="assets/_con/images/user4.jpg" alt="Patsy Griffin" class="circle photo">
                                <div class="title">Patsy Griffin</div>
                                <div class="label">Support</div>
                            </div>

                            <div class="each-result">
                                <img src="assets/_con/images/user6.jpg" alt="Vernon Garrett" class="circle photo">
                                <div class="title">Vernon Garrett</div>
                                <div class="label">Photographer</div>
                            </div>
                        </div>
                        <div class="col s12 l4">
                            <h4>Articles</h4>

                            <div class="each-result">
                                <div class="icon circle blue white-text">MD</div>
                                <div class="title">Material Design</div>
                                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                            </div>

                            <div class="each-result">
                                <div class="icon circle teal white-text">
                                    <i class="fa fa-dashboard"></i>
                                </div>
                                <div class="title">Admin Dashboard</div>
                                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                            </div>

                            <div class="each-result">
                                <div class="icon circle orange white-text">RD</div>
                                <div class="title">Responsive Design</div>
                                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                            </div>

                            <div class="each-result">
                                <div class="icon circle red white-text">
                                    <i class="fa fa-tablet"></i>
                                </div>
                                <div class="title">Mobile First</div>
                                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                            </div>
                        </div>
                        <div class="col s12 l4">
                            <h4>Posts</h4>

                            <div class="no-result">No results were found ;(</div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
    <!-- /Search Bar -->

    <!--
  Chat
    .chat-light - light color scheme
-->
    <div class="chat">
        <div class="layer-overlay"></div>

        <div class="layer-content">

            <!-- Contacts -->
            <div class="contacts">
                <!-- Top Bar -->
                <div class="topbar">
                    <a href="#!" class="text">Chat</a>
                    <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
                </div>
                <!-- /Top Bar -->

                <div class="nano">
                    <div class="nano-content">

                        <span class="label">Online</span>

                        <div class="user">
                            <img src="assets/_con/images/user2.jpg" alt="Felecia Castro" class="circle photo">

                            <div class="name">Felecia Castro</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="green-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="assets/_con/images/user3.jpg" alt="Max Brooks" class="circle photo">

                            <div class="name">Max Brooks</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="green-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="assets/_con/images/user4.jpg" alt="Patsy Griffin" class="circle photo">

                            <div class="name">Patsy Griffin</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="green-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="assets/_con/images/user5.jpg" alt="Chloe Morgan" class="circle photo">

                            <div class="name">Chloe Morgan</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="green-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="assets/_con/images/user6.jpg" alt="Vernon Garrett" class="circle photo">

                            <div class="name">Vernon Garrett</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="yellow-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="assets/_con/images/user7.jpg" alt="Greg Mcdonalid" class="circle photo">

                            <div class="name">Greg Mcdonalid</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="yellow-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="assets/_con/images/user8.jpg" alt="Christian Jackson" class="circle photo">

                            <div class="name">Christian Jackson</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="yellow-text fa fa-circle"></i></div>
                        </div>


                        <span class="label">Offline</span>

                        <div class="user">
                            <img src="assets/_con/images/user9.jpg" alt="Willie Kelly" class="circle photo">

                            <div class="name">Willie Kelly</div>
                            <div class="status">Lorem status</div>
                        </div>

                        <div class="user">
                            <img src="assets/_con/images/user10.jpg" alt="Jenny Phillips" class="circle photo">

                            <div class="name">Jenny Phillips</div>
                            <div class="status">Lorem status</div>
                        </div>

                        <div class="user">
                            <img src="assets/_con/images/user11.jpg" alt="Darren Cunningham" class="circle photo">

                            <div class="name">Darren Cunningham</div>
                            <div class="status">Lorem status</div>
                        </div>

                        <div class="user">
                            <img src="assets/_con/images/user12.jpg" alt="Sandra Cole" class="circle photo">

                            <div class="name">Sandra Cole</div>
                            <div class="status">Lorem status</div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Contacts -->

            <!-- Messages -->
            <div class="messages">

                <!-- Top Bar with back link -->
                <div class="topbar">
                    <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
                    <a href="#!" class="chat-back"><i class="mdi-hardware-keyboard-arrow-left"></i> Back</a>
                </div>
                <!-- /Top Bar with back link -->

                <!-- All messages list -->
                <div class="list">
                    <div class="nano scroll-bottom">
                        <div class="nano-content">

                            <div class="date">Monday, Feb 23, 8:23 pm</div>

                            <div class="from-me">
                                Hi, Felicia.
                                <br> How are you?
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="assets/_con/images/user2.jpg" alt="John Doe" class="circle photo"> Hi! I am good!
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                Glad to see you :)
                                <br> This long text is intended to show how the chat will display it.
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="assets/_con/images/user2.jpg" alt="John Doe" class="circle photo"> Also, we will send the longest word to show how it will fit in the chat window:
                                <strong>Pneumonoultramicroscopicsilicovolcanoconiosis</strong>
                            </div>

                            <div class="date">Friday, Mar 10, 5:07 pm</div>

                            <div class="from-me">
                                Hi again!
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="assets/_con/images/user2.jpg" alt="John Doe" class="circle photo"> Hi! Glad to see you.
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                I want to add you in my Facebook.
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                Can you give me your page?
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="assets/_con/images/user2.jpg" alt="John Doe" class="circle photo"> I do not use Facebook. But you can follow me in Twitter.
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                It's good idea!
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="assets/_con/images/user2.jpg" alt="John Doe" class="circle photo"> You can find me here - <a href="https://twitter.com/nkdevv">https://twitter.com/nkdevv</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /All messages list -->

                <!-- Send message -->
                <div class="send">
                    <form action="#!">
                        <div class="input-field">
                            <input id="chat-message" type="text" name="chat-message">
                        </div>

                        <button class="btn waves-effect z-depth-0"><i class="mdi-content-send"></i></button>
                    </form>
                </div>
                <!-- /Send message -->

            </div>
            <!-- /Messages -->
        </div>

    </div>
    <!-- /Chat -->
    <footer>&copy; 2015
        <strong>nK</strong>. All rights reserved. <a href="http://themeforest.net/item/con-material-admin-dashboard-template/10621512?ref=_nK">Purchase</a></footer>

    <!-- DEMO [REMOVE IT ON PRODUCTION] -->
    <script type="text/javascript" src="assets/_con/js/_demo.js"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- jQuery RAF (improved animation performance) -->
    <script type="text/javascript" src="bower_components/jquery-requestAnimationFrame/dist/jquery.requestAnimationFrame.min.js"></script>

    <!-- nanoScroller -->
    <script type="text/javascript" src="bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>

    <!-- Materialize -->
    <script type="text/javascript" src="bower_components/materialize/bin/materialize.js"></script>

    <!-- Simple Weather -->
    <script type="text/javascript" src="bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>

    <!-- Sparkline -->
    <script type="text/javascript" src="bower_components/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- Flot -->
    <script type="text/javascript" src="bower_components/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="bower_components/flot/jquery.flot.time.js"></script>
    <script type="text/javascript" src="bower_components/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="bower_components/flot/jquery.flot.categories.js"></script>
    <script type="text/javascript" src="bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

    <!-- d3 -->
    <script type="text/javascript" src="bower_components/d3/d3.min.js"></script>

    <!-- nvd3 -->
    <script type="text/javascript" src="bower_components/nvd3/build/nv.d3.min.js"></script>

    <!-- Rickshaw -->
    <script type="text/javascript" src="bower_components/rickshaw/rickshaw.min.js"></script>










    <!-- jvectormap -->
    <script type="text/javascript" src="assets/jquery-jvectormap/jquery-jvectormap.min.js"></script>
    <script type="text/javascript" src="assets/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="assets/jquery-jvectormap/gdp-data.js"></script>










    <!-- Sortable -->
    <script type="text/javascript" src="bower_components/Sortable/Sortable.min.js"></script>

    <!-- Main -->
    <script type="text/javascript" src="assets/_con/js/_con.js"></script>

    <!-- Google Prettify -->
    <script type="text/javascript" src="bower_components/code-prettify/src/prettify.js"></script>


    <script>
    /*
     * Sparkline in Card panel
     */
    (function() {
        $("#sparkcard1").conSparkline([76, 78, 87, 65, 43, 35, 23, 25, 12, 14, 27, 35, 32, 37, 31, 46, 43, 32, 36, 57, 78, 87, 82, 75, 58, 54, 70, 23, 54, 67, 34, 23, 87, 12, 43, 65, 23, 76, 32, 55], {
            type: 'bar',
            width: '100%',
            height: 20,
            barColor: '#2196f3'
        });
    }());


    var rickshawLine1 = [{
        "x": 0,
        "y": 13
    }, {
        "x": 1,
        "y": 12
    }, {
        "x": 2,
        "y": 24
    }, {
        "x": 3,
        "y": 25
    }, {
        "x": 4,
        "y": 12
    }, {
        "x": 5,
        "y": 16
    }, {
        "x": 6,
        "y": 24
    }, {
        "x": 7,
        "y": 13
    }, {
        "x": 8,
        "y": 12
    }, {
        "x": 9,
        "y": 11
    }];
    var rickshawLine2 = [{
        "x": 0,
        "y": 16
    }, {
        "x": 1,
        "y": 23
    }, {
        "x": 2,
        "y": 17
    }, {
        "x": 3,
        "y": 16
    }, {
        "x": 4,
        "y": 22
    }, {
        "x": 5,
        "y": 25
    }, {
        "x": 6,
        "y": 21
    }, {
        "x": 7,
        "y": 22
    }, {
        "x": 8,
        "y": 12
    }, {
        "x": 9,
        "y": 13
    }];

    /*
     * Rickshaw Stacked Area Chart
     */
    (function() {
        var element = $("#rickshawStackedArea");
        var graph = new Rickshaw.Graph({
            element: element[0],
            renderer: 'area',
            stroke: false,
            series: [{
                data: rickshawLine1,
                color: '#42a5f5',
                name: 'Visits'
            }, {
                data: rickshawLine2,
                color: '#90caf9',
                name: 'Views'
            }]
        });
        graph.render();

        var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
            xFormatter: function(x) {
                return x
            },
            yFormatter: function(y) {
                return y
            }
        });

        // responsive
        $(window).on('resize', function() {
            graph.configure({
                width: element.width()
            });
            graph.render();
        });
    }());


    /*
     * Rickshaw Stacked Bars
     */
    (function() {
        var element = $("#rickshawStackedBars");
        var graph = new Rickshaw.Graph({
            element: element[0],
            renderer: 'bar',
            series: [{
                data: rickshawLine1,
                color: '#26a69a',
                name: 'Visits'
            }, {
                data: rickshawLine2,
                color: '#80cbc4',
                name: 'Views'
            }]
        });
        graph.render();

        var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
            xFormatter: function(x) {
                return x
            },
            yFormatter: function(y) {
                return y
            }
        });

        // responsive
        $(window).on('resize', function() {
            graph.configure({
                width: element.width()
            });
            graph.render();
        });
    }());



    /*
     * Flot Line Chart
     */
    (function() {
        var chart = $("#flotLineChart");
        var data1 = {
            data: [
                [1, 50],
                [2, 58],
                [3, 45],
                [4, 62],
                [5, 55],
                [6, 65],
                [7, 61],
                [8, 70],
                [9, 65],
                [10, 70],
                [11, 53],
                [12, 49]
            ],
            label: "Mails"
        };
        var data2 = {
            data: [
                [1, 25],
                [2, 31],
                [3, 23],
                [4, 48],
                [5, 38],
                [6, 40],
                [7, 47],
                [8, 55],
                [9, 43],
                [10, 50],
                [11, 37],
                [12, 29]
            ],
            label: "SMS"
        };
        var data3 = {
            data: [
                [1, 4],
                [2, 13],
                [3, 7],
                [4, 17],
                [5, 20],
                [6, 24],
                [7, 13],
                [8, 17],
                [9, 10],
                [10, 17],
                [11, 6],
                [12, 3]
            ],
            label: "Invoices"
        };
        var options = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 1,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 0.1
                        }, {
                            opacity: 0.13
                        }]
                    }
                },
                points: {
                    show: true,
                    lineWidth: 2,
                    radius: 3
                },
                shadowSize: 0,
                stack: true
            },
            grid: {
                hoverable: true,
                clickable: true,
                tickColor: "#f9f9f9",
                borderWidth: 0
            },
            legend: {
                // show: false
                backgroundOpacity: 0,
                labelBoxBorderColor: "#fff"
            },
            colors: ["#3f51b5", "#009688", "#2196f3"],
            xaxis: {
                ticks: [
                    [1, "Jan"],
                    [2, "Feb"],
                    [3, "Mar"],
                    [4, "Apr"],
                    [5, "May"],
                    [6, "Jun"],
                    [7, "Jul"],
                    [8, "Aug"],
                    [9, "Sep"],
                    [10, "Oct"],
                    [11, "Nov"],
                    [12, "Dec"]
                ],
                font: {
                    family: "Roboto,sans-serif",
                    color: "#ccc"
                }
            },
            yaxis: {
                ticks: 7,
                tickDecimals: 0,
                font: {
                    color: "#ccc"
                }
            }
        };

        function initFlot() {
            $.plot(chart, [data1, data2, data3], options);
            chart.find('.legend table').css('width', 'auto')
                .find('td').css('padding', 5);
        }
        initFlot();
        $(window).on('resize', initFlot);

        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css({
                position: 'absolute',
                display: 'none',
                top: y - 40,
                left: x - 55,
                color: "#fff",
                padding: '5px 10px',
                'border-radius': '3px',
                'background-color': 'rgba(0,0,0,0.6)'
            }).appendTo("body").fadeIn(200);
        }

        var previousPoint = null;
        chart.bind("plothover", function(event, pos, item) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(0),
                        y = item.datapoint[1].toFixed(0);

                    var month = item.series.xaxis.ticks[item.dataIndex].label;

                    showTooltip(item.pageX, item.pageY,
                        item.series.label + " of " + month + ": " + y);
                }
            } else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });
    }());



    /*
     * Flot Pie Chart
     */
    (function() {
        var chart = $("#flotPieChart");
        var data = [{
            label: "IE",
            data: 19.5,
            color: "#90a4ae"
        }, {
            label: "Safari",
            data: 4.5,
            color: "#7986cb"
        }, {
            label: "Opera",
            data: 2.3,
            color: "#9575cd"
        }, {
            label: "Firefox",
            data: 36.6,
            color: "#4db6ac"
        }, {
            label: "Chrome",
            data: 36.3,
            color: "#64b5f6"
        }];
        var options = {
            series: {
                pie: {
                    innerRadius: 0.5,
                    show: true
                }
            },
            grid: {
                hoverable: true
            },
            legend: {
                backgroundOpacity: 0,
                labelBoxBorderColor: "#fff"
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            }
        };

        function initFlot() {
            $.plot(chart, data, options);
            chart.find('.legend table').css('width', 'auto')
                .find('td').css('padding', 5);
        }
        initFlot();
        $(window).on('resize', initFlot);

    }());


    /*
     * MAP 1
     */
    (function() {
        $('#map1').vectorMap({
            map: 'world_mill_en',
            zoom: 2,
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#e3f2fd', '#2196f3'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#fff',
            onRegionTipShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    }());




    /*
     * Rickshaw
     */
    (function() {
        var rickshawSeries = [
            [],
            []
        ];

        // Create random data
        var randomData = new Rickshaw.Fixtures.RandomData(50);
        for (var i = 0; i < 40; i++) {
            randomData.addData(rickshawSeries);
        }

        // Init Richshaw graph
        var element = $("#rickshawGraph");
        var graph = new Rickshaw.Graph({
            element: element[0],
            height: 253,
            interpolation: 'cardinal',
            renderer: 'area',
            series: [{
                data: rickshawSeries[0],
                color: '#4db6ac',
                name: 'HDD'
            }, {
                data: rickshawSeries[1],
                color: '#b2dfdb',
                name: 'CPU'
            }]
        });

        // Add hover info
        new Rickshaw.Graph.HoverDetail({
            graph: graph
        });

        // Render graph
        graph.render();

        // Live Update
        setInterval(function() {
            randomData.removeData(rickshawSeries);
            randomData.addData(rickshawSeries);
            graph.update();
        }, 1000);

        // Responsive
        $(window).on('resize', function() {
            graph.configure({
                width: element.width()
            });
            graph.render();
        });

    }());


    setTimeout(function() {
        Materialize.toast('Welcome to Con!', 1000);
    }, 1000);
    </script>

</body>

</html>