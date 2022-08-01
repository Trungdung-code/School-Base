@extends('pages.instructor.layout.app')
@section('content')
    <div class="col-lg-9 col-md-8 col-sm-12 col-12">
        <div class="row">
            <div class="mb-4 mb-lg-0 col-lg-4 col-md-12 col-sm-12">
                <div class="card border-light">
                    <div class="p-0 card-body">
                        <div class="p-4">
                            <span class="fs-6 text-uppercase fw-semi-bold">Revenue</span>
                            <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">$467.34</h2>
                            <span class="d-flex justify-content-between align-items-center"><span>Earning
                                    this month</span><span class="ms-2 badge bg-success">$203.23</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-lg-4 col-md-12 col-sm-12">
                <div class="card border-light">
                    <div class="p-0 card-body">
                        <div class="p-4">
                            <span class="fs-6 text-uppercase fw-semi-bold">Students
                                Enrollments</span>
                            <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">12,000</h2>
                            <span class="d-flex justify-content-between align-items-center"><span>New this
                                    month</span><span class="ms-2 badge bg-info">120+</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 mb-lg-0 col-lg-4 col-md-12 col-sm-12">
                <div class="card border-light">
                    <div class="p-0 card-body">
                        <div class="p-4">
                            <span class="fs-6 text-uppercase fw-semi-bold">Courses
                                Rating</span>
                            <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">4.80</h2>
                            <span class="d-flex justify-content-between align-items-center"><span>Rating
                                    this
                                    month</span><span class="ms-2 badge bg-warning">10+</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 card">
            <div class="card-header">
                <h3 class="mb-0 h4">Best Selling Courses</h3>
            </div>
            <div class="p-0  card-body">
                <div class="table-responsive border-0 ">
                    <table class="mb-0 text-nowrap  table">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="border-0">COURSES</th>
                                <th scope="col" class="border-0">SALES</th>
                                <th scope="col" class="border-0">AMOUNT</th>
                                <th scope="col" class="border-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle border-top-0 ">
                                    <a href="dashboard.html">
                                        <div class="d-lg-flex align-items-center">
                                            <img src="img/2.jpg" alt="" class="rounded img-4by3-lg">
                                            <h5 class="mb-0 ms-lg-3 mt-lg-0 mt-2 text-primary-hover">
                                                Revolutionize how you build the web
                                            </h5>
                                        </div>
                                    </a>
                                </td>
                                <td class="align-middle border-top-0">34</td>
                                <td class="align-middle border-top-0">$3145.23 </td>
                                <td class="align-middle border-top-0">
                                    <div>
                                        <div class="dropdown"><a href="dashboard.html#"><i
                                                    class="fe fe-more-vertical text-muted"></i></a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle border-top-0 ">
                                    <a href="dashboard.html">
                                        <div class="d-lg-flex align-items-center">
                                            <img src="img/5.jpg" alt="" class="rounded img-4by3-lg">
                                            <h5 class="mb-0 ms-lg-3 mt-lg-0 mt-2 text-primary-hover">Guide
                                                to Static Sites with Gatsby</h5>
                                        </div>
                                    </a>
                                </td>
                                <td class="align-middle border-top-0">30</td>
                                <td class="align-middle border-top-0">$2611.82 </td>
                                <td class="align-middle border-top-0">
                                    <div>
                                        <div class="dropdown"><a href="dashboard.html#"><i
                                                    class="fe fe-more-vertical text-muted"></i></a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle border-top-0 ">
                                    <a href="dashboard.html">
                                        <div class="d-lg-flex align-items-center">
                                            <img src="img/7.jpg" alt="" class="rounded img-4by3-lg">
                                            <h5 class="mb-0 ms-lg-3 mt-lg-0 mt-2 text-primary-hover">The
                                                Modern HTML Courses</h5>
                                        </div>
                                    </a>
                                </td>
                                <td class="align-middle border-top-0">26</td>
                                <td class="align-middle border-top-0">$2372.19 </td>
                                <td class="align-middle border-top-0">
                                    <div>
                                        <div class="dropdown"><a href="dashboard.html#"><i
                                                    class="fe fe-more-vertical text-muted"></i></a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle border-top-0 ">
                                    <a href="dashboard.html">
                                        <div class="d-lg-flex align-items-center">
                                            <img src="img/4.jpg" alt="" class="rounded img-4by3-lg">
                                            <h5 class="mb-0 ms-lg-3 mt-lg-0 mt-2 text-primary-hover">Courses
                                                JavaScript Heading Title</h5>
                                        </div>
                                    </a>
                                </td>
                                <td class="align-middle border-top-0">20</td>
                                <td class="align-middle border-top-0">$1145.23 </td>
                                <td class="align-middle border-top-0">
                                    <div>
                                        <div class="dropdown"><a href="dashboard.html#"><i
                                                    class="fe fe-more-vertical text-muted"></i></a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle border-top-0 ">
                                    <a href="dashboard.html">
                                        <div class="d-lg-flex align-items-center">
                                            <img src="img/2.jpg" alt="" class="rounded img-4by3-lg">
                                            <h5 class="mb-0 ms-lg-3 mt-lg-0 mt-2 text-primary-hover">
                                                Revolutionize how you build the web
                                            </h5>
                                        </div>
                                    </a>
                                </td>
                                <td class="align-middle border-top-0">34</td>
                                <td class="align-middle border-top-0">$3145.23 </td>
                                <td class="align-middle border-top-0">
                                    <div>
                                        <div class="dropdown"><a href="dashboard.html#"><i
                                                    class="fe fe-more-vertical text-muted"></i></a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle border-top-0 ">
                                    <a href="dashboard.html">
                                        <div class="d-lg-flex align-items-center">
                                            <img src="img/5.jpg" alt="" class="rounded img-4by3-lg">
                                            <h5 class="mb-0 ms-lg-3 mt-lg-0 mt-2 text-primary-hover">Guide
                                                to Static Sites with Gatsby</h5>
                                        </div>
                                    </a>
                                </td>
                                <td class="align-middle border-top-0">30</td>
                                <td class="align-middle border-top-0">$2611.82 </td>
                                <td class="align-middle border-top-0">
                                    <div>
                                        <div class="dropdown"><a href="dashboard.html#"><i
                                                    class="fe fe-more-vertical text-muted"></i></a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle border-top-0 ">
                                    <a href="dashboard.html">
                                        <div class="d-lg-flex align-items-center">
                                            <img src="img/7.jpg" alt="" class="rounded img-4by3-lg">
                                            <h5 class="mb-0 ms-lg-3 mt-lg-0 mt-2 text-primary-hover">The
                                                Modern HTML Courses</h5>
                                        </div>
                                    </a>
                                </td>
                                <td class="align-middle border-top-0">26</td>
                                <td class="align-middle border-top-0">$2372.19 </td>
                                <td class="align-middle border-top-0">
                                    <div>
                                        <div class="dropdown"><a href="dashboard.html#"><i
                                                    class="fe fe-more-vertical text-muted"></i></a></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
