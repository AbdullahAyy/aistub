<!doctype html>
<html lang="tr">
<!--begin::Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Kayıt Ol - AiStub</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />

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
</head>
<!--end::Head-->
<!--begin::Body-->
<body class="register-page bg-body-secondary">
<div class="register-box">
    <div class="register-logo">
        <a href="/"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
        <div class="card-body register-card-body">
            <p class="register-box-msg">Yeni Üyelik Oluşturun</p>
            <form id="registerForm">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full Name" name="name" />
                    <div class="input-group-text"><span class="bi bi-person"></span></div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" />
                    <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" />
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password Again" name="password_confirmation" />
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                </div>
                <!--begin::Row-->
                <div class="row">
                    <div class="col-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">
                                <a href="#">Kullanıcı sözleşmesi</a>'ni okudum, kabul ediyorum.
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!--end::Row-->
            </form>
            <div class="social-auth-links text-center mb-3 d-grid gap-2">
                <p>- veya -</p>
                <a href="#" class="btn btn-primary">
                    <i class="bi bi-facebook me-2"></i> Facebook ile giriş yapın
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="bi bi-google me-2"></i> Google ile giriş yapın
                </a>
            </div>
            <!-- /.social-auth-links -->
            <p class="mb-0">
                <a href="{{ route('login') }}" class="text-center"> Mevcut hesabım var. </a>
            </p>
        </div>
        <!-- /.register-card-body -->
    </div>
</div>
<!-- /.register-box -->
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
<script type="text/javascript">
    $('#registerForm').on('submit', function (e){
        e.preventDefault();


        $.ajax({
            url: '{{ url('/register') }}',
            method: 'post',
            data: $(this).serialize(),
            success: function(response) {
                alert('Başarıyla Üye Oldunuz Yönlendiriliyorsunuz...');
                window.location.href = "{{ route('home') }}";
            },
            error: function(xhr) {
                alert('Hata: ' + xhr.responseText);
            }
        })

    });
</script>
</body>
</html>
