<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('theme/admin/assets/images/logo/favicon.png') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('theme/admin/assets/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
<div class="app">
    <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
        <div class="d-flex flex-column justify-content-between w-100">
            <div class="container d-flex h-100">
                <div class="row align-items-center w-100">
                    <div class="col-md-7 col-lg-5 m-h-auto">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between m-b-30">
                                    <img class="img-fluid" alt="" src="{{ asset('theme/admin/assets/images/logo/logo.png') }}">
                                    <h2 class="m-b-0">Sign In</h2>
                                </div>


                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">
                                            <span class="alert-icon">
                                                <i class="anticon anticon-close-o"></i>
                                            </span>
                                            <span>{{ $error }}</span>
                                        </div>
                                    @endforeach
                                @endif

                                <form name="user_register" action="{{ route('user_register') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="userName">Kullanıcı adı:</label>
                                        <input type="text" class="form-control" id="userName" name="username" placeholder="Kullanıcı adı">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Parola:</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Parola">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="confirmPassword">Parola doğrula:</label>
                                        <input type="password" class="form-control" id="confirmPassword" name="conf_password" placeholder="Parola">
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between p-t-15">
                                            <div class="checkbox">
                                                <input id="checkbox" name="checkbox" type="checkbox">
                                                <label for="checkbox"><span>Onaylıyorum <a href="">Kullanıcı sözleşmesi</a></span></label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Kayıt ol</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-flex p-h-40 justify-content-between">
                <span class="">© 2019 ThemeNate</span>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="text-dark text-link" href="">Legal</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-dark text-link" href="">Privacy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Core Vendors JS -->
<script src="{{ asset('theme/admin/assets/js/vendors.min.js') }}"></script>

<!-- page js -->

<!-- Core JS -->
<script src="{{ asset('theme/admin/assets/js/app.min.js') }}"></script>

</body>

</html>
