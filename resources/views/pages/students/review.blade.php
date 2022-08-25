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
                    <li class="breadcrumb-item" aria-current="page">Review</li>
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
                                <p class="navbar-header nav-item mb-2 p-0 text-dark mt-4">Subject</p>
                                @foreach ($subjects as $subject)
                                    <div class="form-check my-1">
                                        <label class="form-check-label ps-1" for="flexRadioDefault1">
                                            <a href="{{ route('subject', $subject->id) }}"> {{ $subject->name }} </a>
                                        </label>
                                    </div>
                                @endforeach
                                <p class="navbar-header nav-item mb-2 p-0 text-dark mt-4">Topic</p>
                                @foreach ($topics as $topic)
                                    <div class="form-check my-1">
                                        <label class="form-check-label ps-1" for="flexRadioDefault1">
                                            <a href="{{ route('subject', $topic->id) }}"> {{ $topic->name }} </a>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </nav>
                </aside>
            </div>
            <div class="col-lg-9 col-sm-12">

                {{-- <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">
                    @foreach ($courses as $course)
                        <div class="col">
                            <div
                                class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
                                <img src="img/1.jpg" class="img-fluid" alt="#" loading="lazy">
                                <div class="card-body">
                                    <h6 class="card-title pb-3 text-black mb-0">
                                        <span class="bg-warning badge text-black me-2">BEST SELLER</span>
                                        {{ $course->name }}
                                    </h6>
                                    <p class="card-text mb-0">A course by Arantxa &amp; Guille</p>
                                    <div class="card-text text-muted small">Learn to create campaigns on Google and
                                        Facebook
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
                                        <div class="card-price text-danger">78% Disc. <del
                                                class="text-black">${{ $course->promotion_price }}</del>
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
                </div> --}}

                <div class="d-flex align-items-center gap-2 mb-3">
                    <h3 class="pb-0 fw-bold text-dark m-0">Revise</h3>
                    <span class="badge bg-primary">NEW</span>
                    <a href="courses.html#" class="text-decoration-none text-danger ms-auto">See More <i
                            class="bi bi-arrow-right-circle"></i></a>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">
                    @foreach ($revises as $revise)
                        <div class="col">
                            <div
                                class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item position-relative">
                                <img src="img/globel/b1.jpg" class="img-fluid">
                                <div class="card-body">
                                    <h5>{{ $revise->topic->name }}</h5>
                                    <h6 class="card-title fw-bold text-dark">
                                        {{ $revise->title }}
                                    </h6>
                                    <p class="card-text text-muted small">
                                        {{ $revise->content }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $revises->links('pagination::bootstrap-4') }}
                <div class="text-center pt-2 pb-2">
                    <button type="button" class="btn btn-danger">See more Edutree course <i
                            class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
@endsection
