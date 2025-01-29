 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> {{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('themes/assets/images/logo/favicon.png') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('themes/assets/css/bootstrap.min.css') }}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('themes/assets/css/file-upload.css') }}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('themes/') }}/assets/css/plyr.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="{{ asset('themes/assets/css/full-calendar.css') }}">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{ asset('themes/assets/css/jquery-ui.css') }}">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="{{ asset('themes/assets/css/editor-quill.css') }}">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="{{ asset('themes/assets/css/apexcharts.css') }}">
    <!-- calendar Css -->
    <link rel="stylesheet" href="{{ asset('themes/assets/css/calendar.css') }}">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="{{ asset('themes/assets/css/jquery-jvectormap-2.0.5.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('themes/assets/css/main.css') }}">
    
</head> 
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <div class="loader"></div>
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

    <section class="auth d-flex">
        <div class="auth-left bg-main-50 flex-center p-24">
            <img src="{{ asset('themes/') }}/assets/images/thumbs/bannerx.webp" alt="">
        </div>
        <div class="auth-right py-40 px-24 flex-center flex-column">
            <div class="auth-right__inner mx-auto w-100">
                <a href="/" class="">
                    <img src="{{ asset('themes/') }}/assets/images/logo/logo.png" alt="">
                </a>
              

        <form method="POST" action="{{ route('login') }}">
            @csrf
          <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

            <div class="mb-24">
                        <label for="fname" class="form-label mb-8 h6">@lang('main.email')</label>
                        <div class="position-relative">
                            <input type="text" class="form-control py-11 ps-40"  id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="@lang('main.email')">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-user"></i></span>
                        </div>
                    </div>

                    <div class="mb-24">
                        <label for="current-password" class="form-label mb-8 h6">@lang('main.password') </label>
                        <div class="position-relative">
                            <input class="form-control py-11 ps-40"  placeholder="@lang('main.password')" id="password"  type="password" name="password" required autocomplete="current-password" >
                            <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#password"></span>
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-lock"></i></span>
                        </div>
                    </div>
                    <div class="mb-32 flex-between flex-wrap gap-8">
                        <div class="form-check mb-0 flex-shrink-0">
                            <input class="form-check-input flex-shrink-0 rounded-4" id="remember_me" name="remember" type="checkbox">
                            <label class="form-check-label text-15 flex-grow-1" for="remember">@lang('main.remember')</label>
                        </div>
                   

                        @if (Route::has('password.request'))
                    <a class="text-main-600 hover-text-decoration-underline text-15 fw-medium" href="{{ route('password.request') }}">
                    @lang('main.reset')   
                    </a>
                @endif

                    </div> 
            <div class="flex items-center justify-end mt-4">             
                 <button class= "btn btn-main rounded-pill w-100">    @lang('main.login')     </button>
            </div>
        </form>
        <p class="mt-32 text-gray-600 text-center">@lang('main.nouserscreate')  
                        <a href="{{ route('register') }}" class="text-main-600 hover-text-decoration-underline">@lang('main.register')  </a>
                    </p>

        <div class="divider my-32 position-relative text-center">
                        <span class="divider__text text-gray-600 text-13 fw-medium px-26 bg-white">@lang('main.FollowOur')  </span>
                    </div>

                    <ul class="flex-align gap-10 flex-wrap justify-content-center">
                        <li>
                            <a href="https://www.facebook.com" class="w-38 h-38 flex-center rounded-6 text-facebook-600 bg-facebook-50 hover-bg-facebook-600 hover-text-white text-lg">
                                <i class="ph-fill ph-facebook-logo"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com" class="w-38 h-38 flex-center rounded-6 text-twitter-600 bg-twitter-50 hover-bg-twitter-600 hover-text-white text-lg">
                                <i class="ph-fill ph-twitter-logo"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com" class="w-38 h-38 flex-center rounded-6 text-google-600 bg-google-50 hover-bg-google-600 hover-text-white text-lg">
                                <i class="ph ph-google-logo"></i>
                            </a>
                        </li>
                    </ul>
     
            </div>
        </div>
    </section>

        <!-- Jquery js -->
    <script src="{{ asset('themes/') }}/assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('themes/') }}/assets/js/boostrap.bundle.min.js"></script>
    <!-- Phosphor Js -->
    <script src="{{ asset('themes/') }}/assets/js/phosphor-icon.js"></script>
    <!-- file upload -->
    <script src="{{ asset('themes/') }}/assets/js/file-upload.js"></script>
    <!-- file upload -->
    <script src="{{ asset('themes/') }}/assets/js/plyr.js"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="{{ asset('themes/') }}/assets/js/full-calendar.js"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('themes/') }}/assets/js/jquery-ui.js"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('themes/') }}/assets/js/editor-quill.js"></script>
    <!-- apex charts -->
    <script src="{{ asset('themes/') }}/assets/js/apexcharts.min.js"></script>
    <!-- Calendar Js -->
    <script src="{{ asset('themes/') }}/assets/js/calendar.js"></script>
    <!-- jvectormap Js -->
    <script src="{{ asset('themes/') }}/assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <!-- jvectormap world Js -->
    <script src="{{ asset('themes/') }}/assets/js/jquery-jvectormap-world-mill-en.js"></script>
    
    <!-- main js -->
    <script src="{{ asset('themes/') }}/assets/js/main.js"></script>



    </body>
</html> 
