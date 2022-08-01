@extends('pages.layout.app')
@section('content')
    <header class="py-5 bg-primary">
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center my-5">
                        <h1 class="display-4 text-white mb-3">What is <span class="fw-bold">Edutree?</span></h1>
                        <p class="lead fw-normal text-white-50 mb-4">It is a long established fact that a reader will be
                            distracted by the readable content of a page when looking at its layout. The point of using
                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                            using.</p>
                        <a class="btn btn-success text-uppercase" href="about.html#scroll-target">Read Our Story</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="bg-light">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">
                <div class="col mb-2">
                    <div class="text-center bg-white rounded-3 shadow-sm p-4">
                        <h1 class="fw-bold text-primary display-2 m-0">10K</h1>
                        <h5>Online Courses</h5>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="text-center bg-white rounded-3 shadow-sm p-4">
                        <h1 class="fw-bold text-primary display-2 m-0">200+</h1>
                        <h5>Expert Tutors</h5>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="text-center bg-white rounded-3 shadow-sm p-4">
                        <h1 class="fw-bold text-primary display-2 m-0">60K+</h1>
                        <h5>Online Students</h5>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="text-center bg-white rounded-3 shadow-sm p-4">
                        <h1 class="fw-bold text-primary display-2 m-0">6K+</h1>
                        <h5>Certified Courses</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white" id="scroll-target">
        <div class="container my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded-3 mb-5 mb-lg-0" src="img/globel/vision.jpg"
                        alt="..." /></div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="ps-lg-5">
                        <h2 class="fw-bold mb-3 text-dark">Our Vision</h2>
                        <p class="lead fw-normal text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not simply
                            random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                            over 2000 years old. Richard McClintock.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded-3 mb-5 mb-lg-0"
                        src="img/globel/mission.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="pe-lg-5">
                        <h2 class="fw-bold mb-3 text-dark">Our Mission</h2>
                        <p class="lead fw-normal text-muted mb-0">There are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered alteration in some form, by injected humour, or
                            randomised words which don't look even slightly believable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container mt-5">
            <div class="text-center">
                <h2 class="fw-bold text-dark">Meet the Team</h2>
                <p class="lead fw-normal text-muted mb-5">Dedicated to quality and your success</p>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" width="200" height="200"
                            src="img/team/team1.jpg" alt="..." />
                        <h5 class="fw-bold text-body">Ibbie Eckart</h5>
                        <div class="text-muted">Founder &amp; CEO</div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" width="200" height="200"
                            src="img/team/team2.jpg" alt="..." />
                        <h5 class="fw-bold text-body">Arden Vasek</h5>
                        <div class="text-muted">CFO</div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-sm-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" width="200" height="200"
                            src="img/team/team3.jpg" alt="..." />
                        <h5 class="fw-bold text-body">Toribio Nerthus</h5>
                        <div class="text-muted">Operations Manager</div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" width="200" height="200"
                            src="img/team/team4.jpg" alt="..." />
                        <h5 class="fw-bold text-body">Malvina Cilla</h5>
                        <div class="text-muted">CTO</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
