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

<body id="kt_body" class="app-blank app-blank">
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
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center"
                style="background-image: url({{ asset('admin/assets/media/misc/auth-bg.png') }})">
                <div class="d-flex flex-column flex-center w-100">
                    <a href="admin/index.html" class="mb-0 ">
                        <img alt="Logo" src="{{ asset('admin/assets/media/logos/default-white.svg') }}"
                            class="h-40px h-lg-50px" />
                    </a>
                    <img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20"
                        src="{{ asset('admin/assets/media/misc/auth-screens.png') }}" alt="" />
                    <h1 class="d-none d-lg-block text-white fs-2qx fw-bold text-center mb-7">Fast, Efficient and
                        Productive</h1>
                    <div class="d-none d-lg-block text-white fs-base text-center">In this kind of post,
                        <a href="#" class="opacity-75-hover text-warning fw-semibold me-1">the
                            blogger</a>introduces a person they’ve interviewed
                        <br />and provides some background information about
                        <a href="#" class="opacity-75-hover text-warning fw-semibold me-1">the interviewee</a>and
                        their
                        <br />work following this is a transcript of the interview.
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form"
                            data-kt-redirect-url="{{ route('admin.index') }}" action="{{ route('register') }}"
                            method="POST">
                            @csrf
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
                                <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                            </div>
                            <div class="row g-3 mb-9">
                                <div class="col-md-6">
                                    <a href="#"
                                        class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo"
                                            src="{{ asset('admin/assets/media/svg/brand-logos/google-icon.svg') }}"
                                            class="h-15px me-3" />Sign in with Google</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#"
                                        class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo"
                                            src="{{ asset('admin/assets/media/svg/brand-logos/apple-black.svg') }}"
                                            class="theme-light-show h-15px me-3" />
                                        <img alt="Logo"
                                            src="{{ asset('admin/assets/media/svg/brand-logos/apple-black-dark.svg') }}"
                                            class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
                                </div>
                            </div>
                            <div class="separator separator-content my-14">
                                <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                            </div>
                            <div class="fv-row mb-8">
                                <input type="text" placeholder="First Name" name="first_name" autocomplete="off"
                                    class="form-control bg-transparent" />
                            </div>
                            <div class="fv-row mb-8">
                                <input type="text" placeholder="Last Name" name="last_name" autocomplete="off"
                                    class="form-control bg-transparent" />
                            </div>
                            <div class="fv-row mb-8">
                                <input type="tel" placeholder="Phone number" name="phone" autocomplete="off"
                                    class="form-control bg-transparent" />
                            </div>
                            <div class="fv-row mb-8">
                                <input type="text" placeholder="Email" name="email" autocomplete="off"
                                    class="form-control bg-transparent" />
                            </div>
                            <div class="fv-row mb-8" data-kt-password-meter="true">
                                <div class="mb-1">
                                    <div class="position-relative mb-3">
                                        <input class="form-control bg-transparent" type="password"
                                            placeholder="Password" name="password" autocomplete="off" />
                                        <span
                                            class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                            data-kt-password-meter-control="visibility">
                                            <i class="bi bi-eye-slash fs-2"></i>
                                            <i class="bi bi-eye fs-2 d-none"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center mb-3"
                                        data-kt-password-meter-control="highlight">
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                </div>
                                <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &
                                    symbols.</div>
                            </div>
                            <div class="fv-row mb-8">

                                <input placeholder="Repeat Password" name="password_confirmation" type="password"
                                    autocomplete="off" class="form-control bg-transparent" />
                            </div>
                            <div class="fv-row mb-8">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
                                        <a href="#" class="ms-1 link-primary">Terms</a></span>
                                </label>
                            </div>
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                    <span class="indicator-label">Sign up</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
                                <a href="{{ route('login') }}" class="link-primary fw-semibold">Sign in</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex flex-center flex-wrap px-5">
                    <div class="d-flex fw-semibold text-primary fs-base">
                        <a href="#" class="px-5" target="_blank">Terms</a>
                        <a href="#" class="px-5" target="_blank">Plans</a>
                        <a href="#" class="px-5" target="_blank">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/page/register.js') }}"></script>
</body>

</html>
