@extends('pages.instructor.layout.app')
@section('content')
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="border-0 card">
            <div class="card-header">
                <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Orders</h3>
                    <p class="mb-0">Order Dashboard is a quick overview of all current orders.</p>
                </div>
            </div>
            <div class="card-body">
                <div class=" overflow-hidden">
                    <div class="row">
                        <div class="mb-lg-0 mb-2 col-lg-12 col-md-12 col-sm-12"><input type="search" class="form-control"
                                placeholder="Search Orders" value=""></div>
                    </div>
                </div>
            </div>
            <div class="p-0 pb-5 card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="table-responsive ">
                            <table role="table" class="text-nowrap table">
                                <thead class="table-light">
                                    <tr role="row">
                                        <th colspan="1" role="columnheader">COURSES</th>
                                        <th colspan="1" role="columnheader">AMOUNT</th>
                                        <th colspan="1" role="columnheader">INVOICE</th>
                                        <th colspan="1" role="columnheader">DATE</th>
                                        <th colspan="1" role="columnheader">METHOD</th>
                                        <th colspan="1" role="columnheader"></th>
                                    </tr>
                                </thead>
                                <tbody role="rowgroup">
                                    <tr role="row">
                                        <td role="cell">Building Scalable APIs with GraphQL</td>
                                        <td role="cell">$89</td>
                                        <td role="cell">#10023</td>
                                        <td role="cell">June 9, 2022</td>
                                        <td role="cell">Amex</td>
                                        <td class="ps-0" role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-orders.html#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown-header" role="heading">SETTINGS
                                                    </div>
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                            </path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">HTML5 Web Front End Development</td>
                                        <td role="cell">$129</td>
                                        <td role="cell">#10020</td>
                                        <td role="cell">June 9, 2022</td>
                                        <td role="cell">Mastercard</td>
                                        <td class="ps-0" role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-orders.html#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown-header" role="heading">SETTINGS
                                                    </div>
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                            </path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">Learn BasicJavaScript Courses</td>
                                        <td role="cell">$29</td>
                                        <td role="cell">#10018</td>
                                        <td role="cell">June 8, 2022</td>
                                        <td role="cell">PayPal</td>
                                        <td class="ps-0" role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-orders.html#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown-header" role="heading">SETTINGS
                                                    </div>
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                            </path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">Get Started: React Js Courses</td>
                                        <td role="cell">$59</td>
                                        <td role="cell">#10003</td>
                                        <td role="cell">June 9, 2022</td>
                                        <td role="cell">Visa</td>
                                        <td class="ps-0" role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-orders.html#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown-header" role="heading">SETTINGS
                                                    </div>
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                            </path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">Building Scalable APIs with GraphQL</td>
                                        <td role="cell">$129</td>
                                        <td role="cell">#10020</td>
                                        <td role="cell">June 7, 2022</td>
                                        <td role="cell">Mastercard</td>
                                        <td class="ps-0" role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-orders.html#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown-header" role="heading">SETTINGS
                                                    </div>
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                            </path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">Master in CSS3 Courses Online</td>
                                        <td role="cell">$29</td>
                                        <td role="cell">#10018</td>
                                        <td role="cell">June 8, 2022</td>
                                        <td role="cell">PayPal</td>
                                        <td class="ps-0" role="cell">
                                            <div class="dropdown">
                                                <a href="instructor-orders.html#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-secondary">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <div class="dropdown-header" role="heading">SETTINGS
                                                    </div>
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                            </path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" role="button" tabindex="0"
                                                        href="instructor-orders.html#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                                            height="18px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="dropdown-item-icon">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
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
                        <div class="pb-5">
                            <nav>
                                <ul class="justify-content-center mb-0 pagination">
                                    <li class="page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary"><i
                                                class="fe fe-chevron-left"></i></button></li>
                                    <li class="page-item active page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary">1</button></li>
                                    <li class="page-item  page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary">2</button></li>
                                    <li class="page-item  page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary">3</button></li>
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
