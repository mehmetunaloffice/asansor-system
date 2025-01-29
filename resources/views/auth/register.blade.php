 
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
<section class="auth d-flex">
        <div class="auth-left bg-main-50 flex-center p-24">
            <img src="{{ asset('themes/') }}/assets/images/thumbs/register2.webp" alt="">
        </div>
        <div class="auth-right py-40 px-24 flex-center flex-column">
            <div class="auth-right__inner mx-auto w-100">
                <a href="/" class="">
                    <img src="{{ asset('themes/') }}/assets/images/logo/logo.png" alt="">
                </a>
                <h2 class="mb-8">@lang("main.register")</h2>
               
 
       

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-24">
                        <label for="username" class="form-label mb-8 h6">@lang("main.name")</label>
                        <div class="position-relative">
                            <input class="form-control py-11 ps-40"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="@lang('main.name')">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-user"></i></span>
                        </div>
            </div>
            <div class="mb-24">
                        <label for="email" class="form-label mb-8 h6">@lang("main.email") </label>
                        <div class="position-relative">
                            <input  class="form-control py-11 ps-40" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="@lang('main.email')">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-envelope"></i></span>
                        </div>
                    </div>
                    <div class="mb-24">
                        <label for="current-password" class="form-label mb-8 h6">@lang("main.password")</label>
                        <div class="position-relative">
                            <input  class="form-control py-11 ps-40" id="current-password" type="password" name="password" required autocomplete="new-password">
                            <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#current-password"></span>
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-lock"></i></span>
                        </div>
                        <span class="text-gray-900 text-15 mt-4">@lang("main.passwordmin")</span>
                    </div>

                    <div class="mb-24">
                        <label for="current-password" class="form-label mb-8 h6"> @lang("main.currentpassword")  </label>
                        <div class="position-relative">
                            <input  class="form-control py-11 ps-40" id="current-password-2" type="password" name="password_confirmation" required autocomplete="new-password">
                            <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#current-password-2"></span>
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-lock"></i></span>
                        </div>
                        <span class="text-gray-900 text-15 mt-4">@lang("main.passwordmin")</span>
                    </div>
 
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                
 
                <button type="submit"  class="btn btn-main rounded-pill w-100">@lang("main.registerbutton")</button>
            </div> 
                
   
                     
                    <p class="mt-32 text-gray-600 text-center"> 
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                     @lang("main.AlreadyRegistered")
                    </p>

                    
                    
                </form>
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
