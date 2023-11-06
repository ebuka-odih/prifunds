
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | {{ env('APP_NAME') }} </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('dash/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('dash/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/skin_color.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../img/bg.jpg)">

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">

        <div class="col-12">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="bg-white rounded10 shadow-lg">
                        <div class="content-top-agile p-20 pb-0">
                           <h2 style="font-weight: bolder" class="text-primary">Sign Up</h2>
                        </div>
                        <div class="p-40">
                            <form action="{{ route('register') }}" method="POST">
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
                                <input type="hidden" name="referred_by" value="{{ request()->id}}" />
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="fa fa-user"></i></span>
                                        <input type="text" name="name" class="form-control ps-15 bg-transparent" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="fas fa-envelope"></i></span>
                                        <input type="email" name="email" class="form-control ps-15 bg-transparent" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="fas fa-user-tag"></i></span>
                                        <input type="text" name="username" class="form-control ps-15 bg-transparent" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-row mb-3">
                                        <label for="">Currency</label>
                                        <select name="currency" id="" class="form-control ps-15 bg-transparent">
                                            <option selected disabled>Select Gender</option>
                                            <option value="USD">USD</option>
                                            <option value="GBP">GBP</option>
                                            <option value="EURO">EURO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="fas fa-user-tag"></i></span>
                                        <input type="text" name="username" class="form-control ps-15 bg-transparent" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password_confirmation" class="form-control ps-15 bg-transparent" placeholder="Retype Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkbox">
                                            <input type="checkbox" id="basic_checkbox_1">
                                            <label for="basic_checkbox_1">I agree to the <a href="#" class="text-primary"><b>Terms</b></a></label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-danger margin-top-10">SIGN UP</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="mt-15 mb-0">Already have an account? <a href="{{ route('login') }}" class="text-primary ms-5">Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Vendor JS -->
<script src="{{ asset('dash/js/vendors.min.js') }}"></script>
<script src="{{ asset('dash/js/pages/chat-popup.js') }}"></script>
<script src="{{ asset('dash/js/feather.min.js') }}"></script>


</body>
</html>
