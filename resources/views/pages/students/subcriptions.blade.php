@extends('pages.students.layout.app')
@section('content')
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="border-0 card">
                        <div class="d-lg-flex justify-content-between align-items-center card-header">
                            <div class="mb-3 mb-lg-0">
                                <h3 class="mb-0">My Subscriptions</h3>
                                <p class="mb-0">
                                    Here is list of package/product that you have subscribed.
                                </p>
                            </div>
                            <div>
                                <a class="btn btn-success btn-sm" href="student-subscriptions.html#">Upgrade Now — Go Pro
                                    $39.00</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="border-bottom pt-0 pb-5">
                                <div class="mb-4 row">
                                    <div class="mb-2 mb-lg-0 col-lg-6 col-md-8 col-sm-7">
                                        <span class="d-block"><span class="h4">Monthly</span>
                                            <span class="ms-2 badge bg-success">Active</span></span>
                                        <p class="mb-0 fs-6">Subscription ID: #100010002</p>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-4 col-sm-5">
                                        <span>Auto Renewal</span>
                                        <form>
                                            <div class="form-switch">
                                                <input name="radios" type="checkbox" class="form-check-input"
                                                    checked="" />
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="d-lg-flex align-items-start justify-content-end col-lg-3 col-md-12 col-sm-12">
                                        <a class="btn btn-outline-primary btn-sm" href="student-subscriptions.html#">Change
                                            Plan</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Started On</span>
                                        <h6 class="mb-0">Oct 1, 2022</h6>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Price</span>
                                        <h6 class="mb-0">Monthly</h6>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Access</span>
                                        <h6 class="mb-0">Access All Courses</h6>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Billing Date</span>
                                        <h6 class="mb-0">Next Billing on Nov 1, 2022</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-5 pb-5">
                                <div class="mb-4 row">
                                    <div class="mb-2 mb-lg-0 col-lg-6 col-md-8 col-sm-7">
                                        <span class="d-block"><span class="h4">One Year</span>
                                            <span class="ms-2 badge bg-success">Active</span></span>
                                        <p class="mb-0 fs-6">Subscription ID: #100010002</p>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-4 col-sm-5">
                                        <span>Auto Renewal</span>
                                        <form>
                                            <div class="form-switch">
                                                <input name="radios" type="checkbox" class="form-check-input"
                                                    checked="" />
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="d-lg-flex align-items-start justify-content-end col-lg-3 col-md-12 col-sm-12">
                                        <a class="btn btn-outline-primary btn-sm" href="student-subscriptions.html#">Change
                                            Plan</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Started On</span>
                                        <h6 class="mb-0">Oct 1, 2022</h6>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Price</span>
                                        <h6 class="mb-0">Monthly</h6>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Access</span>
                                        <h6 class="mb-0">Access All Courses</h6>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Billing Date</span>
                                        <h6 class="mb-0">Next Billing on Nov 1, 2022</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-5">
                                <div class="mb-4 row">
                                    <div class="mb-2 mb-lg-0 col">
                                        <span class="d-block"><span class="h4">Free Plan</span>
                                            <span class="ms-2 badge bg-danger">Expired</span></span>
                                        <p class="mb-0 fs-6">Subscription ID: #100010001</p>
                                    </div>
                                    <div class="col-auto col">
                                        <a class="btn btn-light btn-sm disabled"
                                            href="student-subscriptions.html#">Disabled</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Started On</span>
                                        <h6 class="mb-0">Sept 1, 2022</h6>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Price</span>
                                        <h6 class="mb-0">Free - Trial a Month</h6>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Access</span>
                                        <h6 class="mb-0">Access All Courses</h6>
                                    </div>
                                    <div class="mb-2 mb-lg-0 col-lg-3 col-md-3 col-sm-6">
                                        <span class="fs-6">Billing Date</span>
                                        <h6 class="mb-0">Next Billing on Oct 1, 2022</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
