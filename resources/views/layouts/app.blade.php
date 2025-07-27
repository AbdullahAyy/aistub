<!doctype html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title', $sendBlade['title']) - {{ $siteName }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
        crossorigin="anonymous"
        media="print"
        onload="this.media='all'"
    />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous"
    />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
        crossorigin="anonymous"
    />

    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>

</head>
<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

<div class="app-wrapper">

    <nav class="app-header navbar navbar-expand bg-body">

        <div class="container-fluid">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                        <i class="bi bi-list"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Ana Sayfa</a></li>
                <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Yapay Zekalarım</a></li>
            </ul>

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="bi bi-search"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">
                        <i class="bi bi-chat-text"></i>
                        <span class="navbar-badge badge text-bg-danger">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <a href="#" class="dropdown-item">
                            <!--begin::Message-->
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img
                                        src="{{ asset('img/user1-128x128.jpg') }}"
                                        alt="User Avatar"
                                        class="img-size-50 rounded-circle me-3"
                                    />
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-end fs-7 text-danger"
                                        ><i class="bi bi-star-fill"></i
                                            ></span>
                                    </h3>
                                    <p class="fs-7">Call me whenever you can...</p>
                                    <p class="fs-7 text-secondary">
                                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                            <!--end::Message-->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!--begin::Message-->
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img
                                        src="{{ asset('img/user8-128x128.jpg') }}"
                                        alt="User Avatar"
                                        class="img-size-50 rounded-circle me-3"
                                    />
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-end fs-7 text-secondary">
                                          <i class="bi bi-star-fill"></i>
                                        </span>
                                    </h3>
                                    <p class="fs-7">I got your message bro</p>
                                    <p class="fs-7 text-secondary">
                                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                            <!--end::Message-->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!--begin::Message-->
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img
                                        src="{{ asset('img/user3-128x128.jpg') }}"
                                        alt="User Avatar"
                                        class="img-size-50 rounded-circle me-3"
                                    />
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-end fs-7 text-warning">
                                          <i class="bi bi-star-fill"></i>
                                        </span>
                                    </h3>
                                    <p class="fs-7">The subject goes here</p>
                                    <p class="fs-7 text-secondary">
                                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                            <!--end::Message-->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!--end::Messages Dropdown Menu-->
                <!--begin::Notifications Dropdown Menu-->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">
                        <i class="bi bi-bell-fill"></i>
                        <span class="navbar-badge badge text-bg-warning">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="bi bi-envelope me-2"></i> 4 new messages
                            <span class="float-end text-secondary fs-7">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="bi bi-people-fill me-2"></i> 8 friend requests
                            <span class="float-end text-secondary fs-7">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                            <span class="float-end text-secondary fs-7">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
                    </div>
                </li>
                <!--end::Notifications Dropdown Menu-->
                <!--begin::Fullscreen Toggle-->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                        <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                        <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                    </a>
                </li>
                <!--end::Fullscreen Toggle-->
                <!--begin::User Menu Dropdown-->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img
                            src="{{ asset('img/user2-160x160.jpg') }}"
                            class="user-image rounded-circle shadow"
                            alt="User Image"
                        />
                        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <!--begin::User Image-->
                        <li class="user-header text-bg-primary">
                            <img
                                src="{{ asset('img/user2-160x160.jpg') }}"
                                class="rounded-circle shadow"
                                alt="User Image"
                            />
                            <p>
                                {{ Auth::user()->name }}
                                <small>Üye Tarihi: {{ Auth::user()->created_at }}</small>
                            </p>
                        </li>
                        <!--end::User Image-->
                        <!--begin::Menu Body-->
                        <li class="user-body">
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-4 text-center"><a href="#">Followers</a></div>
                                <div class="col-4 text-center"><a href="#">Sales</a></div>
                                <div class="col-4 text-center"><a href="#">Friends</a></div>
                            </div>
                            <!--end::Row-->
                        </li>
                        <!--end::Menu Body-->
                        <!--begin::Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a href="#" class="btn btn-default btn-flat float-end" onclick="signout('{{ route('logout') }}')">Sign out</a>
                        </li>
                        <!--end::Menu Footer-->
                    </ul>
                </li>
                <!--end::User Menu Dropdown-->
            </ul>
            <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
    </nav>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
            <a href="./index.html" class="brand-link">
                <img
                    src="{{ asset('img/AdminLTELogo.png') }}"
                    alt="AdminLTE Logo"
                    class="brand-image opacity-75 shadow"
                />
                <span class="brand-text fw-light">AdminLTE 4</span>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <ul
                    class="nav sidebar-menu flex-column"
                    data-lte-toggle="treeview"
                    role="navigation"
                    aria-label="Main navigation"
                    data-accordion="false"
                    id="navigation"
                >

                    <li class="nav-item">
                        <a href="/" class="nav-link {{ request()->routeIs('Home') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-house"></i>
                            <p>Ana Sayfa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/ais" class="nav-link {{ request()->routeIs('ais.index') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-openai"></i>
                            <p>Yapay Zekalarım</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('usages.index') }}" class="nav-link {{ request()->routeIs('usages.index') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-globe"></i>
                            <p>API Kullanımı</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon bi bi-gear"></i>
                            <p>
                                Ayarlar
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link {{ request()->routeIs('config.index') ? 'active' : '' }}">
                                    <i class="nav-icon bi bi-gear"></i>
                                    <p>Ayarlar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link {{ request()->routeIs('config.profile') ? 'active' : '' }}">
                                    <i class="nav-icon bi bi-person"></i>
                                    <p>Profil</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index3.html" class="nav-link">
                                    <i class="nav-icon bi bi-box-arrow-left"></i>
                                    <p>Çıkış Yap</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
                <!--end::Sidebar Menu-->
            </nav>
        </div>
        <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
        <div class="p-3">
            @yield('content')
        </div>
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
            Copyright &copy; 2014-2025&nbsp;
            <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
    </footer>
    <!--end::Footer-->
</div>
<!--end::App Wrapper-->
<!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
    crossorigin="anonymous"
></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    crossorigin="anonymous"
></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
    crossorigin="anonymous"
></script>
<!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="{{ asset('js/adminlte.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function signout(url) {
        $.ajax({
            url: url,
            method: 'POST',
            success: function(response) {
                alert('Başarıyla Çıkış Yaptınız Yönlendiriliyorsunuz...');
                window.location.href = "/login";
            },
            error: function(xhr) {
                alert('Hata: ' + xhr.responseText);
            }
        });
    }
</script>

@yield('scripts')
</body>
</html>
