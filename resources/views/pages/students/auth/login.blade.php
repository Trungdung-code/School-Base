<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/icon.png">
    <title>Edutree – Online Course & Education HTML5 Template</title>
    <meta name="description" content="Edutree" />
    <meta name="keywords" content="Edutree" />

    <link href="css/style.css" rel="stylesheet">

    <link href="vendor/slick/slick/slick.css" rel="stylesheet">
    <link href="vendor/slick/slick/slick-theme.css" rel="stylesheet">

    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body class="bg-light">

    <section class="my-4" style="display: flex!important; align-items: center!important; height: 899px!important;">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <div class="h5 text-muted text-uppercase">Log in to <span class="text-primary">Edutree</span></div>
                    <div class="fw-bold display-5 py-2 text-black mb-2">Connect with the best professionals</div>
                    <p class="lead text-dark-50 mb-0">Learn from expert professionals and<br> join
                        the largest online community for creatives.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="text-center rounded-3 bg-white shadow-sm p-5">
                        <form action="{{ route('login-student-process') }}" method="POST" class="d-grid gap-3 mb-2">
                            @csrf
                            <div class="social-btn border rounded-3">
                                <a href="{{ route('googlelogin') }}" class="text-dark w-100">
                                    <div class="d-flex align-items-center py-3 px-3 border-bottom">
                                        <img src="img/google-icon.png" class="img-fluid" alt="Edutree">
                                        <p class="mb-0 mx-auto">Login with Google</p>
                                    </div>
                                </a>
                                <a href="{{ route('facebooklogin') }}" class="text-dark w-100">
                                    <div class="d-flex align-items-center py-3 px-3">
                                        <img src="img/fb-icon.png" class="img-fluid me-2" alt="Edutree">
                                        <p class="mb-0 mx-auto">Login with Facebook</p>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between divide my-2">
                                <hr class="w-100">
                                <span class="text-muted small px-2">OR</span>
                                <hr class="w-100">
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Email" name="email">
                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
                            <div class="d-flex justify-content-between">
                                <div class="mb-0 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label small text-muted" for="exampleCheck1">Rememberme</label>
                                </div>
                                <div>
                                    <a href="https://askbootstrap.com/preview/edutree/forgot.html"
                                        class="text-mdinfo small">Forgot password?</a>
                                </div>
                            </div>
                            <span>{{ session('status') }}</span>
                            @if ($errors->any())
                                <div style="color:#d81b60">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div style="color:#d81b60">
                                @if (Session::has('error'))
                                    {{ Session::get('error') }}
                                @endif
                            </div>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                        </form>
                        <p class="text-muted mt-3 mb-0">Don’t have an account? <a href="{{ route('signup') }}"
                                class="text-mdinfo">Sign
                                Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6fa9327f5ac08b36","version":"2021.12.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","si":100}'
        crossorigin="anonymous"></script>
</body>

<script src="vendor/jquery/jquery.min.js" type="0507e58f42c2c0b875726167-text/javascript"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="0507e58f42c2c0b875726167-text/javascript"></script>

<script src="vendor/slick/slick/slick.min.js" type="0507e58f42c2c0b875726167-text/javascript"></script>

<script src="js/custom.js" type="0507e58f42c2c0b875726167-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="0507e58f42c2c0b875726167-|49" defer=""></script>
</html>
