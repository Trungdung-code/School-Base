<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SchoolBase</title>
    <link href="/css/style.css" rel="stylesheet">

    <link href="/vendor/slick/slick/slick.css" rel="stylesheet">
    <link href="/vendor/slick/slick/slick-theme.css" rel="stylesheet">

    <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body>
    @include('pages.students.layout.menu')
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
    @include('pages.students.layout.footer')
</body>

</html>
