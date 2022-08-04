@extends('pages.layout.app')
@section('content')
    <section class="pt-5 bg-primary">
        <div class="container py-5 px-5 text-center">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <h1 class="text-white display-5 mb-2 fw-bold">
                        See what people say about us
                    </h1>
                    <p class="lead text-white-50 m-0">
                        Read reviews from homeowners and professionals who use
                        yoursite.com
                    </p>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </section>

    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-3">
                <div class="sidebar-fixed">
                    <nav
                        class="navbar sidebar-dash navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav navbar navbar-expand-lg navbar-light">
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
                            <ul class="me-auto flex-column navbar-nav">
                                <li class="navbar-header nav-item">Extra Pages</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://askbootstrap.com/preview/edutree/about.html"><i
                                            class="fe fe-user nav-icon"></i> About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://askbootstrap.com/preview/edutree/careers.html"><i
                                            class="fe fe-briefcase nav-icon"></i> Careers</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="testimonials.html"><i class="fe fe-mail nav-icon"></i>
                                        Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://askbootstrap.com/preview/edutree/contact.html"><i
                                            class="fe fe-phone nav-icon"></i> Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://askbootstrap.com/preview/edutree/terms-and-conditions.html"><i
                                            class="fe fe-file nav-icon"></i> Terms & Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://askbootstrap.com/preview/edutree/privacy-policy.html"><i
                                            class="fe fe-lock nav-icon"></i> Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="rounded-3 shadow-sm overflow-hidden mb-4">
                    <div class="bg-white d-flex p-4 border-bottom">
                        <img src="img/users/user1.jpg" class="img-fluid rounded-circle tm-pic mb-auto shadow-sm" />
                        <div class="ms-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <h6 class="mb-0 text-dark pt-1">
                                        <span class="fs-6 fw-bold">AhujaSanjey, </span>
                                        <span class="text-black-50 small ms-1 mb-0">Algo Trader and Entrepreneur</span>
                                    </h6>
                                    <div class="rating">
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">
                                Have been trading intraday in cash only in the Super pattern
                                since I have completed the Pathshala program 10 days back.
                                @Definedge Excellent day today. 4 profitable trades in Tata
                                Steel, Hindalco, SAIL and Bajaj Finserv. Earlier always had
                                fear when stocks run up a lot.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white d-flex p-4 border-bottom">
                        <img src="img/users/user2.jpg" class="img-fluid rounded-circle tm-pic mb-auto shadow-sm" />
                        <div class="ms-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <h6 class="mb-0 text-dark pt-1">
                                        <span class="fs-6 fw-bold">Laksh Kalyanraman, </span>
                                        <span class="text-black-50 small ms-1 mb-0">Twitter</span>
                                    </h6>
                                    <div class="rating">
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">
                                I have burned money in attending multiple trading courses and
                                most of them resulted in no use. I can vouch anywhere, this is
                                one of the best webinar course I have attended. In fact I have
                                already recovered the course fee in last two days of trading.
                                Big thanks to both @⁨Raju ranjan⁩ @⁨B krishnakumar⁩ for
                                relentless hand holding on the subject, sharing information
                                and patiently responding to each and every request. Definedge
                                rocks.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white d-flex p-4 border-bottom">
                        <img src="img/users/user3.jpg" class="img-fluid rounded-circle tm-pic mb-auto shadow-sm" />
                        <div class="ms-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <h6 class="mb-0 text-dark pt-1">
                                        <span class="fs-6 fw-bold">Mr. Madhavan Sridharan, </span>
                                        <span class="text-black-50 small ms-1 mb-0">VP - ITC, Bangalore</span>
                                    </h6>
                                    <div class="rating">
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">
                                Really wonderful experience. Having listened to prashanth
                                earlier and a brief introduction to point &amp; figures my
                                interest is cleared as the analysis can be “subjective”. Which
                                makes the task reward interesting provided you stick to a
                                trading plan. Excellent skils from prashant over years of
                                trading using the P&amp;F is visible and his focus to ensure
                                participant perform real working examples ensures that you
                                apply your learning. A must learning to anyone who believes
                                that this is a profession.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white d-flex p-4 border-bottom">
                        <img src="img/users/user4.jpg" class="img-fluid rounded-circle tm-pic mb-auto shadow-sm" />
                        <div class="ms-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <h6 class="mb-0 text-dark pt-1">
                                        <span class="fs-6 fw-bold">AhujaSanjey, </span>
                                        <span class="text-black-50 small ms-1 mb-0">Algo Trader and Entrepreneur</span>
                                    </h6>
                                    <div class="rating">
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">
                                Have been trading intraday in cash only in the Super pattern
                                since I have completed the Pathshala program 10 days back.
                                @Definedge Excellent day today. 4 profitable trades in Tata
                                Steel, Hindalco, SAIL and Bajaj Finserv. Earlier always had
                                fear when stocks run up a lot.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white d-flex p-4 border-bottom">
                        <img src="img/users/user5.jpg" class="img-fluid rounded-circle tm-pic mb-auto shadow-sm" />
                        <div class="ms-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <h6 class="mb-0 text-dark pt-1">
                                        <span class="fs-6 fw-bold">Laksh Kalyanraman, </span>
                                        <span class="text-black-50 small ms-1 mb-0">Twitter</span>
                                    </h6>
                                    <div class="rating">
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">
                                I have burned money in attending multiple trading courses and
                                most of them resulted in no use. I can vouch anywhere, this is
                                one of the best webinar course I have attended. In fact I have
                                already recovered the course fee in last two days of trading.
                                Big thanks to both @⁨Raju ranjan⁩ @⁨B krishnakumar⁩ for
                                relentless hand holding on the subject, sharing information
                                and patiently responding to each and every request. Definedge
                                rocks.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white d-flex p-4">
                        <img src="img/users/user6.jpg" class="img-fluid rounded-circle tm-pic mb-auto shadow-sm" />
                        <div class="ms-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <h6 class="mb-0 text-dark pt-1">
                                        <span class="fs-6 fw-bold">Mr. Madhavan Sridharan, </span>
                                        <span class="text-black-50 small ms-1 mb-0">VP - ITC, Bangalore</span>
                                    </h6>
                                    <div class="rating">
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                        <span class="icofont-star text-warning"></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">
                                Really wonderful experience. Having listened to prashanth
                                earlier and a brief introduction to point &amp; figures my
                                interest is cleared as the analysis can be “subjective”. Which
                                makes the task reward interesting provided you stick to a
                                trading plan. Excellent skils from prashant over years of
                                trading using the P&amp;F is visible and his focus to ensure
                                participant perform real working examples ensures that you
                                apply your learning. A must learning to anyone who believes
                                that this is a profession.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="Edutree-card bg-white shadow-sm overflow-hidden rounded-3">
                    <div class="Edutree-card-header py-3 px-4 text-black fs-5 fw-bold border-bottom">
                        Submit Review
                    </div>
                    <div class="Edutree-card-body p-4">
                        <div class="row">
                            <div class="mb-3 col-lg-4">
                                <label class="form-label small">Name <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" />
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label class="form-label small">Phone <small class="text-danger">*</small></label>
                                <input type="number" class="form-control" placeholder="Enter Your Phone Number" />
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label class="form-label small">Email <small class="text-danger">*</small></label>
                                <input type="number" class="form-control" placeholder="Enter Your Email" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label class="form-label small">Upload Pic <small class="text-danger">*</small></label>
                                <input class="form-control" type="file" id="formFile" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label small">Select Star <small class="text-danger">*</small></label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="#">1 Star</option>
                                    <option value="#">2 Star</option>
                                    <option value="#">3 Star</option>
                                    <option value="#">4 Star</option>
                                    <option value="#">5 Star</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-0">
                                <label class="form-label small">Review</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="Edutree-card-footer border-top py-3 px-4 text-end">
                        <a href="testimonials.html#" class="btn btn-primary">SUBMIT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
