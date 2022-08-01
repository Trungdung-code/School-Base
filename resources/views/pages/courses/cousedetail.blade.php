@extends('pages.layout.app')
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
                    <li class="breadcrumb-item active" aria-current="page">Professional Photography for Instagram</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div>
                        <h1 class="text-black fw-bold">Professional Photography for Instagram</h1>
                        <p class="fs-4">A course by<strong> Abhay Rai</strong> Product photographer</p>
                    </div>
                    <small class="bg-light pt-3 gap-2 d-block d-md-flex">
                        <div><span class="badge bg-warning pills text-black">BEST SELLER</span></div>
                        <div class="gap-1">
                            <i class="bi bi-megaphone-fill text-danger"></i>
                            <span class="text-danger">ENGLISH, SPANISH</span>
                        </div>
                        <div class="gap-1"><i class="bi bi-hand-thumbs-up"></i>
                            99% positive reviews (9K)
                        </div>
                        <div class="gap-1"><i class="bi bi-person"></i> 198016 students</div>
                    </small>
                    <div class="pt-5">
                        <ul class="nav courses-links mb-4 sidebar-fixed bg-white rounded-3 px-3 shadow-sm" id="pills-tab"
                            role="tablist">
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link px-0 active py-3" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Information</button>
                            </li>
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link px-0 py-3" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Content</button>
                            </li>
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link text-muted px-0 py-3" id="pills-Community-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Community" type="button" role="tab"
                                    aria-controls="pills-Community" aria-selected="false"><i class="bi bi-shield-lock"></i>
                                    Community</button>
                            </li>
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link px-0 py-3" id="pills-Projects-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Projects" type="button" role="tab"
                                    aria-controls="pills-Projects" aria-selected="false">Projects</button>
                            </li>
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link text-muted px-0 py-3" id="pills-Students-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Students" type="button" role="tab"
                                    aria-controls="pills-Students" aria-selected="false"><i class="bi bi-shield-lock"></i>
                                    Students</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="gap-2">
                                            <div class="col mb-5">
                                                <div class="card border-0 shadow-sm overflow-hidden rounded-3">
                                                    <iframe height="415" src="https://www.youtube.com/embed/auLQsVu8QW4"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                    <div class="card-body p-3">
                                                        <div class="float-end gap-3 d-flex">
                                                            <div class="gap-2">
                                                                <a class="text-muted" href="courses-detail.html#">
                                                                    <i class="bi bi-share me-1"></i>
                                                                    <span>Share</span>
                                                                </a>
                                                            </div>
                                                            <div class="gap-2">
                                                                <a class="text-muted" href="courses-detail.html#">
                                                                    <i class="bi bi-plus-lg me-1"></i>
                                                                    <span>Add to a list</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <h5 class="mb-4 text-dark">Learn tricks to take and edit photographs for
                                                    social media on your phone</h5>
                                                <p>Instagram has become the virtual showcase where everyone wants to
                                                    stand out. Mina
                                                    Barrio - product photographer at Melon Blanc, responsible for
                                                    creating visual content for all kinds
                                                    of brands - will teach you all the tips on how to best present your
                                                    Instagram projects using only
                                                    your smartphone.
                                                </p>
                                                <p>What Mina will teach you in this course goes far beyond taking a
                                                    beautiful photo: you will learn to
                                                    communicate your values, creating your own personal style for your
                                                    project along the way. A good
                                                    photo op could come up at any time, so always have your phone on you
                                                    in order to capture the moment
                                                    instantly. To do this, you will learn both the creative aspect of
                                                    photography as well as the
                                                    technique, exclusively using the tools that you can find on your
                                                    smartphone. Edit your images like a
                                                    pro <i>instagrammer.</i>
                                                </p>
                                            </div>
                                            <img src="/img/globel/cd1.jpg" class="img-fluid rounded-3">
                                            <h4 class="pt-5 mb-4 text-dark">Featured review</h4>
                                            <div class="text-center bg-white shadow-sm rounded-3 mb-5 p-4">
                                                <div class="d-flex align-items-center justify-content-center gap-1">
                                                    <a href="courses-detail.html#">
                                                        <img src="/img/globel/emoji.jpg"
                                                            class="img-fluid rounded-circle w-40"></a>
                                                    <span class="bg-primary fs-5 p-2 rounded-circle w-40">
                                                        <i class="bi bi-hand-thumbs-up text-white"></i>
                                                    </span>
                                                </div>
                                                <div class="mt-3 mb-2 gap-3">
                                                    <a href="courses-detail.html"
                                                        class="text-decoration-none link-dark fw-bold">Askbootstrap </a>
                                                    <span class="text-muted small">about a year ago</span>
                                                </div>
                                                <p class="fs-6">I really enjoyed this course! Mina explained things in a
                                                    clear and easy to understand
                                                    way. I really liked learning about new apps and I found the
                                                    additional resources interesting.
                                                </p>
                                                <a href="courses-detail.html" class="text-muted">More review</a>
                                            </div>
                                            <h4 class="pt-2 mb-4 text-dark">About this course</h4>
                                            <div class="row bg-white mb-4 shadow-sm rounded-3 m-0 p-4">
                                                <small class="small text-muted pb-3 ps-0">COURSE TABLE OF
                                                    CONTENTS</small>
                                                <div class="col-6 p-0">
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="w-40 bg-light rounded-circle p-2 border me-3">
                                                            C1
                                                        </div>
                                                        <span class="small text-dark">Introduction</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="w-40 bg-light rounded-circle p-2 border me-3">
                                                            C2
                                                        </div>
                                                        <span class="small text-dark">Before the photo</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="w-40 bg-light rounded-circle p-2 border me-3">
                                                            C3
                                                        </div>
                                                        <span class="small text-dark">The shot</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="w-40 bg-light rounded-circle p-2 border me-3">
                                                            C4
                                                        </div>
                                                        <span class="small text-dark">Editing a photo</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="w-40 bg-light rounded-circle p-2 border me-3">
                                                            C5
                                                        </div>
                                                        <span class="small text-dark">Instagram Stories</span>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="d-flex align-items-center my-2">
                                                        <div class="w-40 bg-light rounded-circle p-2 border me-3">
                                                            C6
                                                        </div>
                                                        <span class="small text-dark">Final Project</span>
                                                    </div>
                                                </div>
                                                <a href="courses-detail.html#cd" class="text-muted ps-0 mt-3">View
                                                    details <i class="bi bi-arrow-down-short"></i></a>
                                            </div>
                                            <div>
                                                <p class="pt-4 pb-3">You will start by checking out the Instagram
                                                    accounts that inspire Abhay Rai in
                                                    order to help you to stay up to speed with the visual trends on
                                                    social networks.
                                                </p>
                                                <p class="pb-3">Next you will see what kind of materials you can use for
                                                    your photographs, and learn
                                                    the basic principles of composition as well as how to define your
                                                    own style for your project.
                                                </p>
                                                <p class="pb-3">With that style in mind, you will take different types
                                                    of photos: realistic
                                                    environments, the famous <i>flat lay</i> colorful backgrounds or
                                                    simply the places you visit. In
                                                    addition, Mina will give you some ideas to take original photographs
                                                    that will open the doors to a
                                                    world of visual creativity.
                                                </p>
                                                <p class="pb-3">Once you have taken your photographs, you will edit
                                                    them. Mina will tell you about the
                                                    tools she usually uses to touch up her images with her mobile
                                                    device. Once they are ready, you will
                                                    learn to organize your social networks, planning when you will post
                                                    each photograph and programming
                                                    the posts.
                                                </p>
                                                <p class="pb-3">Finally, Mina will explain how to get the most out of
                                                    Instagram Stories, the tool that
                                                    allows you to share short and episodic videos on Instagram.
                                                </p>
                                                <img src="/img/globel/cd2.jpg" class="img-fluid mb-5 rounded-3">
                                                <h4 class="py-2 text-dark m-0">What is this course's project?</h4>
                                                <p>You will photograph and edit your own images following the style you
                                                    have defined for your project.
                                                </p>
                                            </div>

                                            <div class="py-4">
                                                <small class="small text-muted pb-3 d-block">PROJECTS BY COURSE
                                                    STUDENTS</small>
                                                <div class="row mb-5">
                                                    <div class="col">
                                                        <picture>
                                                            <a href="courses-detail.html"><img src="/img/projects/p8.jpg"
                                                                    class="img-fluid rounded-3"></a>
                                                        </picture>
                                                    </div>
                                                    <div class="col">
                                                        <picture>
                                                            <a href="courses-detail.html"><img src="/img/projects/p9.jpg"
                                                                    class="img-fluid rounded-3"></a>
                                                        </picture>
                                                    </div>
                                                    <div class="col">
                                                        <picture>
                                                            <a href="courses-detail.html"><img src="/img/projects/p10.jpg"
                                                                    class="img-fluid rounded-3"></a>
                                                        </picture>
                                                    </div>
                                                    <div class="col">
                                                        <picture>
                                                            <a href="courses-detail.html"><img src="/img/projects/p11.jpg"
                                                                    class="img-fluid rounded-3"></a>
                                                        </picture>
                                                    </div>
                                                </div>
                                                <h4 class="text-dark">Who is it for?</h4>
                                                <p>Designers, illustrators, small business owners or anyone who wants to
                                                    learn to display
                                                    their project on Instagram, capturing and editing their photographs
                                                    using just their smartphone.
                                                </p>
                                                <h4 class="text-dark mt-4">What you need</h4>
                                                <p>No prior knowledge of any kind is necessary. But you will need a cell
                                                    phone that you
                                                    can install the Instagram app on, with camera and internet access.
                                                </p>
                                                <img src="/img/globel/cd3.jpg" class="img-fluid mb-4 rounded-3 mt-1">
                                            </div>

                                            <div>
                                                <h3 class="text-dark pb-2">Reviews</h3>
                                                <div class="bg-white d-flex gap-4 rounded-3 shadow-sm p-4">
                                                    <div class=" align-items-center">
                                                        <i class="bi bi-person"></i>
                                                        <span class="ps-2">198016</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="bi bi-chat"></i>
                                                        <span class="ps-2">8984</span>
                                                    </div>
                                                    <div class="d-flex text-primary align-items-center">
                                                        <i class="bi bi-hand-thumbs-up"></i>
                                                        <span class="ps-2">99%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="my-5">
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center mb-3 gap-3">
                                                        <div>
                                                            <img src="/img/users/user4.jpg"
                                                                class="img-fluid rounded-circle w-40">
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-0 d-flex align-items-center gap-2 text-dark">
                                                                Black Smait <small><span
                                                                        class="badge bg-danger">Pro</span></small></h5>
                                                            <small class="text-muted">about 9 hours ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-3">
                                                        <div>
                                                            <i
                                                                class="bi bi-hand-thumbs-up w-40 bg-white text-primary rounded-circle p-2 fs-5 shadow-sm"></i>
                                                        </div>
                                                        <div>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text
                                                                ever since the 1500s, when an unknown printer took a
                                                                galley of type and scrambled it to make a type specimen
                                                                book. It has survived not only five centuries
                                                            </p>
                                                            <a href="courses-detail.html" class="text-muted">View
                                                                translation</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mb-4 mt-0">
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center mb-3 gap-3">
                                                        <div>
                                                            <img src="/img/users/user5.jpg"
                                                                class="img-fluid rounded-circle w-40">
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-0 d-flex align-items-center gap-2 text-dark">
                                                                Iamosahan</h5>
                                                            <small class="text-muted">about 12 hours ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-3">
                                                        <div>
                                                            <i
                                                                class="bi bi-hand-thumbs-up w-40 bg-white text-primary rounded-circle p-2 fs-5 shadow-sm"></i>
                                                        </div>
                                                        <div>
                                                            <p>It is a long established fact that a reader will be
                                                                distracted by the readable content of a page when
                                                                looking at its layout. The point of using Lorem Ipsum is
                                                                that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content
                                                                here', making it look like readable English. Many
                                                                desktop publishing packages and web page editors now
                                                                use.
                                                            </p>
                                                            <a href="courses-detail.html" class="text-muted">View
                                                                translation</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mb-4 mt-0">
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center mb-3 gap-3">
                                                        <div>
                                                            <img src="/img/users/user12.jpg"
                                                                class="img-fluid rounded-circle w-40">
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-0 d-flex align-items-center gap-2 text-dark">
                                                                Gursewak<small><span
                                                                        class="badge bg-danger">Pro</span></small></h5>
                                                            <small class="text-muted">about 15 hours ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-3">
                                                        <div>
                                                            <i
                                                                class="bi bi-hand-thumbs-up w-40 bg-white text-primary rounded-circle p-2 fs-5 shadow-sm"></i>
                                                        </div>
                                                        <div>
                                                            <p>CurThere are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration in
                                                                some form, by injected humour, or randomised words which
                                                                don't look even slightly believable. If you are going to
                                                                usem.</p>
                                                            <a href="courses-detail.html" class="text-muted">View
                                                                translation</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <a href="courses-detail.html" class="text-muted py-4">More review</a>
                                                <hr>
                                            </div>

                                            <h3 id="cd" class="pt-4 mb-4 text-dark">Contents</h3>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="w-40 bg-white rounded-circle p-2 shadow-sm me-3">
                                                            C1
                                                        </div>
                                                        <span class="small text-dark">Introduction</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span>Presentation</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Great Instagrammers</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="w-40 bg-white rounded-circle p-2 shadow-sm me-3">
                                                            C2
                                                        </div>
                                                        <span class="small text-dark">Before the photo</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">materials</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Achieve the best quality</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Composition</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="w-40 bg-white rounded-circle p-2 shadow-sm me-3">
                                                            C3
                                                        </div>
                                                        <span class="small text-dark">The shot</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">The brand</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Create an environment</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Compose a Flatlay</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Interior photography</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Creative ideas</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="w-40 bg-white rounded-circle p-2 shadow-sm me-3">
                                                            C4
                                                        </div>
                                                        <span class="small text-dark">Editing a photo</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Editing photos with Snapseed</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Editing photos with VSCO</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Editing photos with Instagram</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">How to get on Instagram and schedule your
                                                            posts</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="w-40 bg-white rounded-circle p-2 shadow-sm me-3">
                                                            C5
                                                        </div>
                                                        <span class="small text-dark">Instagram Stories</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Make the photos</span>
                                                    </div>
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Use the Instagram Stories tools</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row mb-5">
                                                <div class="col-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="w-40 bg-white rounded-circle p-2 shadow-sm me-3">
                                                            C6
                                                        </div>
                                                        <span class="small text-dark">Final Project</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="my-2">
                                                        <i class="bi bi-camera-video"></i>
                                                        <span class="small">Professional photography for
                                                            Instagram</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                            <div class="m-0">
                                                <h5 class="pt-5 mb-4 text-black">Frequently Asked Questions</h5>
                                                <div class="accordion accordion-flush bg-white rounded-3 shadow-sm overflow-hidden"
                                                    id="accordionFlushExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingOne">
                                                            <button class="accordion-button collapsed fs-14"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                                aria-controls="flush-collapseOne">
                                                                What are Edutree's online courses?
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseOne"
                                                            class="accordion-collapse collapse text-muted"
                                                            aria-labelledby="flush-headingOne"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">Edutree's courses are online
                                                                classes that provide you with the
                                                                tools and skills you need for completing a specific
                                                                final project. Every step of the project
                                                                combines video lessons with complementary instructional
                                                                material, so you can learn by doing.
                                                                Edutree's courses also allow you to share your own
                                                                projects with the instructor and other
                                                                users, thus creating a dynamic course community.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingTwo">
                                                            <button class="accordion-button collapsed fs-14"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                                aria-controls="flush-collapseTwo">
                                                                When do the courses start and when do they finish?
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseTwo"
                                                            class="accordion-collapse collapse text-muted"
                                                            aria-labelledby="flush-headingTwo"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">The course is 100% online, so
                                                                once they are published, courses start
                                                                and finish whenever you want. You set the pace of the
                                                                class. You can go back to review what
                                                                interests you most and skip what you already know, ask
                                                                questions, answer questions, share your
                                                                projects, and more.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingThree">
                                                            <button class="accordion-button collapsed fs-14"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapseThree"
                                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                                What do Edutree's courses include?
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseThree"
                                                            class="accordion-collapse collapse text-muted"
                                                            aria-labelledby="flush-headingThree"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">The courses are divided into
                                                                different units, each one includes
                                                                lessons, informational texts, tasks and practice
                                                                exercises to carry out your project step by
                                                                step, with additional complementary resources and
                                                                downloads. You will also have access to an
                                                                exclusive forum where you can interact with the
                                                                instructor and other students, and share your
                                                                work and your course project, thus creating a community
                                                                around the course itself.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingThree">
                                                            <button class="accordion-button collapsed fs-14"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapsefour" aria-expanded="false"
                                                                aria-controls="flush-collapsefour">
                                                                Have you been given a course?
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapsefour"
                                                            class="accordion-collapse collapse text-muted"
                                                            aria-labelledby="flush-headingfour"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">You can now redeem the course
                                                                you received, just access redeeming
                                                                page to enter your gift code and redeem it.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingThree">
                                                            <button class="accordion-button collapsed fs-14"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapsefive" aria-expanded="false"
                                                                aria-controls="flush-collapsefive">
                                                                When do I get the course certificate? <small><span
                                                                        class="badge bg-primary ms-2">New</span></small>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapsefive"
                                                            class="accordion-collapse collapse text-muted"
                                                            aria-labelledby="flush-headingive"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">You'll get your personal
                                                                certificate as soon as you complete the
                                                                course. You can see all your certificates under the
                                                                Certificates section in your profile. You
                                                                can download your certificates in PDF and share the link
                                                                online. Learn more about certificates
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <section>
                                            <h4 class="pb-2 text-dark">Course overview</h4>
                                            <div class="bg-white rounded-3 shadow-sm overflow-hidden px-4 py-2 mb-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="d-flex align-items-center my-3">
                                                            <div class="w-40 bg-light rounded-circle p-2 border me-3">
                                                                <i class="bi bi-film"></i>
                                                            </div>
                                                            <span class="small text-dark">16 lessons <span
                                                                    class="small text-muted">(1h 57m)</span></span>
                                                        </div>
                                                        <div class="d-flex align-items-center my-3">
                                                            <div class="w-40 bg-light rounded-circle p-2 border me-3">
                                                                <i class="bi bi-alt"></i>
                                                            </div>
                                                            <span class="small text-dark">9 exercises</span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="d-flex align-items-center my-3">
                                                            <div class="w-40 bg-light rounded-circle p-2 border me-3">
                                                                <i class="bi bi-file-earmark-arrow-down"></i>
                                                            </div>
                                                            <span class="small text-dark">11 Download <span
                                                                    class="small text-muted">(6 files)</span></span>
                                                        </div>
                                                        <div class="d-flex align-items-center my-3">
                                                            <div class="w-40 bg-light rounded-circle p-2 border me-3">
                                                                <i class="bi bi-clipboard"></i>
                                                            </div>
                                                            <span class="small text-dark">Course Final Project</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <h5 class="text-dark">C1: Introduction</h5>
                                                <hr>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Presentation</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Great Instagrammers</p>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <h5 class="text-dark">C2: Before the photo</h5>
                                                <hr>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>materials</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Achieve the best quality</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Composition</p>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <h5 class="text-dark">C3: The shot</h5>
                                                <hr>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>The brand</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Create an environment</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Compose a Flatlay</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Interior photography</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Creative ideas</p>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <h5 class="text-dark">C4: Editing a photo</h5>
                                                <hr>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Editing photos with Snapseed</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Editing photos with VSCO</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Editing photos with Instagram</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>How to get on Instagram and schedule your posts</p>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <h5 class="text-dark">C5: Instagram Stories</h5>
                                                <hr>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Make the photos</p>
                                                </div>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Use the Instagram Stories tools</p>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <h5 class="text-dark">Final Project</h5>
                                                <hr>
                                                <div class="d-flex">
                                                    <i class="bi bi-shield-lock text-muted me-2"></i>
                                                    <p>Professional photography for Instagram</p>
                                                </div>
                                            </div>
                                            <div class="my-5">
                                                <h5 class="pb-3 text-dark">Latest projects</h5>
                                                <div class="row gy-3 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-2">
                                                    <div class="col">
                                                        <div
                                                            class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                            <img src="/img/category/category1.jpg" class="img-fluid">
                                                            <div class="card-body m-0 p-3">
                                                                <p class="card-text mb-0 text-dark">Mon projet du cours
                                                                    :</p>
                                                                <small class="text-muted">Iamosahan</small>
                                                            </div>
                                                            <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                                class="stretched-link"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div
                                                            class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                            <img src="/img/category/category2.jpg" class="img-fluid">
                                                            <div class="card-body m-0 p-3">
                                                                <p class="card-text mb-0 text-dark">Meu projeto do
                                                                    curso:</p>
                                                                <small class="text-muted">Sirlanefreitas.ac</small>
                                                            </div>
                                                            <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                                class="stretched-link"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div
                                                            class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                            <img src="/img/category/category3.jpg" class="img-fluid">
                                                            <div class="card-body m-0 p-3">
                                                                <p class="card-text mb-0 text-dark">Mon projet du cours
                                                                    :</p>
                                                                <small class="text-muted">Arsenaultnicole</small>
                                                            </div>
                                                            <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                                class="stretched-link"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div
                                                            class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                            <img src="/img/category/category4.jpg" class="img-fluid">
                                                            <div class="card-body m-0 p-3">
                                                                <p class="card-text mb-0 text-dark">Mi Proyecto del
                                                                    curso:</p>
                                                                <small class="text-muted">Karytrindade</small>
                                                            </div>
                                                            <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                                class="stretched-link"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="mt-4">
                                                <p class="py-2">Abhay Rai is a product photographer for Melon Blanc, a
                                                    multidisciplinary studio that is responsible for developing all
                                                    visual aspects of a brand.</p>
                                                <p class="pb-0 mb-0">Mina's mission is to create visual content for all
                                                    types of successful brands, such as Charuca, Lucia Be, The Singular
                                                    Olivia or La Compañía Fantástica, and many others. Taking and
                                                    editing photographs for Instagram means taking care of every detail,
                                                    even those that seem imperfect.</p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-Projects" role="tabpanel"
                                aria-labelledby="pills-Projects-tab">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 g-4">
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category1.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mon projet du cours</p>
                                                        <small class="text-muted">Iamosahan</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category2.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Meu projeto do curso:</p>
                                                        <small class="text-muted">Sirlanefreitas.ac</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category3.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mon projet du cours :</p>
                                                        <small class="text-muted">Arsenaultnicole</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category4.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mi Proyecto del curso:</p>
                                                        <small class="text-muted">Karytrindade</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category5.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mon projet du cours :</p>
                                                        <small class="text-muted">Osahan</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category6.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Meu projeto do curso:</p>
                                                        <small class="text-muted">Lanefreitas.ac</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category7.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mon projet du cours :</p>
                                                        <small class="text-muted">Enaultnicole</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category8.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mi Proyecto del curso:</p>
                                                        <small class="text-muted">Arytrindade</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category9.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mon projet du cours :</p>
                                                        <small class="text-muted">Osahan Sin</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category10.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Meu projeto do curso:</p>
                                                        <small class="text-muted">sirlanefreitas.ac</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category11.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mon projet du cours :</p>
                                                        <small class="text-muted">Wtnicole</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category12.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mi Proyecto del curso:</p>
                                                        <small class="text-muted">Rindadekaryt</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category5.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mon projet du cours :</p>
                                                        <small class="text-muted">Tangus</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category2.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Meu projeto do curso:</p>
                                                        <small class="text-muted">Sirlanefreitas.ac</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category3.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mon projet du cours :</p>
                                                        <small class="text-muted">Tnicoarsenaulle</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card border-0 rounded-3 overflow-hidden shadow-sm oneline-text position-relative">
                                                    <img src="/img/category/category4.jpg" class="img-fluid">
                                                    <div class="card-body m-0 p-3">
                                                        <p class="card-text mb-0 text-dark">Mi Proyecto del curso:</p>
                                                        <small class="text-muted">Tytrindade</small>
                                                    </div>
                                                    <a href="https://askbootstrap.com/preview/edutree/projects.html"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center mb-0 mt-5">
                                                <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link"
                                                        href="courses-detail.html#">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="courses-detail.html#">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="courses-detail.html#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="courses-detail.html#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-md-block">
                    <div class="sidebar-fixed">
                        <div class="card border-0 bg-white rounded-3 shadow-sm overflow-hidden mb-3 p-3">
                            <div class="card-body p-4">
                                <div class="small text-muted fw-bolder fs-6">
                                    <a href="courses-detail.html"> <span class="badge bg-danger">CYBER MONDAY</span></a>
                                </div>
                                <div class="mb-3">
                                    <span class="fs-1 text-black fw-bold">$439</span>
                                    &nbsp;
                                    <span class="text-danger">76% Disc <del>$1800</del></span>
                                </div>
                                <div class="d-grid my-2"><a
                                        href="https://askbootstrap.com/preview/edutree/successful.html"
                                        class="btn btn-primary py-3">
                                        <i class="bi bi-cart-fill"></i> BUY</a>
                                </div>
                                <div class="mb-4"><span class="text-danger">
                                        <i class="bi bi-clock"></i> This offer end in <strong>4d</strong> </span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-hand-thumbs-up me-2"></i> 99% positive reviews (9K)
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-person me-2"></i> 198106 students
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-file me-2"></i> 16 lessons (1h 57m)
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-journal-richtext me-2"></i> 11 additional resources (6 files)
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-emoji-smile me-2"></i> Online and at your own pace
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-phone me-2"></i> Available on the app
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-megaphone me-2"></i> Audio: English, Spanish
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-water me-2"></i> Level <span
                                            class="badge bg-warning">BEGINNER</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-infinity me-2"></i> Unlimited access forever
                                    </li>
                                </ul>
                                <hr>
                                <div class="d-flex mb-4 justify-content-between align-items-center">
                                    <small class="text-muted">A course by<a
                                            class="text-decoration-none link-dark fw-bold"> Sudhindra Sujan</a><br>
                                        Product photographer.<br>Sevilla, Spain.</small>
                                    <div>
                                        <img src="/img/globel/avatar.png" class="img fluid rounded-circle" width="50px">
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-outline-primary py-3">
                                        <i class="bi bi-gift"></i> Buy as a gift
                                    </button>
                                </div>
                                <div class="text-center pt-3">
                                    <a href="courses-detail.html#" class="text-muted small">Redeem the course with a
                                        <span class="text-danger"><i class="bi bi-gift-fill"></i> gift code</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
