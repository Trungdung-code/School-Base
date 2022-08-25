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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-0 main-header-nav" id="nav-bar">
        <div class="container">
            <a href="index.html" class="brand d-flex align-items-center mb-0 text-decoration-none me-4 fw-bold h4 text-white">
                <img src="/img/logo.png" alt="" class="img-fluid d-inline-block align-text-center me-2 rounded-pill border shadow" alt="Edutree" />
                Edutree
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto gap-2 mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
<<<<<<< HEAD
                        <a class="nav-link px-0 py-4 active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link px-0 py-4" href="{{ route('about') }}">About</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link px-0 py-4" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <div class="d-flex gap-1 align-items-center main-header-nav-right">
                    <a href="#" class="btn text-decoration-none text-white rounded-pill border-0">Log In</a>
                    <a href="#" type="button" class="btn btn-success rounded-pill">Sign up</a>
=======
                        <a class="nav-link px-0 py-4 active" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link px-0 py-4" href="#">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link px-0 py-4" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex gap-1 align-items-center main-header-nav-right">
                    <a href="{{route('student.login')}}" class="btn text-decoration-none text-white rounded-pill border-0">Log In</a>
                    <a href="{{route('signup')}}" type="button" class="btn btn-success rounded-pill">Sign up</a>
>>>>>>> fe8a839103309382979e4591e14342cbbd3bf89e
                </div>
            </div>
        </div>
    </nav>

    <div class="banner-search bg-primary py-5">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="col-12 col-lg-6 text-end">
                    <img src="img/hero-img.png" class="img-fluid" alt="#" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="fw-bold text-white display-4 mb-3">Edutree is a community <br>for creative
                        people.</h1>
                    <p class="lead text-white-50 mb-0">Learn from expert professionals and<br> join
                        the largest online community for creatives.
                    </p>
                    <form action="https://askbootstrap.com/preview/edutree/courses.html" class="pt-2 mb-5">
                        <div class="d-flex mt-4 bg-white rounded-3 align-items-center services-search-form overflow-hidden">
                            <div class="form-floating services-search-form-service">
                                <input type="text" class="form-control border-0" id="sservice"
                                    placeholder="Enter Service...">
                                <label for="sservice">What <span class="text-body">courses</span> do you
                                    need?</label>
                            </div>
                            <button class="btn btn-success border-0 d-flex align-items-center rounded-3 text-uppercase m-1"
                                type="submit"><i class="icofont-search-1"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-light py-5">
        <div class="container py-4">
            <div class="d-flex align-items-end gap-2 mb-4">
                <div>
                    <h3 class="pb-0 fw-bold text-dark mb-1">Learn by Doing</h3>
                    <p class="text-muted m-0">Get access to the best online courses for creatives.</p>
                </div>
                <a href="https://askbootstrap.com/preview/edutree/courses.html"
                    class="text-decoration-none text-primary ms-auto">See More <i class="bi bi-arrow-right-circle"></i></a>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            </div>
        </div>
        <div class="text-center mt-3 pb-4">
            <a href="https://askbootstrap.com/preview/edutree/courses.html" class="btn btn-danger">See more
                Edutree course
                &nbsp;<i class="bi bi-arrow-right"></i></a>
        </div>
        </div>
    </section>
    <div class="feature-list d-none d-sm-block py-5 bg-white">
        <div class="container">
            <div class="row align-items-center py-4">
                <div class="col-lg-5 col-12">
                    <div>
                        <h1 class="fw-bold text-black display-4 mb-4">What to expect from a Edutree course</h1>
                        <a href="https://askbootstrap.com/preview/edutree/about.html"
                            class="text-decoration-none fw-bold fs-5">Short video link&nbsp;<i
                                class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col p-3">
                            <div class="gap-3 d-flex">
                                <div><i class="bi bi-people text-primary h2"></i></div>
                                <div>
                                    <h4 class="fw-bold text-dark">Learn at your own pace</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ipsa alias
                                        distinctio blanditiis,
                                        eveniet impedit? Culpa.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col p-3">
                            <div class="gap-3 d-flex">
                                <div><i class="bi bi-person-check text-primary h2"></i></div>
                                <div>
                                    <h4 class="fw-bold text-dark">Share knowledge and ideas</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ipsa alias
                                        distinctio blanditiis,
                                        eveniet impedit? Culpa.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col p-3">
                            <div class="gap-3 d-flex">
                                <div><i class="bi bi-person-badge text-primary h2"></i></div>
                                <div>
                                    <h4 class="fw-bold text-dark">Meet expert instructors</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ipsa alias
                                        distinctio blanditiis,
                                        eveniet impedit? Culpa.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col p-3">
                            <div class="gap-3 d-flex">
                                <div><i class="bi bi-laptop text-primary h2"></i></div>
                                <div>
                                    <h4 class="fw-bold text-dark">Get front row seats</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ipsa alias
                                        distinctio blanditiis,
                                        eveniet impedit? Culpa.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="bg-light py-5">
        <div class="container py-4">
            <div class="d-flex align-items-center gap-2 mb-4">
                <div>
                    <h3 class="pb-0 fw-bold text-dark mb-1">Courses By Category</h3>
                </div>
                <a href="https://askbootstrap.com/preview/edutree/courses.html"
                    class="text-decoration-none text-primary ms-auto">See More <i class="bi bi-arrow-right-circle"></i></a>
            </div>
            <div class="row gy-3 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-2">
                <div class="col">
                    <div
                        class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative cat-itemm">
                        <img src="img/category/1.jpeg" class="img-fluid">
                        <div class="card-body p-3">
                            <h6 class="card-title m-0">Music</h6>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative cat-itemm">
                        <img src="img/category/2.jpeg" class="img-fluid">
                        <div class="card-body p-3">
                            <h6 class="card-title m-0">Photography</h6>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative cat-itemm">
                        <img src="img/category/3.jpeg" class="img-fluid">
                        <div class="card-body p-3">
                            <h6 class="card-title m-0">Business</h6>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative cat-itemm">
                        <img src="img/category/4.jpeg" class="img-fluid">
                        <div class="card-body p-3">
                            <h6 class="card-title m-0">Personal Development</h6>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative cat-itemm">
                        <img src="img/category/5.jpeg" class="img-fluid">
                        <div class="card-body p-3">
                            <h6 class="card-title m-0">IT and Software</h6>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col">
                    <div
                        class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative cat-itemm">
                        <img src="img/category/6.jpeg" class="img-fluid">
                        <div class="card-body p-3">
                            <h6 class="card-title m-0">Marketing</h6>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative cat-itemm">
                        <img src="img/category/7.jpeg" class="img-fluid">
                        <div class="card-body p-3">
                            <h6 class="card-title m-0">Web & App Design</h6>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative cat-itemm">
                        <img src="img/category/8.jpeg" class="img-fluid">
                        <div class="card-body p-3">
                            <h6 class="card-title m-0">Design & Typography</h6>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="bg-white py-5 feature-list">
        <div class="container py-4">
            <div class="d-flex align-items-end gap-2 mb-4">
                <div>
                    <h3 class="pb-0 fw-bold text-dark mb-1">The Community for Creative People</h3>
                    <p class="text-muted m-0">The largest online community of creatives.</p>
                </div>
                <a href="https://askbootstrap.com/preview/edutree/courses.html"
                    class="text-decoration-none text-primary ms-auto">See More <i
                        class="bi bi-arrow-right-circle"></i></a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5 g-4">

                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <img src="img/communities/communities1.jpg" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1 text-dark">Veronica Cerna</h5>
                            <p class="card-text text-muted small">Lima District, Peru</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">3512 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <img src="img/communities/communities2.jpg" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1 text-dark">Caro Bello</h5>
                            <p class="card-text text-muted small">Denver, Argentina</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">35241 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <img src="img/communities/communities3.jpg" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1 text-dark">Ernex</h5>
                            <p class="card-text text-muted small">Denpasar, Indonesia</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">75 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <img src="img/communities/communities4.jpg" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1 text-dark">Victoe Village</h5>
                            <p class="card-text text-muted small">Mexico City, Mexico</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">10455 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <img src="img/communities/communities5.jpg" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1 text-dark">Hola Bosque</h5>
                            <p class="card-text text-muted small">Buenos Aires, Argentina</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">2241 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <img src="img/communities/communities6.jpg" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1 text-dark">Luaiso Lopez</h5>
                            <p class="card-text text-muted small">Barcelona, Spain</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">35802 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <img src="img/communities/communities7.jpg" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1 text-dark">Ameskeria</h5>
                            <p class="card-text text-muted small">Barcelona, Spain</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">35241 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <img src="img/communities/communities8.jpg" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1 text-dark">Elias Mule</h5>
                            <p class="card-text text-muted small">Adolfo López Mateos, Mexico</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">1175 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <img src="img/communities/communities9.jpg" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1 text-dark">Agustin Arroyo</h5>
                            <p class="card-text text-muted small">Madrid, Spain</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">8742 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                        <img src="img/communities/communities10.jpg" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1 text-dark">Rafa Zabala</h5>
                            <p class="card-text text-muted small">Singapur, Singapore</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">3848 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="bg-white border-top border-bottom cities-footer">
        <div>
            <div class="container">
                <a class="w-100 text-body text-decoration-none py-3 d-block" data-bs-toggle="collapse"
                   href="index.html#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <div class="d-flex flex-wrap justify-content-between align-items-center py-1">
                        <h6 class="m-0 h5 text-dark fw-bold">POPULAR CATEGORIES</h6>
                        <small>SEE ALL CATEGORIES <i class="icofont-rounded-down border p-1 ms-2 rounded-3"></i></small>
                    </div>
                </a>
            </div>
        </div>
        <div class="collapse border-top" id="collapseExample">
            <div class="container py-4">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">llustration
                            courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Craft
                            courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Marketing
                            & Business courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Photography
                            & Video courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Design
                            courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">3D
                            & Animation courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Architecture
                            & Spaces courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Web
                            & App Design courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">llustration
                            courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Craft
                            courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Marketing
                            & Business courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Photography
                            & Video courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Design
                            courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">3D
                            & Animation courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Architecture
                            & Spaces courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Web
                            & App Design courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Writing
                            courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Calligraphy
                            & Typography courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Fashion
                            courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Music
                            & Audio courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Writing
                            courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Calligraphy
                            & Typography courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Fashion
                            courses</a></div>
                    <div class="col-6 col-lg-3 col-md-3"><a class="py-1 text-decoration-none d-block w-100 link-dark"
                                                            href="https://askbootstrap.com/preview/edutree/courses.html">Music
                            & Audio courses</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 footer bg-white">
        <div>
            <div class="container py-3">
                <div class="row">
                    <div class="col-md-12 col-lg-2 col-6 order-1 order-md-0">
                        <a href="index.html"
                           class="brand d-flex align-items-center mb-0 text-decoration-none me-4 fw-bold h5 text-black">
                            <img src="img/logo.png" alt=""
                                 class="img-fluid d-inline-block align-text-center me-2 rounded-pill">
                            Edutree
                        </a>
                        <div class="text-muted my-3 py-1">
                            <small>All rights recerved</small>
                            <span class="small">“Be open to new ideas and approaches. Develop your problem-solving skills.”</span>
                        </div>
                        <div class="d-flex gap-3 h5 m-0">
                            <a href="index.html#" class="link-dark"><i class="bi bi-linkedin"></i></a>
                            <a href="index.html#" class="link-dark"><i class="bi bi-facebook"></i></a>
                            <a href="index.html#" class="link-dark"><i class="bi bi-github"></i></a>
                            <a href="index.html#" class="link-dark"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-6 offset-lg-1 mb-lg-0 mb-3">
                        <h6 class="pb-2">Company</h6>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/about.html">About</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">All Courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/careers.html">Careers</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/student-edit-profile.html">Account</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/testimonials.html">Testimonials</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/contact.html">Contact Us</a>
                    </div>
                    <div class="col-md-6 col-lg-2 col-6">
                        <h6 class="pb-2">Categories</h6>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Illustration courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Craft courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Marketing & Business</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Photography & Video</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Design courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">3D & Animation</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Architecture & Spaces</a>
                    </div>
                    <div class="col-md-12 col-lg-2 col-12 mb-lg-0 mb-3">
                        <h6 class="pb-2">Software</h6>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Adobe Photoshop</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Adobe Illustrator</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Adobe After Effects</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Procreate courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Cinema 4D courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Adobe Lightroom </a>
                        <a class="py-1 text-decoration-none d-block w-100 link-dark"
                           href="https://askbootstrap.com/preview/edutree/courses.html">Adobe InDesign </a>
                    </div>
                    <div class="col-md-12 col-lg-3 col-6 order-1 order-md-0">
                        <h6 class="pb-2">Fancy a cool newsletter?</h6>
                        <small class="text-muted">Be the first to get Edutree's latest news</small>
                        <form>
                            <div class="input-group my-3 shadow-sm border rounded-3 overflow-hidden p-1">
                                <input type="text" class="form-control shadow-none border-0" placeholder="Enter your email">
                                <a href="index.html" class="input-group-text bg-white shadow-none border-0 text-primary btn"
                                   id="basic-addon2">
                                    Sign up
                                </a>
                            </div>
                        </form>
                        <p><i class="bi bi-envelope"></i> Get new clients, grow your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer bg-white border-top">
        <div class="container">
            <div class="row align-items-center justify-content-between py-4">
                <div class="col-auto">
                    <div class="mb-4 mb-md-0">
                        <a href="index.html" class="text-decoration-none link-dark fw-bold"><i class="icofont-home bg-primary text-white p-1 rounded-pill"></i></a>
                        <a href="https://askbootstrap.com/preview/edutree/terms-and-conditions.html" class="text-decoration-none link-dark small mx-3">Terms & Conditions</a>
                        <a href="https://askbootstrap.com/preview/edutree/privacy-policy.html" class="text-decoration-none link-dark small">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex align-items-center gap-1">
                        <a href="index.html#" class="text-decoration-none link-dark pe-2">Download app</a>
                        <a class="me-1" href="index.html#"><img src="img/google.png" class="img-fluid app-icon" alt="#" loading="lazy"></a>
                        <a href="index.html#"><img src="img/apple.png" class="img-fluid app-icon" alt="#" loading="lazy"></a>
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row py-4">
                <div class="col-auto order-1 order-md-0">
                    <span class="small">©2022 <b class="text-primary">Edutree</b>. All rights reserved</span>
                </div>
                <div class="col-auto order-0 order-md-1">
                    <a href="index.html#" class="text-decoration-none text-primary"><i class="bi bi-globe me-1"></i> Language</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
