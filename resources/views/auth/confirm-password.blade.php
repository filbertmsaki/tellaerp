<!DOCTYPE html>
<html lang="en">

<head>
    <title>Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Theme by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/keen" />
    <meta property="og:site_name" content="Keenthemes | Keen" />
    <link rel="canonical" href="https://preview.keenthemes.com/keen" />
    <link rel="shortcut icon" href="{{ asset('admin/assets/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <style>
            body {
                background-image: url('{{ asset('admin/assets/images/pages/bg-light.jpg') }}');
            }

            [data-theme="dark"] body {
                background-image: url('{{ asset('admin/assets/images/pages/bg-dark.jpg') }}');
            }
        </style>
        <div class="d-flex flex-column flex-center flex-column-fluid">
            <div class="d-flex flex-column flex-center text-center">
                <div class="card card-flush w-md-650px py-5">
                    <div class="card-body">
                        <div class="mb-7">
                            <a href="{{ route('admin.index') }}" class="">
                                <img alt="Logo" src="{{ asset('admin/assets/media/logos/default-small.svg') }}"
                                    class="h-40px" />
                            </a>
                        </div>
                        <div class="fw-semibold fs-6 text-gray-500 mb-7">
                            <form class="form w-100" novalidate="novalidate" id="kt_password_confirm_form"
                                method="POST" action="{{ route('password.confirm') }}">
                                @csrf
                                <div class="text-center mb-10">
                                    <h1 class="text-dark fw-bolder mb-3">Confirm Password</h1>
                                    <div class="text-gray-500 fw-semibold fs-6">This is a secure area of the
                                        application.
                                        Please confirm your password before continuing.
                                    </div>
                                </div>
                                <div class="fv-row mb-8">
                                    <input type="password" placeholder="Enter Password" name="password"
                                        autocomplete="off"
                                        class="form-control bg-transparent @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}" required />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                                    <button type="submit" id="kt_password_confirm_submit" class="btn btn-primary me-4">
                                        <span class="indicator-label">Confirm</span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
</body>

</html>
