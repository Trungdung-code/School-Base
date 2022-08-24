@extends('pages.students.layout.app')
@section('content')
    <div class="banner-search bg-primary py-5">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="col-12 col-lg-6 text-end">
                    <img src="img/hero-img.png" class="img-fluid" alt="#" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="fw-bold text-white display-4 mb-3">Edutree is a community <br>for creative people.</h1>
                    <p class="lead text-white-50 mb-0">Learn from expert professionals and<br> join
                        the largest online community for creatives.
                    </p>
                    <form action="https://askbootstrap.com/preview/edutree/courses.html" class="pt-2 mb-5">
                        <div class="d-flex mt-4 bg-white rounded-3 align-items-center services-search-form overflow-hidden">
                            <div class="form-floating services-search-form-service">
                                <input type="text" class="form-control border-0" id="sservice"
                                    placeholder="Enter Service...">
                                <label for="sservice">What <span class="text-body">courses</span> do you need?</label>
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
                @foreach($courses as $course)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
                        <img src="img/1.jpg" class="img-fluid" alt="#" loading="lazy">
                        <div class="card-body">
                            <h6 class="card-title pb-3 text-black mb-0">
                                <span class="bg-wa rning badge text-black me-2">{{ __('BEST SELLER') }}</span>
                                {{ $course->name }}
                            </h6>
                            <p class="card-text mb-0">A course by Arantxa & Guille</p>
                            <div class="card-text text-muted small">Learn to create campaigns on Google and Facebook to
                                boost
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
                                <div class="card-price text-danger">78% Disc.
                                    <del class="text-black">${{ $course->promotion_price }}</del>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary">
                                    <i class="bi bi-cart-fill"></i> ${{ $course->price }}
                                </button>
                            </div>
                        </div>
                        <a href="https://askbootstrap.com/preview/edutree/courses-detail.html" class="stretched-link"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt-3 pb-4">
            <a href="https://askbootstrap.com/preview/edutree/courses.html" class="btn btn-danger">See more Edutree course
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
                    class="text-decoration-none text-primary ms-auto">See More <i
                        class="bi bi-arrow-right-circle"></i></a>
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
@endsection
