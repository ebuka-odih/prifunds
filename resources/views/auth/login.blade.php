
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Login | {{ env('APP_NAME') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('dash/assets/css/dashlite.css?ver=3.2.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('dash/assets/css/theme.css?ver=3.2.0') }}">
</head>

<body class="nk-body bg-white is-dark npc-general pg-auth dark-mode">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                    <div class="brand-logo pb-4 text-center">
                        <a href="{{ route('index') }}" class="logo-link">
{{--                            <h3 style="color: white; font-weight: bolder">{{ env('APP_NAME') }}</h3>--}}
                            <img style="" class="logo-img logo-img-lg" src="{{ asset('img/logo.png') }}" srcset="{{ asset('img/logo.png') }} 2x" alt="logo">
                        </a>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Sign-In</h4>
                                    <div class="nk-block-des">
                                        <p>Access the {{ env('APP_NAME') }} panel using your email and passcode.</p>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Email or Username</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <input type="email" name="email" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address ">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="form-control-wrap">
                                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                                    </div>
                                    <div class="form-label-group">
                                        <label class="form-label" for="password">Passcode</label>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="link link-primary link-sm"><i class="fa fa-lock"></i> Forgot password?</a><br>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                </div>
                            </form>
                            <div class="form-note-s2 text-center pt-4"> New on our platform? <a href="{{ route('register') }}">Create an account</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="nk-footer nk-auth-footer-full">
                    <div class="container wide-lg">
                        <div class="row g-3">
                            <div class="col-lg-6 order-lg-last">
                                <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms & Condition</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Help</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="nk-block-content text-center text-lg-left">
                                    <p class="text-soft">&copy; {{ Date('Y') }} {{ env('APP_NAME') }}. All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="{{ asset('dash/assets/js/bundle.js?ver=3.2.0') }}"></script>
<script src="{{ asset('dash/assets/js/scripts.js?ver=3.2.0') }}"></script>
<!-- select region modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="region">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title mb-4">Select Your Countryy</h5>
                <div class="nk-country-region">
                    <ul class="country-list text-center gy-2">
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/arg.png" alt="" class="country-flag">
                                <span class="country-name">Argentina</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/aus.png" alt="" class="country-flag">
                                <span class="country-name">Australia</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                <span class="country-name">Bangladesh</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/canada.png" alt="" class="country-flag">
                                <span class="country-name">Canada <small>(English)</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/china.png" alt="" class="country-flag">
                                <span class="country-name">Centrafricaine</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/china.png" alt="" class="country-flag">
                                <span class="country-name">China</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/french.png" alt="" class="country-flag">
                                <span class="country-name">France</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/germany.png" alt="" class="country-flag">
                                <span class="country-name">Germany</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/iran.png" alt="" class="country-flag">
                                <span class="country-name">Iran</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/italy.png" alt="" class="country-flag">
                                <span class="country-name">Italy</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                <span class="country-name">México</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                <span class="country-name">Philippines</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                <span class="country-name">Portugal</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                <span class="country-name">South Africa</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                <span class="country-name">Spain</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                <span class="country-name">Switzerland</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/uk.png" alt="" class="country-flag">
                                <span class="country-name">United Kingdom</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/english.png" alt="" class="country-flag">
                                <span class="country-name">United State</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div><!-- .modal -->

</html>
