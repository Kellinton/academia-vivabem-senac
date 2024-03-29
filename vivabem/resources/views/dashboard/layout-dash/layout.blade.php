<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Dashboard</title>

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="css/color-schemes/color.css" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="css/color-schemes/color1.css" title="color1">
    <link rel="alternate stylesheet" href="css/color-schemes/color2.css" title="color2">
    <link rel="alternate stylesheet" href="css/color-schemes/color4.css" title="color4">
    <link rel="alternate stylesheet" href="css/color-schemes/color5.css" title="color5">
</head>
<body class="expand-data panel-data">
    <div class="topbar">
        <div class="logo">
            <h1>
                <a href="#" title="">
                    <img src="{{ asset('img/logo-white.svg') }}" alt="" width="100px"/>
                </a>
            </h1>
        </div>
        <div class="topbar-data">
            <div class="usr-act">
                <i>Olá, </i>
                <span>
                    <img src="images/resource/topbar-usr1.jpg" alt="" />
                    <i class="sts away"></i>
                </span>
                <div class="usr-inf">
                    <div class="usr-thmb brd-rd50">
                        <img class="brd-rd50" src="images/resource/usr.jpg" alt="" />
                        <i class="sts away"></i>
                        {{-- <a class="green-bg brd-rd5" href="#" title="">
                            <i class="fa fa-envelope"></i>
                        </a> --}}
                    </div>
                    <h5>
                        <a href="#" title="">John Smith</a>
                    </h5>
                    <span>Co Worker</span>
                    <i>076 9477 4896</i>
                    <div class="usr-ft">
                        <a class="btn-danger" href="{{ route('sair') }}" title="">
                            <i class="fa fa-sign-out"></i>Sair</a>
                    </div>
                </div>
            </div>
            <form class="topbar-search">
                <button type="submit">
                    <i class="ion-ios-search-strong"></i>
                </button>
                <input type="text" placeholder="Type and Hit Enter" />
            </form>
            <ul class="tobar-links">
                <li>
                    <a href="#" title="">
                        <i class="ion-ios-bell"></i>
                        <span class="blue-bg">02</span>
                    </a>
                    <div class="nti-drp-wrp">
                        <h5 class="blue-bg">
                            <span>You Have</span> 7 Notifications</h5>
                        <div class="nti-lst">
                            <div class="nti-usr">
                                <span class="brd-rd50 rd-bg">
                                    <i class="fa fa-cog"></i>
                                </span>
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Sadi Orlaf</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Privacy settings changed</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 drkblu-bg">
                                    <i class="ion-ios-personadd"></i>
                                </span>
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Katti Smith</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Mike has added you as friend</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 orng-bg">
                                    <i class="ion-thumbsup"></i>
                                </span>
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Willimes Domson</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>like your timeline photo</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 grn-bg">
                                    <i class="ion-information-circled"></i>
                                </span>
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Holli Doe</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Curabitur id eros limes suscipit blandit.</i>
                                </div>
                            </div>
                        </div>
                        <div class="nt-ftr">
                            <a href="#" title="">View All</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="ion-android-drafts"></i>
                        <span class="green-bg">10</span>
                    </a>
                    <div class="nti-drp-wrp">
                        <h5 class="green-bg">
                            <span>You Have</span> 7 New Messages</h5>
                        <div class="nti-lst">
                            <div class="nti-usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt="" />
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Sadi Orlaf</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Privacy settings changed</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb1.jpg" alt="" />
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Katti Smith</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Mike has added you as friend</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb3.jpg" alt="" />
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Willimes Domson</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>like your timeline photo</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb4.jpg" alt="" />
                                <div class="nti-usr-inr">
                                    <h5>
                                        <a href="#" title="">Holli Doe</a>
                                    </h5>
                                    <span class="pst-tm">Just Now</span>
                                    <i>Curabitur id eros limes suscipit blandit.</i>
                                </div>
                            </div>
                        </div>
                        <div class="nt-ftr">
                            <a href="#" title="">View All</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="ion-android-settings"></i>
                    </a>
                    <div class="set-lst">
                        <div class="set-bd">
                            <h4>General Settings</h4>
                            <ul class="sett-lst">
                                <li>
                                    <span class="chck-bx">
                                        <input id="set1" type="checkbox">
                                        <label for="set1">Report Panel Usage</label>
                                    </span>
                                    <i>General Settings information</i>
                                </li>
                                <li>
                                    <span class="chck-bx">
                                        <input id="set2" type="checkbox">
                                        <label for="set2">Mail Redirect</label>
                                    </span>
                                    <i>General Settings information</i>
                                </li>
                                <li>
                                    <span class="chck-bx">
                                        <input id="set3" type="checkbox">
                                        <label for="set3">Expose Author Name</label>
                                    </span>
                                    <i>General Settings information</i>
                                </li>
                            </ul>
                            <h4>Chat Settings</h4>
                            <ul>
                                <li>
                                    <span class="chck-bx">
                                        <input id="set4" type="checkbox">
                                        <label for="set4">Show Me As Online</label>
                                    </span>
                                </li>
                                <li>
                                    <span class="chck-bx">
                                        <input id="set5" type="checkbox">
                                        <label for="set5">Turn Off Notifications</label>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="set-ft">
                            <a class="btn-danger" href="#" title="">
                                <i class="fa fa-trash"></i> Delete Chat History</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="ion-android-contacts"></i>
                    </a>
                    <div class="cnt-lst">
                        <ul>
                            <li>
                                <div class="usr">
                                    <img class="brd-rd50" src="images/resource/acti-thmb1.jpg" alt="" />
                                    <div class="usr-innr">
                                        <h5>
                                            <a href="#" title="">Smith Doe</a>
                                        </h5>
                                        <span>Co Worker</span>
                                        <a class="green-bg brd-rd5" href="#" title="">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="usr">
                                    <img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt="" />
                                    <div class="usr-innr">
                                        <h5>
                                            <a href="#" title="">Katti Smith</a>
                                        </h5>
                                        <span>Graphic Designer</span>
                                        <a class="green-bg brd-rd5" href="#" title="">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="usr">
                                    <img class="brd-rd50" src="images/resource/acti-thmb3.jpg" alt="" />
                                    <div class="usr-innr">
                                        <h5>
                                            <a href="#" title="">Willimes Domson</a>
                                        </h5>
                                        <span>Family Adviser</span>
                                        <a class="green-bg brd-rd5" href="#" title="">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="usr">
                                    <img class="brd-rd50" src="images/resource/acti-thmb4.jpg" alt="" />
                                    <div class="usr-innr">
                                        <h5>
                                            <a href="#" title="">Holli Doe</a>
                                        </h5>
                                        <span>Company CEO</span>
                                        <a class="green-bg brd-rd5" href="#" title="">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="topbar-bottom-colors">
            <i style="background-color: #2c3e50;"></i>
            <i style="background-color: #9857b2;"></i>
            <i style="background-color: #2c81ba;"></i>
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #feb506;"></i>
            <i style="background-color: #e17c21;"></i>
            <i style="background-color: #bc382a;"></i>
        </div>
    </div>
    <!-- Topbar -->

    <header class="side-header expand-header">
        <div class="nav-head">Main Navigation
            <span class="menu-trigger">
                <i class="ion-android-menu"></i>
            </span>
        </div>
        <nav class="custom-scrollbar">
            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-home"></i>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="dashboard.html" title="">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="dashboard2.html" title="">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="dashboard3.html" title="">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="dashboard4.html" title="">Background Header</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <h4>Features</h4>
            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-briefcase"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="pricing-plan.html" title="">Pricing Plan</a>
                        </li>
                        <li>
                            <a href="grids.html" title="">Grids</a>
                        </li>
                        <li>
                            <a href="calendar.html" title="">Calendar</a>
                        </li>
                        <li>
                            <a href="pagination.html" title="">Pagination</a>
                        </li>
                        <li>
                            <a href="buttons.html" title="">Button Styles</a>
                        </li>
                        <li>
                            <a href="dropdowns.html" title="">Dropdown Styles</a>
                        </li>
                        <li>
                            <a href="tabs&accordians.html" title="">Tabs & Accordians</a>
                        </li>
                        <li>
                            <a href="progressbars.html" title="">Progress Bars</a>
                        </li>
                        <li>
                            <a href="tooltips.html" title="">Tooltips</a>
                        </li>
                        <li>
                            <a href="popovers.html" title="">Popovers</a>
                        </li>
                        <li>
                            <a href="alerts.html" title="">Alerts</a>
                        </li>
                        <li>
                            <a href="list-group.html" title="">List Group</a>
                        </li>
                        <li>
                            <a href="models.html" title="">Models</a>
                        </li>
                        <li>
                            <a href="loaders.html" title="">CSS Loaders</a>
                        </li>
                        <li>
                            <a href="cards.html" title="">Cards</a>
                        </li>
                        <li>
                            <a href="range-slider.html" title="">Range Slider</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-fireball"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="font-awesome-icons.html" title="">Font Awesome Icons</a>
                        </li>
                        <li>
                            <a href="themify-icons.html" title="">Themify Icons</a>
                        </li>
                        <li>
                            <a href="ionicons.html" title="">Ionicons</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-images"></i>
                        <span>Gallery Styles</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="gallery1.html" title="">Gallery Style 1</a>
                        </li>
                        <li>
                            <a href="gallery2.html" title="">Gallery Style 2</a>
                        </li>
                        <li>
                            <a href="gallery3.html" title="">Gallery Style 3</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-android-settings"></i>
                        <span>Form Stuff</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="form-layouts.html" title="">Form Layouts</a>
                        </li>
                        <li>
                            <a href="form-wizard.html" title="">Form Wizard</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="tables.html" title="">
                        <i class="ion-crop"></i> Tables</a>
                </li>
                <li>
                    <a href="charts.html" title="">
                        <i class="ion-podium"></i> Charts</a>
                </li>
            </ul>
            <h4>Pages</h4>
            <ul class="drp-sec">
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-android-clipboard"></i>
                        <span>General</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="404.html" title="">404</a>
                        </li>
                        <li>
                            <a href="505.html" title="">505</a>
                        </li>
                        <li>
                            <a href="contact.html" title="">Contact Us</a>
                        </li>
                        <li>
                            <a href="coming-soon.html" title="">Coming Soon</a>
                        </li>
                        <li>
                            <a href="under-maintenance.html" title="">User Maintenance</a>
                        </li>
                        <li>
                            <a href="login.html" title="">Login</a>
                        </li>
                        <li>
                            <a href="register.html" title="">Register</a>
                        </li>
                        <li>
                            <a href="search-result.html" title="">Search Result</a>
                        </li>
                        <li>
                            <a href="faq.html" title="">Faq's</a>
                        </li>
                        <li>
                            <a href="services.html" title="">Services</a>
                        </li>
                        <li>
                            <a href="invoice.html" title="">Invoice Page</a>
                        </li>
                        <li>
                            <a href="typography.html" title="">Typography</a>
                        </li>
                        <li>
                            <a href="live-chat.html" title="">Live Chat</a>
                        </li>
                        <li>
                            <a href="timeline.html" title="">Timeline</a>
                        </li>
                        <li>
                            <a href="cropbox.html" title="">Cropbox</a>
                        </li>
                        <li>
                            <a href="calculator.html" title="">Calculator</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-android-contact"></i>
                        <span>User</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="profile.html" title="">Profile Page</a>
                        </li>
                        <li>
                            <a href="profile-edit.html" title="">Profile Edit</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-bag"></i>
                        <span>eCommerce</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="products.html" title="">Products</a>
                        </li>
                        <li>
                            <a href="product-details.html" title="">Product Details</a>
                        </li>
                        <li>
                            <a href="checkout.html" title="">Checkout</a>
                        </li>
                        <li>
                            <a href="order-received.html" title="">Order Received</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-android-map"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="google-map.html" title="">Google Map</a>
                        </li>
                        <li>
                            <a href="vector-map.html" title="">Vector map</a>
                        </li>
                    </ul>
                </li>
                <li class="has-drp">
                    <a href="#" title="">
                        <i class="ion-email"></i>
                        <span>Email's</span>
                    </a>
                    <ul class="sb-drp">
                        <li>
                            <a href="email-composer.html" title="">Email Compose</a>
                        </li>
                        <li>
                            <a href="inbox.html" title="">Inbox</a>
                        </li>
                        <li>
                            <a href="email.html" title="">Email</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Side Header -->

    <div class="option-panel">
        <span class="panel-btn">
            <i class="fa ion-android-settings fa-spin"></i>
        </span>
        <div class="color-panel">
            <h4>Text Color</h4>
            <span class="color1" onclick="setActiveStyleSheet('color1'); return false;">
                <i></i>
            </span>
            <span class="color2" onclick="setActiveStyleSheet('color2'); return false;">
                <i></i>
            </span>
            <span class="color3" onclick="setActiveStyleSheet('color'); return false;">
                <i></i>
            </span>
            <span class="color4" onclick="setActiveStyleSheet('color4'); return false;">
                <i></i>
            </span>
            <span class="color5" onclick="setActiveStyleSheet('color5'); return false;">
                <i></i>
            </span>
        </div>
    </div>




    <main>
        @yield('conteudo')
    </main>




    <footer>
        <p>Todos os direitos reservados
            <a href="#" title="">Academia VivaBem</a> &copy; 2024</p>
        <span>Dashboard</span>
    </footer>


    <!-- Vendor: Javascripts -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Vendor: Followed by our custom Javascripts -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/select2.min.js" type="text/javascript"></script>
    <script src="js/slick.min.js" type="text/javascript"></script>

    <!-- Our Website Javascripts -->
    <script src="js/isotope.min.js" type="text/javascript"></script>
    <script src="js/isotope-int.js" type="text/javascript"></script>
    <script src="js/jquery.counterup.js" type="text/javascript"></script>
    <script src="js/waypoints.min.js" type="text/javascript"></script>
    <script src="js/highcharts.js" type="text/javascript"></script>
    <script src="js/exporting.js" type="text/javascript"></script>
    <script src="js/highcharts-more.js" type="text/javascript"></script>
    <script src="js/moment.min.js" type="text/javascript"></script>
    <script src="js/jquery.circliful.min.js" type="text/javascript"></script>
    <script src="js/fullcalendar.min.js" type="text/javascript"></script>
    <script src="js/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="js/jquery.downCount.js" type="text/javascript"></script>
    <script src="js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="js/jquery.formtowizard.js" type="text/javascript"></script>
    <script src="js/form-validator.min.js" type="text/javascript"></script>
    <script src="js/form-validator-lang-en.min.js" type="text/javascript"></script>
    <script src="js/cropbox-min.js" type="text/javascript"></script>
    <script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="js/ion.rangeSlider.min.js" type="text/javascript"></script>
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
    <script src="js/styleswitcher.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            'use strict';

            var ranges = [
                    [1246406400000, 14.3, 27.7],
                    [1246492800000, 14.5, 27.8],
                    [1246579200000, 15.5, 29.6],
                    [1246665600000, 16.7, 30.7],
                    [1246752000000, 16.5, 25.0],
                    [1246838400000, 17.8, 25.7],
                    [1246924800000, 13.5, 24.8],
                    [1247011200000, 10.5, 21.4],
                    [1247097600000, 9.2, 23.8],
                    [1247184000000, 11.6, 21.8],
                    [1247270400000, 10.7, 23.7],
                    [1247356800000, 11.0, 23.3],
                    [1247443200000, 11.6, 23.7],
                    [1247529600000, 11.8, 20.7],
                    [1247616000000, 12.6, 22.4],
                    [1247702400000, 13.6, 19.6],
                    [1247788800000, 11.4, 22.6],
                    [1247875200000, 13.2, 25.0],
                    [1247961600000, 14.2, 21.6],
                    [1248048000000, 13.1, 17.1],
                    [1248134400000, 12.2, 15.5],
                    [1248220800000, 12.0, 20.8],
                    [1248307200000, 12.0, 17.1],
                    [1248393600000, 12.7, 18.3],
                    [1248480000000, 12.4, 19.4],
                    [1248566400000, 12.6, 19.9],
                    [1248652800000, 11.9, 20.2],
                    [1248739200000, 11.0, 19.3],
                    [1248825600000, 10.8, 17.8],
                    [1248912000000, 11.8, 18.5],
                    [1248998400000, 10.8, 16.1]
                ],
                averages = [
                    [1246406400000, 21.5],
                    [1246492800000, 22.1],
                    [1246579200000, 23],
                    [1246665600000, 23.8],
                    [1246752000000, 21.4],
                    [1246838400000, 21.3],
                    [1246924800000, 18.3],
                    [1247011200000, 15.4],
                    [1247097600000, 16.4],
                    [1247184000000, 17.7],
                    [1247270400000, 17.5],
                    [1247356800000, 17.6],
                    [1247443200000, 17.7],
                    [1247529600000, 16.8],
                    [1247616000000, 17.7],
                    [1247702400000, 16.3],
                    [1247788800000, 17.8],
                    [1247875200000, 18.1],
                    [1247961600000, 17.2],
                    [1248048000000, 14.4],
                    [1248134400000, 13.7],
                    [1248220800000, 15.7],
                    [1248307200000, 14.6],
                    [1248393600000, 15.3],
                    [1248480000000, 15.3],
                    [1248566400000, 15.8],
                    [1248652800000, 15.2],
                    [1248739200000, 14.8],
                    [1248825600000, 14.4],
                    [1248912000000, 15],
                    [1248998400000, 13.6]
                ];


            Highcharts.chart('chrt1', {

                title: {
                    text: null
                },

                xAxis: {
                    type: 'datetime'
                },

                yAxis: {
                    title: {
                        text: null
                    }
                },

                tooltip: {
                    crosshairs: true,
                    shared: true,
                    valueSuffix: '°C'
                },

                legend: {},

                series: [{
                    name: 'Temperature',
                    data: averages,
                    zIndex: 1,
                    marker: {
                        fillColor: 'white',
                        lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[0]
                    }
                }, {
                    name: 'Range',
                    data: ranges,
                    type: 'arearange',
                    lineWidth: 0,
                    linkedTo: ':previous',
                    color: Highcharts.getOptions().colors[0],
                    fillOpacity: 0.3,
                    zIndex: 0,
                    marker: {
                        enabled: false
                    }
                }]
            });

            Highcharts.chart('chart2', {

                chart: {
                    polar: true
                },

                title: {
                    text: null
                },

                pane: {
                    startAngle: 0,
                    endAngle: 360
                },

                xAxis: {
                    tickInterval: 45,
                    min: 0,
                    max: 360,
                    labels: {
                        formatter: function () {
                            return this.value + '°';
                        }
                    }
                },

                yAxis: {
                    min: 0
                },

                plotOptions: {
                    series: {
                        pointStart: 0,
                        pointInterval: 45
                    },
                    column: {
                        pointPadding: 0,
                        groupPadding: 0
                    }
                },
                legend: {
                    align: 'right',
                    verticalAlign: 'top',
                    itemStyle: {
                        color: '#555555',
                        fontSize: '13px',
                        fontWeight: '300'
                    },
                },
                series: [{
                    type: 'column',
                    name: 'Column',
                    data: [8, 7, 6, 5, 4, 3, 2, 1],
                    pointPlacement: 'between'
                }, {
                    type: 'line',
                    name: 'Line',
                    data: [1, 2, 3, 4, 5, 6, 7, 8]
                }, {
                    type: 'area',
                    name: 'Area',
                    data: [1, 8, 2, 7, 3, 6, 4, 5]
                }]
            });

            //===== To DO List Add Task Field =====//
            $('.to-do-tp > a').on('click', function () {
                $(this).next('div.add-tsk').slideToggle();
                return false;
            });

            //===== To Do List =====//
            $('.td-lst > li').on('click', function () {
                $(this).toggleClass('completed');
                return false;
            });

            //===== To Do List Deleted =====//
            $('.td-lst > li > a').on('click', function () {
                $(this).parent('li').slideUp();
                return false;
            });

            $('.add-tsk form > button').on('click', function () {
                var task_list = $('ul.td-lst');
                var task_item = $('.add-tsk form > input').val();
                var date = new Date();
                var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul",
                    "Aug", "Sep", "Oct", "Nov", "Dec"
                ];
                var current_date = date.getDate() + ' ' + months[date.getMonth()] + ' ' + date.getFullYear();
                if (task_item !== '' && task_item !== 'undefined') {
                    $(task_list).prepend('<li><h5>' + task_item +
                        '</h5> <span><i class="ion-ios-stopwatch"></i>' + current_date +
                        '</span> <a href="#" title=""><i class="ion-android-delete"></i></a></li>');
                    $('.td-lst > li').on("click", function () {
                        $(this).toggleClass('active');
                    });
                    $('.add-tsk form > input').addClass('null');
                    $('.add-tsk form > input').val('');
                    $('.add-tsk form > input').focus();
                    var attribute = $("ul.td-lst").children('li').eq(0).children('i');
                    return false;
                }
            });

            //===== Circliful =====//
            if ($.isFunction($.fn.circliful)) {
                $('#circl-prg').circliful({
                    animation: 1,
                    animationStep: 3,
                    foregroundBorderWidth: 5,
                    backgroundBorderWidth: 5,
                    percent: 66,
                    textSize: 35,
                    foregroundColor: '#50b8aa',
                    backgroundColor: "#96d5f7",
                    textStyle: 'font-size: 20px;',
                    textColor: '#555555',
                });
            }

            //===== Full Calendar =====//
            if ($.isFunction($.fn.fullCalendar)) {
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev',
                        center: 'title',
                        right: 'next'
                    },
                    height: 530,
                    defaultDate: '2017-09-12',
                    editable: true,
                    eventLimit: true,
                    events: [{
                            title: 'Long Event...',
                            start: '2017-09-04'
                        },
                        {
                            title: 'Repeating Event',
                            start: '2017-09-09',
                            end: '2017-09-10'
                        },
                        {
                            title: 'Word Show...',
                            start: '2017-09-21'
                        }
                    ]
                });
            }
        });
    </script>
</body>
</html>
