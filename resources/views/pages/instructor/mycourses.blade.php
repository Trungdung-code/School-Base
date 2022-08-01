@extends('pages.instructor.layout.app')
@section('content')
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="border-0 card">
            <div class="card-header">
                <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Courses</h3>
                    <p class="mb-0">Manage your courses and its update like live, draft and insight.</p>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="mb-lg-0 mb-2 col-lg-9 col-md-7 col-sm-12"><input type="search" class="form-control"
                            placeholder="Search Your Courses" value=""></div>
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <select name="" class="form-select">
                            <option value="" class="text-muted" selected="">Sort by</option>
                            <option value="Date Created">Date Created</option>
                            <option value="Newest">Newest</option>
                            <option value="High Rated">High Rated</option>
                            <option value="Law Rated">Law Rated</option>
                            <option value="High Earned">High Earned</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="p-0 pb-5 card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="table-responsive">
                            <table role="table" class="text-nowrap table">
                                <thead class="table-light">
                                    <tr role="row">
                                        <th colspan="1" role="columnheader">COURSES</th>
                                        <th colspan="1" role="columnheader">STUDENTS</th>
                                        <th colspan="1" role="columnheader">RATING</th>
                                        <th colspan="1" role="columnheader">STATUS</th>
                                        <th colspan="1" role="columnheader"></th>
                                    </tr>
                                </thead>
                                <tbody role="rowgroup">
                                    <tr role="row">
                                        <td role="cell">
                                            <div class="d-lg-flex align-items-center">
                                                <div>
                                                    <a href="instructor-my-courses.html"><img src="img/5.jpg" alt=""
                                                            class="rounded img-4by3-sm"></a>
                                                </div>
                                                <div class="ms-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 h5"><a class="text-inherit"
                                                            href="instructor-my-courses.html">Revolutionize
                                                            how you build the web</a>
                                                    </h4>
                                                    <ul class="fs-6 mb-0 list-inline">
                                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2"
                                                                    height="6" rx="1" fill="#356df1"></rect>
                                                                <rect x="7" y="5" width="2"
                                                                    height="9" rx="1" fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2"
                                                                    height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td role="cell">12,234</td>
                                        <td role="cell">
                                            <span class="text-warning">
                                                4.5
                                                <svg viewBox="0 0 24 24" role="presentation"
                                                    style="width: 0.9rem; height: 0.9rem;">
                                                    <path
                                                        d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                        style="fill: currentcolor;"></path>
                                                </svg>
                                            </span>
                                            (3,250)
                                        </td>
                                        <td role="cell"><span class="badge bg-info ">Draft</span></td>
                                        <td role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-my-courses.html#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="5" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="19" r="1">
                                                        </circle>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">
                                            <div class="d-lg-flex">
                                                <div>
                                                    <a href="instructor-my-courses.html"><img src="img/2.jpg"
                                                            alt="" class="rounded img-4by3-sm"></a>
                                                </div>
                                                <div class="ms-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 h5"><a class="text-inherit"
                                                            href="instructor-my-courses.html">Guide
                                                            to Static Sites with Gatsby</a>
                                                    </h4>
                                                    <ul class="fs-6 mb-0 list-inline">
                                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h
                                                            40m</li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2"
                                                                    height="6" rx="1" fill="#356df1"></rect>
                                                                <rect x="7" y="5" width="2"
                                                                    height="9" rx="1" fill="#356df1"></rect>
                                                                <rect x="11" y="2" width="2"
                                                                    height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td role="cell">2,000</td>
                                        <td role="cell">
                                            <span class="text-warning">
                                                4.5
                                                <svg viewBox="0 0 24 24" role="presentation"
                                                    style="width: 0.9rem; height: 0.9rem;">
                                                    <path
                                                        d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                        style="fill: currentcolor;"></path>
                                                </svg>
                                            </span>
                                            (5,300)
                                        </td>
                                        <td role="cell"><span class="badge bg-info ">Draft</span></td>
                                        <td role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-my-courses.html#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="5" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="19" r="1">
                                                        </circle>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">
                                            <div class="d-lg-flex">
                                                <div>
                                                    <a href="instructor-my-courses.html"><img src="img/7.jpg"
                                                            alt="" class="rounded img-4by3-sm"></a>
                                                </div>
                                                <div class="ms-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 h5"><a class="text-inherit"
                                                            href="instructor-my-courses.html">The
                                                            Modern HTML Courses</a>
                                                    </h4>
                                                    <ul class="fs-6 mb-0 list-inline">
                                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>4h
                                                            10m</li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2"
                                                                    height="6" rx="1" fill="#356df1"></rect>
                                                                <rect x="7" y="5" width="2"
                                                                    height="9" rx="1" fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2"
                                                                    height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td role="cell">22,345</td>
                                        <td role="cell">
                                            <span class="text-warning">
                                                4.5
                                                <svg viewBox="0 0 24 24" role="presentation"
                                                    style="width: 0.9rem; height: 0.9rem;">
                                                    <path
                                                        d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                        style="fill: currentcolor;"></path>
                                                </svg>
                                            </span>
                                            (6,380)
                                        </td>
                                        <td role="cell"><span class="badge bg-warning ">Pending</span></td>
                                        <td role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-my-courses.html#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="5" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="19" r="1">
                                                        </circle>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">
                                            <div class="d-lg-flex">
                                                <div>
                                                    <a href="instructor-my-courses.html"><img src="img/4.jpg"
                                                            alt="" class="rounded img-4by3-sm"></a>
                                                </div>
                                                <div class="ms-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 h5"><a class="text-inherit"
                                                            href="instructor-my-courses.html">Courses
                                                            JavaScript Heading Title</a>
                                                    </h4>
                                                    <ul class="fs-6 mb-0 list-inline">
                                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>4h
                                                            10m</li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2"
                                                                    height="6" rx="1" fill="#356df1"></rect>
                                                                <rect x="7" y="5" width="2"
                                                                    height="9" rx="1" fill="#356df1"></rect>
                                                                <rect x="11" y="2" width="2"
                                                                    height="12" rx="1" fill="#356df1"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td role="cell">5,235</td>
                                        <td role="cell">
                                            <span class="text-warning">
                                                4.5
                                                <svg viewBox="0 0 24 24" role="presentation"
                                                    style="width: 0.9rem; height: 0.9rem;">
                                                    <path
                                                        d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                        style="fill: currentcolor;"></path>
                                                </svg>
                                            </span>
                                            (5,400)
                                        </td>
                                        <td role="cell"><span class="badge bg-warning ">Pending</span></td>
                                        <td role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-my-courses.html#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="5" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="19" r="1">
                                                        </circle>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">
                                            <div class="d-lg-flex">
                                                <div>
                                                    <a href="instructor-my-courses.html"><img src="img/1.jpg"
                                                            alt="" class="rounded img-4by3-sm"></a>
                                                </div>
                                                <div class="ms-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 h5"><a class="text-inherit"
                                                            href="instructor-my-courses.html">Get
                                                            Start with Node Heading Title</a>
                                                    </h4>
                                                    <ul class="fs-6 mb-0 list-inline">
                                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h
                                                            59m</li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2"
                                                                    height="6" rx="1" fill="#356df1"></rect>
                                                                <rect x="7" y="5" width="2"
                                                                    height="9" rx="1" fill="#356df1"></rect>
                                                                <rect x="11" y="2" width="2"
                                                                    height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td role="cell">7,200</td>
                                        <td role="cell">
                                            <span class="text-warning">
                                                4.5
                                                <svg viewBox="0 0 24 24" role="presentation"
                                                    style="width: 0.9rem; height: 0.9rem;">
                                                    <path
                                                        d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                        style="fill: currentcolor;"></path>
                                                </svg>
                                            </span>
                                            (7,800)
                                        </td>
                                        <td role="cell"><span class="badge bg-success ">Live</span></td>
                                        <td role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-my-courses.html#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="5" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="19" r="1">
                                                        </circle>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">
                                            <div class="d-lg-flex">
                                                <div>
                                                    <a href="instructor-my-courses.html"><img src="img/6.jpg"
                                                            alt="" class="rounded img-4by3-sm"></a>
                                                </div>
                                                <div class="ms-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 h5"><a class="text-inherit"
                                                            href="instructor-my-courses.html">Get
                                                            Start with Laravel</a>
                                                    </h4>
                                                    <ul class="fs-6 mb-0 list-inline">
                                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h
                                                            40m</li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2"
                                                                    height="6" rx="1" fill="#356df1"></rect>
                                                                <rect x="7" y="5" width="2"
                                                                    height="9" rx="1" fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2"
                                                                    height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td role="cell">22,500</td>
                                        <td role="cell">
                                            <span class="text-warning">
                                                4.5
                                                <svg viewBox="0 0 24 24" role="presentation"
                                                    style="width: 0.9rem; height: 0.9rem;">
                                                    <path
                                                        d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                        style="fill: currentcolor;"></path>
                                                </svg>
                                            </span>
                                            (9,200)
                                        </td>
                                        <td role="cell"><span class="badge bg-success ">Live</span></td>
                                        <td role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-my-courses.html#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="5" r="1">
                                                        </circle>
                                                        <circle cx="12" cy="19" r="1">
                                                        </circle>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div>
                            <nav>
                                <ul class="justify-content-center mb-0 pagination">
                                    <li class="page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary"><i
                                                class="fe fe-chevron-left"></i></button></li>
                                    <li class="page-item active page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary">1</button></li>
                                    <li class="page-item  page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary">2</button></li>
                                    <li class="page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary"><i
                                                class="fe fe-chevron-right"></i></button></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
