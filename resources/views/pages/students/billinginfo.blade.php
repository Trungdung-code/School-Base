@extends('pages.students.layout.app')
@section('content')
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                @include('pages.students.layout.nav')

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
                                                <input name="address" type="radio" id="inline-radio-1"
                                                    class="me-1 form-check-input" checked="" /><label
                                                    for="inline-radio-1" class="form-check-label"><span
                                                        class="h4">Billing Address #1</span><span class="d-block">1901
                                                        Thornridge
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
                                                    class="form-check-label"><span class="h4">Billing Address
                                                        #2</span><span class="d-block">1901 Thornridge Cir. Shiloh, Hawaii
                                                        81063</span></label>
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
                                                <input name="address" type="radio" id="inline-radio-3"
                                                    class="me-1 form-check-input" checked="" /><label
                                                    for="inline-radio-3" class="form-check-label"><span
                                                        class="h4">Billing Address #3</span><span
                                                        class="d-block">Thornridge Cir.
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
                                                    class="form-check-label"><span class="h4">Billing Address
                                                        #4</span><span class="d-block">1901 Shiloh Cir. Shiloh, jawd
                                                        81063</span></label>
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
                            <a class="btn btn-primary mb-5"
                                href="https://askbootstrap.com/preview/edutree/student-edit-profile.html">
                                Add New Address
                            </a>
                            <p class="mb-0">
                                Your text location determines the taxes that are applied to
                                yout bill.
                            </p>
                            <a href="https://askbootstrap.com/preview/edutree/student-edit-profile.html">How do I correct
                                my tax
                                location?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
