<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/style.css" rel="stylesheet">

    <link href="/vendor/slick/slick/slick.css" rel="stylesheet">
    <link href="/vendor/slick/slick/slick-theme.css" rel="stylesheet">

    <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body>
    @include('pages.layout.menu')
    @include('pages.instructor.layout.my_profile')
    <section class="py-3 border-bottom bg-white shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="creatives d-flex align-items-center">
                    <a href="instructor-earnings.html#" class="small text-primary">Home</a>
                    <i class="bi bi-caret-right mx-1"></i>
                    <a href="instructor-earnings.html#" class="small">Instructor</a>
                    <i class="bi bi-caret-right mx-1"></i>
                    <a href="instructor-earnings.html#" class="small">Earnings</a>
                </div>
            </div>
        </div>
    </section>
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                @include('pages.instructor.layout.nav')
                @yield('content')
            </div>
        </div>
    </div>
    @include('pages.layout.footer')
</body>

</html>
