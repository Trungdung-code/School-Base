@extends('pages.students.layout.app')

@section('content')
<div class="col-lg-3 col-md-4 col-sm-12">
    <div class="sidebar-fixed">
        <nav
            class="navbar sidebar-dash navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold fs-5 float-start py-1"
                href="https://askbootstrap.com/preview/edutree/dashboard.html">Menu</a>
            <button data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation" class="p-0 focus-none border-0 navbar-toggler collapsed">
                <span class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary p-0 text-white float-end">
                    <span class="fe fe-menu"></span>
                </span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="me-auto flex-column navbar-nav">
                    <li class="navbar-header nav-item">SUBSCRIPTION</li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://askbootstrap.com/preview/edutree/student-subscriptions.html"><i
                                class="fe fe-home nav-icon"></i> Subscriptions</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="student-billing-info.html"><i class="fe fe-book nav-icon"></i> Billing
                            Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://askbootstrap.com/preview/edutree/student-payment.html"><i
                                class="fe fe-pie-chart nav-icon"></i> Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://askbootstrap.com/preview/edutree/student-invoice.html"><i
                                class="fe fe-pie-chart nav-icon"></i> Invoice</a>
                    </li>
                    <li class="navbar-header mt-4 nav-item">
                        ACCOUNT SETTINGS
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://askbootstrap.com/preview/edutree/student-delete-profile.html"><i
                                class="fe fe-trash nav-icon"></i> Delete Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://askbootstrap.com/preview/edutree/student-edit-profile.html"><i
                                class="fe fe-settings nav-icon"></i> Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://askbootstrap.com/preview/edutree/student-linked-accounts.html"><i
                                class="fe fe-user nav-icon"></i> Linked Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://askbootstrap.com/preview/edutree/student-notifications.html"><i
                                class="fe fe-bell nav-icon"></i> Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://askbootstrap.com/preview/edutree/student-profile-privacy.html"><i
                                class="fe fe-lock nav-icon"></i> Profile Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://askbootstrap.com/preview/edutree/student-security.html"><i
                                class="fe fe-user nav-icon"></i> Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://askbootstrap.com/preview/edutree/student-social-profiles.html"><i
                                class="fe fe-share nav-icon"></i> Social Profiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://askbootstrap.com/preview/edutree/index.html"><i
                                class="fe fe-power nav-icon"></i>Sign Out</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="border-0 card">
            <div class="card-header">
                <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Billing Address</h3>
                    <p class="mb-0">
                        Changes to your billing infomration will take effect
                        starting with scheduled payment and will be refelected on
                        your next invoice.
                    </p>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-4 list-group list-group-flush">
                    <div class="px-0 pb-4 pt-0 mb-4 list-group-item">
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input name="address" type="radio" id="inline-radio-1" class="me-1 form-check-input"
                                        checked="" /><label for="inline-radio-1" class="form-check-label"><span
                                            class="h4">Billing Address #1</span><span class="d-block">1901 Thornridge
                                            Cir. Shiloh, Hawaii 81063</span></label>
                                </div>
                            </div>
                            <div class="col-auto col">
                                <a class="btn btn-outline-white btn-sm"
                                    href="https://askbootstrap.com/preview/edutree/student-edit-profile.html">Edit
                                    Address</a>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 pb-4 pt-0 mb-4 border-bottom list-group-item">
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input name="address" type="radio" id="inline-radio-2"
                                        class="me-1 form-check-input" /><label for="inline-radio-2"
                                        class="form-check-label"><span class="h4">Billing Address #2</span><span
                                            class="d-block">1901 Thornridge Cir. Shiloh, Hawaii 81063</span></label>
                                </div>
                            </div>
                            <div class="col-auto col">
                                <a class="btn btn-outline-white btn-sm"
                                    href="https://askbootstrap.com/preview/edutree/student-edit-profile.html">Edit
                                    Address</a>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 pb-4 pt-0 mb-4 list-group-item">
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input name="address" type="radio" id="inline-radio-3" class="me-1 form-check-input"
                                        checked="" /><label for="inline-radio-3" class="form-check-label"><span
                                            class="h4">Billing Address #3</span><span class="d-block">Thornridge Cir.
                                            Shiloh, Hawaii 4344543</span></label>
                                </div>
                            </div>
                            <div class="col-auto col">
                                <a class="btn btn-outline-white btn-sm"
                                    href="https://askbootstrap.com/preview/edutree/student-edit-profile.html">Edit
                                    Address</a>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 pb-4 pt-0 border-bottom list-group-item">
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input name="address" type="radio" id="inline-radio-4"
                                        class="me-1 form-check-input" /><label for="inline-radio-4"
                                        class="form-check-label"><span class="h4">Billing Address #4</span><span
                                            class="d-block">1901 Shiloh Cir. Shiloh, jawd 81063</span></label>
                                </div>
                            </div>
                            <div class="col-auto col">
                                <a class="btn btn-outline-white btn-sm"
                                    href="https://askbootstrap.com/preview/edutree/student-edit-profile.html">Edit
                                    Address</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary mb-5" href="https://askbootstrap.com/preview/edutree/student-edit-profile.html">
                    Add New Address
                </a>
                <p class="mb-0">
                    Your text location determines the taxes that are applied to
                    yout bill.
                </p>
                <a href="https://askbootstrap.com/preview/edutree/student-edit-profile.html">How do I correct my tax
                    location?</a>
            </div>
        </div>
    </div>
@endsection
