<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    @yield('head')

</head>
<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand" href="index.html">SB Admin Pro</a>
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#">
            <i data-feather="menu"></i>
        </button>
        <ul class="navbar-nav align-items-center ml-auto">
            
            <li class="nav-item dropdown no-caret mr-3 d-md-none">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
                <!-- Dropdown - Search-->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100">
                        <div class="input-group input-group-joined input-group-solid">
                            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <div class="input-group-text"><i data-feather="search"></i></div>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="mr-2" data-feather="mail"></i>
                        Message Center
                    </h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img" src="https://source.unsplash.com/vTL_qy03D1I/60x60" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img" src="https://source.unsplash.com/4ytMf8MgJlY/60x60" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Diane Chambers · 2d</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" /></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">Valerie Luna</div>
                            <div class="dropdown-user-details-email">vluna@aol.com</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Configuración
                    </a>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Cerrar sesión
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-dark">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="sidenav-menu-heading">Core</div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Dashboards
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link" href="index.html">
                                    Default
                                    <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                </a>
                                <a class="nav-link" href="dashboard-2.html">
                                    Multipurpose
                                    <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                </a>
                                <a class="nav-link" href="dashboard-3.html">
                                    Affiliate
                                    <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                </a>
                            </nav>
                        </div>
                        <div class="sidenav-menu-heading">App Views</div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="nav-link-icon"><i data-feather="grid"></i></div>
                            Pages
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                                    Account
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAccount" data-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="account-profile.html">
                                            Profile
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="account-billing.html">
                                            Billing
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="account-security.html">
                                            Security
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="account-notifications.html">
                                            Notifications
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" data-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic">
                                            Basic
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuthBasic" data-parent="#accordionSidenavPagesAuth">
                                            <nav class="sidenav-menu-nested nav">
                                                <a class="nav-link" href="auth-login-basic.html">Login</a>
                                                <a class="nav-link" href="auth-register-basic.html">Register</a>
                                                <a class="nav-link" href="auth-password-basic.html">Forgot Password</a>
                                            </nav>
                                        </div>
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial">
                                            Social
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuthSocial" data-parent="#accordionSidenavPagesAuth">
                                            <nav class="sidenav-menu-nested nav">
                                                <a class="nav-link" href="auth-login-social.html">Login</a>
                                                <a class="nav-link" href="auth-register-social.html">Register</a>
                                                <a class="nav-link" href="auth-password-social.html">Forgot Password</a>
                                            </nav>
                                        </div>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" data-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="error-400.html">
                                            400 Error
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="error-401.html">
                                            401 Error
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="error-403.html">
                                            403 Error
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="error-404-1.html">
                                            404 Error 1
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="error-404-2.html">
                                            404 Error 2
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="error-500.html">
                                            500 Error
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="error-503.html">
                                            503 Error
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="error-504.html">
                                            504 Error
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseKnowledgeBase" aria-expanded="false" aria-controls="pagesCollapseKnowledgeBase">
                                    Knowledge Base
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseKnowledgeBase" data-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="knowledge-base-home-1.html">
                                            Home 1
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="knowledge-base-home-2.html">
                                            Home 2
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="knowledge-base-category.html">
                                            Category
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="knowledge-base-article.html">
                                            Article
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                    </nav>
                                </div>
                                <a class="nav-link" href="pricing.html">
                                    Pricing
                                    <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                </a>
                                <a class="nav-link" href="invoice.html">
                                    Invoice
                                    <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                </a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                            <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                            Flows
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="multi-tenant-select.html">Multi-Tenant Registration</a>
                                <a class="nav-link" href="wizard.html">
                                    Wizard
                                    <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                </a>
                            </nav>
                        </div>
                        <div class="sidenav-menu-heading">UI Toolkit</div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="nav-link-icon"><i data-feather="layout"></i></div>
                            Layout
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutSidenavVariations" aria-expanded="false" aria-controls="collapseLayoutSidenavVariations">
                                    Sidenav Variations
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutSidenavVariations" data-parent="#accordionSidenavLayout">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                        <a class="nav-link" href="layout-dark.html">Dark Sidenav</a>
                                        <a class="nav-link" href="layout-rtl.html">RTL Layout</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutContainers" aria-expanded="false" aria-controls="collapseLayoutContainers">
                                    Container Options
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutContainers" data-parent="#accordionSidenavLayout">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="layout-boxed.html">
                                            Boxed Layout
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="layout-fluid.html">Fluid Layout</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutsPageHeaders" aria-expanded="false" aria-controls="collapseLayoutsPageHeaders">
                                    Page Headers
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutsPageHeaders" data-parent="#accordionSidenavLayout">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="header-simplified.html">Simplified</a>
                                        <a class="nav-link" href="header-compact.html">
                                            Compact
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                        <a class="nav-link" href="header-overlap.html">Content Overlap</a>
                                        <a class="nav-link" href="header-breadcrumbs.html">Breadcrumbs</a>
                                        <a class="nav-link" href="header-light.html">Light</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutsStarterTemplates" aria-expanded="false" aria-controls="collapseLayoutsStarterTemplates">
                                    Starter Layouts
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutsStarterTemplates" data-parent="#accordionSidenavLayout">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="starter-default.html">Default</a>
                                        <a class="nav-link" href="starter-minimal.html">
                                            Minimal
                                            <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                        </a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                            <div class="nav-link-icon"><i data-feather="package"></i></div>
                            Components
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseComponents" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="alerts.html">Alerts</a>
                                <a class="nav-link" href="avatars.html">Avatars</a>
                                <a class="nav-link" href="badges.html">Badges</a>
                                <a class="nav-link" href="buttons.html">Buttons</a>
                                <a class="nav-link" href="cards.html">
                                    Cards
                                    <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                </a>
                                <a class="nav-link" href="dropdowns.html">Dropdowns</a>
                                <a class="nav-link" href="forms.html">
                                    Forms
                                    <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                </a>
                                <a class="nav-link" href="modals.html">Modals</a>
                                <a class="nav-link" href="navigation.html">
                                    Navigation
                                    <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                </a>
                                <a class="nav-link" href="progress.html">Progress</a>
                                <a class="nav-link" href="step.html">
                                    Step
                                    <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                </a>
                                <a class="nav-link" href="timeline.html">
                                    Timeline
                                    <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                </a>
                                <a class="nav-link" href="toasts.html">Toasts</a>
                                <a class="nav-link" href="tooltips.html">Tooltips</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                            <div class="nav-link-icon"><i data-feather="tool"></i></div>
                            Utilities
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUtilities" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="animations.html">Animations</a>
                                <a class="nav-link" href="background.html">Background</a>
                                <a class="nav-link" href="borders.html">Borders</a>
                                <a class="nav-link" href="lift.html">Lift</a>
                                <a class="nav-link" href="shadows.html">Shadows</a>
                                <a class="nav-link" href="typography.html">
                                    Typography
                                    <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                </a>
                            </nav>
                        </div>
                        <div class="sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="nav-link-icon"><i data-feather="filter"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title">Valerie Luna</div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-compact page-header-dark border-bottom bg-white bg-gradient-primary-to-secondary mb-4">
                <!-- <header class="page-header page-header-compact page-header-dark border-bottom bg-white bg-gradient-primary-to-secondary mb-4"> -->
                <!-- <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4"> -->
                    <!-- bg-gradient-primary-to-secondary -->
                    <div class="container-fluid">
                        <div class="page-header-content">
                            <div class="row align-items-center justify-content-between pt-3">
                                <div class="col-auto mb-3">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="file"></i></div>
                                        Blank Starter (Minimal)
                                    </h1>
                                </div>
                                <div class="col-12 col-xl-auto mb-3">Optional page header content</div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header">Example Card</div>
                        <div class="card-body">This is a blank page. You can use this page as a boilerplate for creating new pages! This page uses the compact page header format, which allows you to create pages with a very minimal and slim page header so you can get right to showcasing your content.</div>
                    </div>
                </div>
            </main>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Your Website 2020</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    @yield('scripts')
</body>
</html>