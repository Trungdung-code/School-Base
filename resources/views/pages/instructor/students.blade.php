@extends('pages.instructor.layout.app')
@section('content')
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="mb-4 overflow-hidden card">
            <div class="border-0 d-flex align-items-center justify-content-between  card-header">
                <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Students</h3>
                    <p class="mb-0">Meet people taking your course.</p>
                </div>
                <div>
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false"><span
                                    class="fe fe-list fs-4"></span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true"><span
                                    class="fe fe-grid fs-4"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div id="home" role="tabpanel" aria-labelledby="home-tab" class="pb-4 tab-pane fade show active">
                <div class="bg-transparent shadow-none card">
                    <div class="px-0 py-0 card-body">
                        <div class="row">
                            <div class="mb-3 col-xl-12 col-lg-12 col-sm-12">
                                <div class="row">
                                    <div class="pe-0 col">
                                        <div class="mb-3"><input placeholder="Search by Name" type="search"
                                                id="formSearchbyName" class="form-control" value=""></div>
                                    </div>
                                    <div class="col-auto col"><a class="btn btn-secondary"
                                            href="instructor-students.html">Export CSV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-4 card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex align-items-center">
                                            <img src="img/users/user10.jpg" alt="" class="rounded-circle avatar-md">
                                            <span class="ms-3">
                                                <h4 class="mb-1">Reva Yokk</h4>
                                                <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i>Los
                                                    Angeles, CA</p>
                                            </span>
                                            <a class="btn btn-sm btn-outline-white ms-auto"
                                                href="instructor-students.html">Message</a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="fs-6">
                                            <span>Enrolled</span> <span class="text-dark">7 July, 2022</span>
                                        </div>
                                        <div class="fs-6">
                                            <span>Progress</span> <span class="text-success">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-4 card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex align-items-center">
                                            <img src="img/users/user2.jpg" alt="" class="rounded-circle avatar-md">
                                            <span class="ms-3">
                                                <h4 class="mb-1">Dianna Smiley</h4>
                                                <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i>United
                                                    Kingdom</p>
                                            </span>
                                            <a class="btn btn-sm btn-outline-white ms-auto"
                                                href="instructor-students.html">Message</a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="fs-6">
                                            <span>Enrolled</span> <span class="text-dark">6 July, 2022</span>
                                        </div>
                                        <div class="fs-6">
                                            <span>Progress</span> <span class="text-success">12%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-4 card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex align-items-center">
                                            <img src="img/users/user9.jpg" alt="" class="rounded-circle avatar-md">
                                            <span class="ms-3">
                                                <h4 class="mb-1">Nia Sikhone</h4>
                                                <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i>United
                                                    Kingdom</p>
                                            </span>
                                            <a class="btn btn-sm btn-outline-white ms-auto"
                                                href="instructor-students.html">Message</a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="fs-6">
                                            <span>Enrolled</span> <span class="text-dark">12 June, 2022</span>
                                        </div>
                                        <div class="fs-6">
                                            <span>Progress</span> <span class="text-success">14%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-4 card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex align-items-center">
                                            <img src="img/users/user3.jpg" alt=""
                                                class="rounded-circle avatar-md">
                                            <span class="ms-3">
                                                <h4 class="mb-1">Jacob Jones</h4>
                                                <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i>India
                                                </p>
                                            </span>
                                            <a class="btn btn-sm btn-outline-white ms-auto"
                                                href="instructor-students.html">Message</a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="fs-6">
                                            <span>Enrolled</span> <span class="text-dark">2 July, 2022</span>
                                        </div>
                                        <div class="fs-6">
                                            <span>Progress</span> <span class="text-success">33%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-4 card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex align-items-center">
                                            <img src="img/users/user6.jpg" alt=""
                                                class="rounded-circle avatar-md">
                                            <span class="ms-3">
                                                <h4 class="mb-1">Kristin Watson</h4>
                                                <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i>New
                                                    York</p>
                                            </span>
                                            <a class="btn btn-sm btn-outline-white ms-auto"
                                                href="instructor-students.html">Message</a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="fs-6">
                                            <span>Enrolled</span> <span class="text-dark">1 July, 2022</span>
                                        </div>
                                        <div class="fs-6">
                                            <span>Progress</span> <span class="text-success">24%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-4 card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex align-items-center">
                                            <img src="img/users/user9.jpg" alt=""
                                                class="rounded-circle avatar-md">
                                            <span class="ms-3">
                                                <h4 class="mb-1">Nia Sikhone</h4>
                                                <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i>Netherland</p>
                                            </span>
                                            <a class="btn btn-sm btn-outline-white ms-auto"
                                                href="instructor-students.html">Message</a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="fs-6">
                                            <span>Enrolled</span> <span class="text-dark">12 June, 2022</span>
                                        </div>
                                        <div class="fs-6">
                                            <span>Progress</span> <span class="text-success">45%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-4 card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex align-items-center">
                                            <img src="img/users/user10.jpg" alt=""
                                                class="rounded-circle avatar-md">
                                            <span class="ms-3">
                                                <h4 class="mb-1">Rivao Luke</h4>
                                                <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i>New
                                                    York</p>
                                            </span>
                                            <a class="btn btn-sm btn-outline-white ms-auto"
                                                href="instructor-students.html">Message</a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="fs-6">
                                            <span>Enrolled</span> <span class="text-dark">1 June, 2022</span>
                                        </div>
                                        <div class="fs-6">
                                            <span>Progress</span> <span class="text-success">100%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-4 card">
                                    <div class="card-body border-bottom">
                                        <div class="d-flex align-items-center">
                                            <img src="img/users/user4.jpg" alt=""
                                                class="rounded-circle avatar-md">
                                            <span class="ms-3">
                                                <h4 class="mb-1">Nia Sikhone</h4>
                                                <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i>Netherland</p>
                                            </span>
                                            <a class="btn btn-sm btn-outline-white ms-auto"
                                                href="instructor-students.html">Message</a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="fs-6">
                                            <span>Enrolled</span> <span class="text-dark">12 June, 2022</span>
                                        </div>
                                        <div class="fs-6">
                                            <span>Progress</span> <span class="text-success">68%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="justify-content-center mb-0 pagination">
                            <li class="previous paginationDisabled">
                                <a class="page-link mx-1 rounded" tabindex="0" role="button" aria-disabled="true"
                                    aria-label="Previous page" rel="prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item active"><a role="button" class="page-link mx-1 rounded" tabindex="0"
                                    aria-label="Page 1 is your current page" aria-current="page">1</a></li>
                            <li class="page-item"><a role="button" class="page-link mx-1 rounded" tabindex="0"
                                    aria-label="Page 2">2</a></li>
                            <li class="page-item"><a role="button" class="page-link mx-1 rounded" tabindex="0"
                                    aria-label="Page 3">3</a></li>
                            <li class="next">
                                <a class="page-link mx-1 rounded" tabindex="0" role="button" aria-disabled="false"
                                    aria-label="Next page" rel="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card">
                    <div class="px-0 py-0 card-body">
                        <div class="row">
                            <div class="mb-lg-0 mb-2 ps-5 py-4 col"><input type="search" class="form-control"
                                    placeholder="Search by Name" value=""></div>
                            <div class="col-auto mb-lg-0 mb-2 pe-5 py-4 col"><a class="btn btn-secondary"
                                    href="instructor-students.html">Export CSV</a></div>
                        </div>
                        <div class="table-responsive ">
                            <table role="table" class="text-nowrap table">
                                <thead class="table-light">
                                    <tr role="row">
                                        <th colspan="1" role="columnheader">NAME</th>
                                        <th colspan="1" role="columnheader">ENROLLED</th>
                                        <th colspan="1" role="columnheader">PROGRESS</th>
                                        <th colspan="1" role="columnheader">Q/A</th>
                                        <th colspan="1" role="columnheader">LOCATIONS</th>
                                        <th colspan="1" role="columnheader">MESSAGE</th>
                                    </tr>
                                </thead>
                                <tbody role="rowgroup">
                                    <tr role="row">
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <img src="img/users/user1.jpg" alt=""
                                                    class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Reva Yokk</h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">7 July, 2022</td>
                                        <td class="align-middle">0%</td>
                                        <td class="align-middle">2</td>
                                        <td class="align-middle"><span class="fs-6"><i
                                                    class="fe fe-map-pin me-1"></i>Los Angeles, CA</span>
                                        </td>
                                        <td class="align-middle"><a class="btn btn-outline-white btn-sm"
                                                href="instructor-students.html">Message</a>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <img src="img/users/user2.jpg" alt=""
                                                    class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Dianna Smiley</h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">6 July, 2022</td>
                                        <td class="align-middle">12%</td>
                                        <td class="align-middle">4</td>
                                        <td class="align-middle"><span class="fs-6"><i
                                                    class="fe fe-map-pin me-1"></i>United Kingdom</span>
                                        </td>
                                        <td class="align-middle"><a class="btn btn-outline-white btn-sm"
                                                href="instructor-students.html">Message</a>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <img src="img/users/user3.jpg" alt=""
                                                    class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Nia Sikhone</h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">12 June, 2022</td>
                                        <td class="align-middle">14%</td>
                                        <td class="align-middle">5</td>
                                        <td class="align-middle"><span class="fs-6"><i
                                                    class="fe fe-map-pin me-1"></i>United State</span></td>
                                        <td class="align-middle"><a class="btn btn-outline-white btn-sm"
                                                href="instructor-students.html">Message</a>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <img src="img/users/user4.jpg" alt=""
                                                    class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Jacob Jones</h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">2 July, 2022</td>
                                        <td class="align-middle">33%</td>
                                        <td class="align-middle">6</td>
                                        <td class="align-middle"><span class="fs-6"><i
                                                    class="fe fe-map-pin me-1"></i>India</span></td>
                                        <td class="align-middle"><a class="btn btn-outline-white btn-sm"
                                                href="instructor-students.html">Message</a>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <img src="img/users/user5.jpg" alt=""
                                                    class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Kristin Watson</h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">1 July, 2022</td>
                                        <td class="align-middle">24%</td>
                                        <td class="align-middle">3</td>
                                        <td class="align-middle"><span class="fs-6"><i
                                                    class="fe fe-map-pin me-1"></i>New York</span></td>
                                        <td class="align-middle"><a class="btn btn-outline-white btn-sm"
                                                href="instructor-students.html">Message</a>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <img src="img/users/user6.jpg" alt=""
                                                    class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Nia Sikhone</h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">12 June, 2022</td>
                                        <td class="align-middle">45%</td>
                                        <td class="align-middle">8</td>
                                        <td class="align-middle"><span class="fs-6"><i
                                                    class="fe fe-map-pin me-1"></i>Netherland</span></td>
                                        <td class="align-middle"><a class="btn btn-outline-white btn-sm"
                                                href="instructor-students.html">Message</a>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <img src="img/users/user7.jpg" alt=""
                                                    class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Rivao Luke</h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">1 July, 2022</td>
                                        <td class="align-middle">100%</td>
                                        <td class="align-middle">9</td>
                                        <td class="align-middle"><span class="fs-6"><i
                                                    class="fe fe-map-pin me-1"></i>New York</span></td>
                                        <td class="align-middle"><a class="btn btn-outline-white btn-sm"
                                                href="instructor-students.html">Message</a>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <img src="img/users/user8.jpg" alt=""
                                                    class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Nia Sikhone</h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">12 June, 2022</td>
                                        <td class="align-middle">68%</td>
                                        <td class="align-middle">4</td>
                                        <td class="align-middle"><span class="fs-6"><i
                                                    class="fe fe-map-pin me-1"></i>Netherland</span></td>
                                        <td class="align-middle"><a class="btn btn-outline-white btn-sm"
                                                href="instructor-students.html">Message</a>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <img src="img/users/user9.jpg" alt=""
                                                    class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Xiaon Merry</h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">8 June, 2022</td>
                                        <td class="align-middle">30%</td>
                                        <td class="align-middle">7</td>
                                        <td class="align-middle"><span class="fs-6"><i
                                                    class="fe fe-map-pin me-1"></i>Netherland</span></td>
                                        <td class="align-middle"><a class="btn btn-outline-white btn-sm"
                                                href="instructor-students.html">Message</a>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <img src="img/users/user10.jpg" alt=""
                                                    class="rounded-circle avatar-md me-2">
                                                <h5 class="mb-0">Sina Ray</h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">12 June, 2022</td>
                                        <td class="align-middle">12%</td>
                                        <td class="align-middle">8</td>
                                        <td class="align-middle"><span class="fs-6"><i
                                                    class="fe fe-map-pin me-1"></i>Africa</span></td>
                                        <td class="align-middle"><a class="btn btn-outline-white btn-sm"
                                                href="instructor-students.html">Message</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                                                    class="page-link mx-1 rounded btn btn-primary">1</button>
                                            </li>
                                            <li class="page-item  page-item"><button type="button"
                                                    class="page-link mx-1 rounded btn btn-primary">2</button>
                                            </li>
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
        </div>
    </div>
@endsection
