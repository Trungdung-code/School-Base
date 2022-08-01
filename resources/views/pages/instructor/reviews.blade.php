@extends('pages.instructor.layout.app')
@section('content')
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="border-0 card">
            <div class="d-lg-flex align-items-center justify-content-between card-header">
                <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Reviews</h3>
                    <p class="mb-0">You have full control to manage your own account setting.</p>
                </div>
                <div><a class="btn btn-outline-primary btn-sm" href="instructor-reviews.html">Export To
                        CSV...</a></div>
            </div>
            <div class="card-body">
                <form class="mb-4">
                    <div class="row">
                        <div class="mb-2 mb-lg-0 col-xl-6 col-lg-6 col-md-4 col-sm-12">
                            <select name="all" class="form-select">
                                <option value="" class="text-muted" selected="">All</option>
                                <option value="1">How to easily create a website</option>
                                <option value="2">Grunt: The JavaScript Task...</option>
                                <option value="3">Vue js: The JavaScript Task...</option>
                            </select>
                        </div>
                        <div class="mb-2 mb-lg-0 col-xl-3 col-lg-3 col-md-4 col-sm-12">
                            <select name="rating" class="form-select">
                                <option value="" class="text-muted" selected="">Rating</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="mb-2 mb-lg-0 col-xl-3 col-lg-3 col-md-4 col-sm-12">
                            <select name="sort" class="form-select">
                                <option value="" class="text-muted" selected="">Sort</option>
                                <option value="Newest">Newest</option>
                                <option value="Oldest">Oldest</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="border-top list-group list-group-flush">
                    <div class="px-0 py-4 list-group-item">
                        <div class="d-flex">
                            <img src="img/users/user10.jpg" alt="" class="rounded-circle avatar-lg">
                            <div class="ms-3 mt-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="mb-0">Barry Watson</h4>
                                        <span class="text-muted fs-6"></span>
                                    </div>
                                    <div><a data-bs-toggle="tooltip" data-placement="top" title="Report Abuse"
                                            href="instructor-reviews.html"><i class="fe fe-flag"></i></a></div>
                                </div>
                                <div class="mt-2">
                                    <span class="me-1 text-warning">
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                    </span>
                                    <span class="me-1">for</span><span class="h5">How to
                                        easily create a website with WordPress</span>
                                    <p class="mt-2">I started at stage zero. With Edutree I was able to
                                        start learning online and eventually build up enough knowledge and
                                        skills to transition into a well-paying career. </p>
                                    <a class="btn btn-outline-white btn-sm" href="instructor-reviews.html">Respond</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-4 list-group-item">
                        <div class="d-flex">
                            <img src="img/users/user2.jpg" alt="" class="rounded-circle avatar-lg">
                            <div class="ms-3 mt-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="mb-0">Linda Shenoy</h4>
                                        <span class="text-muted fs-6"></span>
                                    </div>
                                    <div><a data-bs-toggle="tooltip" data-placement="top" title="Report Abuse"
                                            href="instructor-reviews.html"><i class="fe fe-flag"></i></a></div>
                                </div>
                                <div class="mt-2">
                                    <span class="me-1 text-warning">
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                    </span>
                                    <span class="me-1">for</span><span class="h5">Getting
                                        started - Grunt: The JavaScript Task...</span>
                                    <p class="mt-2">Orci varius natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus. Etiam vulputate euismod justo in
                                        consequat. Sed tempus elementum urnanisl et lacus. </p>
                                    <a class="btn btn-outline-white btn-sm" href="instructor-reviews.html">Respond</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-4 list-group-item">
                        <div class="d-flex">
                            <img src="img/3.jpg" alt="" class="rounded-circle avatar-lg">
                            <div class="ms-3 mt-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="mb-0">Jean Watson</h4>
                                        <span class="text-muted fs-6"></span>
                                    </div>
                                    <div><a data-bs-toggle="tooltip" data-placement="top" title="Report Abuse"
                                            href="instructor-reviews.html"><i class="fe fe-flag"></i></a></div>
                                </div>
                                <div class="mt-2">
                                    <span class="me-1 text-warning">
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                    </span>
                                    <span class="me-1">for</span><span class="h5">Getting
                                        started - Vue js: The JavaScript Task...</span>
                                    <p class="mt-2">Sed pretium risus magna, ac efficitur nunc rutrum
                                        imperdiet. Vivamus sed ante sed mi fermentum tempus. Nullam finibus
                                        augue eget felis efficitur semper. </p>
                                    <a class="btn btn-outline-white btn-sm" href="instructor-reviews.html">Respond</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-4 list-group-item">
                        <div class="d-flex">
                            <img src="img/users/user4.jpg" alt="" class="rounded-circle avatar-lg">
                            <div class="ms-3 mt-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="mb-0">John Deo</h4>
                                        <span class="text-muted fs-6"></span>
                                    </div>
                                    <div><a data-bs-toggle="tooltip" data-placement="top" title="Report Abuse"
                                            href="instructor-reviews.html"><i class="fe fe-flag"></i></a></div>
                                </div>
                                <div class="mt-2">
                                    <span class="me-1 text-warning">
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,15.4V6.1L13.71,10.13L18.09,10.5L14.77,13.39L15.76,17.67M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                    </span>
                                    <span class="me-1">for</span><span class="h5">Getting
                                        started - Gulp: The JavaScript Task...</span>
                                    <p class="mt-2">Morbi quis posuere lacus. Morbi et metus sit amet tellus
                                        dapibus aliquam. Morbi consectetur magna vel turpis lobortis lorem
                                        iopsum dolor sit commodo. </p>
                                    <a class="btn btn-outline-white btn-sm" href="instructor-reviews.html">Respond</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-4 list-group-item">
                        <div class="d-flex">
                            <img src="img/users/user1.jpg" alt="" class="rounded-circle avatar-lg">
                            <div class="ms-3 mt-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="mb-0">Rubik Nanda</h4>
                                        <span class="text-muted fs-6"></span>
                                    </div>
                                    <div><a data-bs-toggle="tooltip" data-placement="top" title="Report Abuse"
                                            href="instructor-reviews.html"><i class="fe fe-flag"></i></a></div>
                                </div>
                                <div class="mt-2">
                                    <span class="me-1 text-warning">
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,15.4V6.1L13.71,10.13L18.09,10.5L14.77,13.39L15.76,17.67M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                    </span>
                                    <span class="me-1">for</span><span class="h5">Getting
                                        started - HTML: The Foundations Task...</span>
                                    <p class="mt-2">Curabitur sollicitudin mi et sagittis egestas. Curabitur
                                        pellentesque nibh id enim hendrerit, at mollis neque rutrum. Sed
                                        nibh velit, tristique et dolor vitae. </p>
                                    <a class="btn btn-outline-white btn-sm" href="instructor-reviews.html">Respond</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-4 list-group-item">
                        <div class="d-flex">
                            <img src="img/users/user8.jpg" alt="" class="rounded-circle avatar-lg">
                            <div class="ms-3 mt-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="mb-0">Barry Watson</h4>
                                        <span class="text-muted fs-6"></span>
                                    </div>
                                    <div><a data-bs-toggle="tooltip" data-placement="top" title="Report Abuse"
                                            href="instructor-reviews.html"><i class="fe fe-flag"></i></a></div>
                                </div>
                                <div class="mt-2">
                                    <span class="me-1 text-warning">
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,15.4V6.1L13.71,10.13L18.09,10.5L14.77,13.39L15.76,17.67M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                    </span>
                                    <span class="me-1">for</span><span class="h5">How to
                                        easily create a website with WordPress</span>
                                    <p class="mt-2">Vestibulum in lobortis purus. Quisque sem turpis,
                                        hendrerit quis lacinia nec, rutrum nec velit. Nullam lobortis
                                        rhoncus tincidunt lorem ispun dnascetur ridiculus mus. </p>
                                    <a class="btn btn-outline-white btn-sm" href="instructor-reviews.html">Respond</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-4 list-group-item">
                        <div class="d-flex">
                            <img src="img/users/user6.jpg" alt="" class="rounded-circle avatar-lg">
                            <div class="ms-3 mt-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="mb-0">Jean Watson</h4>
                                        <span class="text-muted fs-6"></span>
                                    </div>
                                    <div><a data-bs-toggle="tooltip" data-placement="top" title="Report Abuse"
                                            href="instructor-reviews.html"><i class="fe fe-flag"></i></a></div>
                                </div>
                                <div class="mt-2">
                                    <span class="me-1 text-warning">
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,15.4V6.1L13.71,10.13L18.09,10.5L14.77,13.39L15.76,17.67M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                    </span>
                                    <span class="me-1">for</span><span class="h5">Getting
                                        started - Gulp: The JavaScript Task...</span>
                                    <p class="mt-2">Praesent sit amet ornare magna, vitae consequat arcu.
                                        Vestibulum at dictum erat, a fringilla ante. Nam et nibh ut nunc
                                        rutrum suscipit quis non neque. Nulla facilisi. </p>
                                    <a class="btn btn-outline-white btn-sm" href="instructor-reviews.html">Respond</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-4 list-group-item">
                        <div class="d-flex">
                            <img src="img/users/user8.jpg" alt="" class="rounded-circle avatar-lg">
                            <div class="ms-3 mt-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="mb-0">Barry Watson</h4>
                                        <span class="text-muted fs-6"></span>
                                    </div>
                                    <div><a data-bs-toggle="tooltip" data-placement="top" title="Report Abuse"
                                            href="instructor-reviews.html"><i class="fe fe-flag"></i></a></div>
                                </div>
                                <div class="mt-2">
                                    <span class="me-1 text-warning">
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                        <svg viewBox="0 0 24 24" role="presentation"
                                            style="width: 0.875rem; height: 0.875rem;">
                                            <path
                                                d="M12,15.4V6.1L13.71,10.13L18.09,10.5L14.77,13.39L15.76,17.67M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"
                                                style="fill: currentcolor;"></path>
                                        </svg>
                                    </span>
                                    <span class="me-1">for</span><span class="h5">Getting
                                        started - HTML: The Foundations Task...</span>
                                    <p class="mt-2">Sed pretium risus magna, ac efficitur nunc rutrum
                                        imperdiet. Vivamus sed ante sed mi fermentum tempus. Nullam finibus
                                        augue eget felis efficitur semper. </p>
                                    <a class="btn btn-outline-white btn-sm" href="instructor-reviews.html">Respond</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
