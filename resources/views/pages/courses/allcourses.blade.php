@extends('pages.students.layout.app')
@section('content')
    <div class="py-3">
        <div class="container">
            <nav>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="home">
                            <i class="bi bi-house"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Courses</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <aside class="sidebar-fixed">
                    <nav
                        class="navbar sidebar-courses navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold fs-5 float-start py-1"
                            href="https://askbootstrap.com/preview/edutree/dashboard.html">Menu</a>
                        <button data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation"
                            class="p-0 focus-none border-0 navbar-toggler collapsed">
                            <span
                                class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary p-0 text-white float-end">
                                <span class="fe fe-menu"></span>
                            </span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarNav">
                            <div class="side-nav me-auto flex-column navbar-nav">
                                <p class="navbar-header nav-item mb-2 p-0 text-danger"><i class="bi bi-gift"></i> OFFERS
                                </p>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="gi">
                                    <label class="form-check-label ps-1" for="gi">
                                        Gift ideas
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="gc">
                                    <label class="form-check-label ps-1" for="gc">
                                        Gift cards
                                    </label>
                                </div>
                                <p class="navbar-header nav-item mb-2 p-0 text-dark mt-4">Courses</p>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label ps-1" for="flexRadioDefault1">
                                        Course Bundles
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label ps-1" for="flexRadioDefault2">
                                        Edutree Basics <small><span class="badge bg-primary">NEW</span></small>
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label ps-1" for="flexRadioDefault3">
                                        New courses
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault4">
                                    <label class="form-check-label ps-1" for="flexRadioDefault4">
                                        Top rated
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault5">
                                    <label class="form-check-label ps-1" for="flexRadioDefault5">
                                        Popular courses
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault6">
                                    <label class="form-check-label ps-1" for="flexRadioDefault6">
                                        Open courses <small><span class="badge bg-danger">PRO</span></small>
                                    </label>
                                </div>
                                <p class="navbar-header nav-item mb-2 p-0 text-dark  mt-4">CATEGORIES</p>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="Illustration">
                                    <label class="form-check-label ps-1" for="Illustration">
                                        Illustration
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="Craft" checked>
                                    <label class="form-check-label ps-1" for="Craft">
                                        Craft
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="Marketing">
                                    <label class="form-check-label ps-1" for="Marketing">
                                        Marketing & Business
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="Photography">
                                    <label class="form-check-label ps-1" for="Photography">
                                        Photography & Video
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="Design">
                                    <label class="form-check-label ps-1" for="Design">
                                        Design
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="Animation">
                                    <label class="form-check-label ps-1" for="Animation">
                                        3D & Animation
                                    </label>
                                </div>
                                <p class="navbar-header nav-item mb-2 p-0 text-dark mt-4">SOFTWARE</p>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="Wordpress">
                                    <label class="form-check-label ps-1" for="Wordpress">
                                        Wordpress
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="Adobe">
                                    <label class="form-check-label ps-1" for="Adobe">
                                        Adobe Photoshop
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="SketchUp">
                                    <label class="form-check-label ps-1" for="SketchUp">
                                        SketchUp
                                    </label>
                                </div>
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" value="" id="illustration">
                                    <label class="form-check-label ps-1" for="illustration">
                                        Adobe illustration
                                    </label>
                                </div>
                            </div>
                        </div>
                    </nav>
                </aside>
            </div>
            <div class="col-lg-9 col-sm-12">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <h3 class="pb-0 fw-bold text-dark m-0">Featured</h3>
                    <a href="courses.html#" class="text-decoration-none text-danger ms-auto">See More <i
                            class="bi bi-arrow-right-circle"></i></a>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">
                    @foreach ($courses as $course)
                    <div class="col">
                        <div
                            class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
                            <img src="img/1.jpg" class="img-fluid" alt="#" loading="lazy">
                            <div class="card-body">
                                <h6 class="card-title pb-3 text-black mb-0">
                                    <span class="bg-warning badge text-black me-2">BEST SELLER</span>
                                    {{ ($course->name) }}
                                </h6>
                                <p class="card-text mb-0">A course by Arantxa &amp; Guille</p>
                                <div class="card-text text-muted small">Learn to create campaigns on Google and Facebook
                                    to boost
                                    your brand or business
                                </div>
                                <div class="text-muted gap-2 pt-2 small d-flex">
                                    <span><i class="bi bi-person"></i> 23643</span>
                                    <span><i class="bi bi-hand-thumbs-up"></i> 80% (2.2k)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-white border-top p-3">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span class="badge bg-danger text-white">SALE</span>
                                    <div class="card-price text-danger">78% Disc. <del class="text-black">${{ $course->promotion_price }}</del>
                                    </div>
                                </div>
                                <div class="d-grid"><button class="btn btn-primary">
                                        <i class="bi bi-cart-fill"></i> ${{ $course->price }}
                                    </button>
                                </div>
                                <a href="https://askbootstrap.com/preview/edutree/courses-detail.html"
                                    class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="d-flex align-items-center gap-2 mb-3">
                    <h3 class="pb-0 fw-bold text-dark m-0">Course Bundle</h3>
                    <span class="badge bg-primary">NEW</span>
                    <a href="courses.html#" class="text-decoration-none text-danger ms-auto">See More <i
                            class="bi bi-arrow-right-circle"></i></a>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">
                    <div class="col">
                        <div
                            class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
                            <img src="img/globel/b1.jpg" class="img-fluid">
                            <div class="card-body">
                                <h6 class="card-title fw-bold text-dark">
                                    Bring Your Creations to Life
                                </h6>
                                <p class="card-text text-muted small">Experience the feeling of watching your creations
                                    come to life through animation. Choose any 3 courses from this selection and add
                                    some movement to your work. Thi</p>
                            </div>
                            <div class="card-footer border-0 bg-white border-top p-3">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span class="badge bg-info text-white">HOT</span>
                                    <div class="card-price text-danger">78% Disc. <span class="text-black">$1,800</span>
                                    </div>
                                </div>
                                <div class="d-grid"><button class="btn btn-primary">
                                        Create your own bundle <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div
                            class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
                            <img src="img/globel/b2.jpg" class="img-fluid">
                            <div class="card-body">
                                <h6 class="card-title fw-bold text-dark">
                                    Bring Your Creations to Life
                                </h6>
                                <p class="card-text text-muted small">Celebrate the 11th anniversary of THE social
                                    network by choosing two courses from this special selection. Become a pro</p>
                            </div>
                            <div class="card-footer border-0 bg-white border-top p-3">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span class="badge bg-warning text-white">NEW</span>
                                    <div class="card-price text-danger">15% Disc. <span class="text-black">$790</span>
                                    </div>
                                </div>
                                <div class="d-grid"><button class="btn btn-primary">
                                        Create your own bundle <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div
                            class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
                            <img src="img/globel/b3.jpg" class="img-fluid">
                            <div class="card-body">
                                <h6 class="card-title fw-bold text-dark">
                                    The Best Illustration Courses
                                </h6>
                                <p class="card-text text-muted small">Bring your illustrations to life with paint,
                                    pencils, ink, digital media, and much more. Choose 3 courses from this special
                                    selection</p>
                            </div>
                            <div class="card-footer border-0 bg-white border-top p-3">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span class="badge bg-danger text-white">Advertising</span>
                                    <div class="card-price text-danger">25% Disc. <span class="text-black">$890</span>
                                    </div>
                                </div>
                                <div class="d-grid"><button class="btn btn-primary">
                                        Create your own bundle <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-2 pb-2">
                    <button type="button" class="btn btn-danger">See more Edutree course <i
                            class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>

@endsection
