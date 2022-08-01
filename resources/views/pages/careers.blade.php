@extends('pages.layout.app')
@section('content')
    <section class="pt-5 bg-primary">
        <div class="container py-5 px-5 text-center">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <h1 class="text-white display-5 mb-2 fw-bold">
                        Want to join Team Edutree
                    </h1>
                    <p class="lead text-white-50 m-0">Check out our openings below</p>
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
                                <li class="nav-item active">
                                    <a class="nav-link" href="careers.html"><i class="fe fe-briefcase nav-icon"></i>
                                        Careers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://askbootstrap.com/preview/edutree/testimonials.html"><i
                                            class="fe fe-mail nav-icon"></i> Testimonials</a>
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
            <div class="col-lg-9 job-page">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
                    <div class="col">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i> Job Type: Halftime
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i> Experience: 2 - 3 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3"><i class="icofont-pin me-1"></i> Remote - US (San
                                        Francisco, CA)</small><a href="careers.html#job-form"
                                        class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">Full Stack Developer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i> Job Type: Permanent
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i> Experience: 1 - 7 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3"><i class="icofont-pin me-1"></i> San Francisco, CA
                                        (HQ)</small><a href="careers.html#job-form"
                                        class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">Technical Support Engineer</span>
                                        <span class="badge bg-danger ms-auto small">Closed</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i> Job Type: Permanent
                                        <div class="mx-2"></div>
                                        <i class="icofont-ui-calendar me-1"></i> Deadline: Oct 31,
                                        2022
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3"><i class="icofont-pin me-1"></i> Dallas, TX</small><a
                                        href="careers.html#job-form"
                                        class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">Senior Web Application</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i> Job Type: Permanent
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i> Experience: 5 - 7 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3"><i class="icofont-pin me-1"></i> Remote - US /
                                        Canada</small><a href="careers.html#job-form"
                                        class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i> Job Type: Halftime
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i> Experience: 2 - 3 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3"><i class="icofont-pin me-1"></i> Remote - US (San
                                        Francisco, CA)</small><a href="careers.html#job-form"
                                        class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">Senior Web Application</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i> Job Type: Permanent
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i> Experience: 5 - 7 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3"><i class="icofont-pin me-1"></i> Remote - US /
                                        Canada</small><a href="careers.html#job-form"
                                        class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">Full Stack Developer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i> Job Type: Permanent
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i> Experience: 1 - 7 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3"><i class="icofont-pin me-1"></i> San Francisco, CA
                                        (HQ)</small><a href="careers.html#job-form"
                                        class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">Technical Support Engineer</span>
                                        <span class="badge bg-danger ms-auto small">Closed</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i> Job Type: Permanent
                                        <div class="mx-2"></div>
                                        <i class="icofont-ui-calendar me-1"></i> Deadline: Oct 31,
                                        2022
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3"><i class="icofont-pin me-1"></i> Dallas, TX</small><a
                                        href="careers.html#job-form"
                                        class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="job-form" class="Edutree-card bg-white shadow-sm overflow-hidden rounded-3 mt-4">
                    <div class="Edutree-card-header py-3 px-4 text-black border-bottom">
                        <span class="fs-5 fw-bold">Apply for this job</span>
                        <p class="mb-0 mt-1 text-muted">
                            Please fill out the form below or email your resume
                            <a href="careers.html#"><span class="__cf_email__"
                                    data-cfemail="88ebe9faededfac8cdecfdfcfaededa6ebe7e5">[email&#160;protected]</span></a>
                        </p>
                    </div>
                    <div class="Edutree-card-body p-4">
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label class="form-label small">Name <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" />
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label class="form-label small">Phone <small class="text-danger">*</small></label>
                                <input type="number" class="form-control" placeholder="Enter Your Phone Number" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label class="form-label small">Email <small class="text-danger">*</small></label>
                                <input type="number" class="form-control" placeholder="Enter Your Email" />
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label class="form-label small">Linkedin URL <small class="text-danger">*</small></label>
                                <input type="text" class="form-control" placeholder="Your Linkedin URL" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label class="form-label small">CV Upload <small class="text-danger">*</small></label>
                                <input class="form-control" type="file" id="formFile" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label small">Select Job Role <small
                                        class="text-danger">*</small></label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="Social Media Marketing">
                                        Select Job Role
                                    </option>
                                    <option value="Social Media Marketing">
                                        Social Media Marketing
                                    </option>
                                    <option value="Web Designer">Web Designer</option>
                                    <option value="Php Developer">Php Developer</option>
                                    <option value="Business Development Manager">
                                        Business Development Manager
                                    </option>
                                    <option value="Marketing Executive">
                                        Marketing Executive
                                    </option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-0">
                                <label class="form-label small">Message</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="Edutree-card-footer border-top py-3 px-4 text-end">
                        <a href="careers.html#" class="btn btn-primary">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
