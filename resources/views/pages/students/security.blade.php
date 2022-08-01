@extends('pages.students.layout.app')
@section('content')
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="border-0 card">
            <div class="card-header">
                <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Security</h3>
                    <p class="mb-0">
                        Edit your account settings and change your password here.
                    </p>
                </div>
            </div>
            <div class="card-body">
                <h4 class="mb-0">Email Address</h4>
                <p>
                    Your current email address is
                    <span class="text-success"><a href="https://askbootstrap.com/cdn-cgi/l/email-protection"
                            class="__cf_email__"
                            data-cfemail="2a53455f584f474b4346434e6a4d474b434604494547">[email&#160;protected]</a></span>
                </p>
                <form>
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-md-12 col-sm-12">
                            <div>
                                <label class="form-label" for="email">New email address</label><input required=""
                                    type="email" id="email" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 btn btn-primary">
                                Update Details
                            </button>
                        </div>
                    </div>
                </form>
                <hr class="my-5" />
                <div>
                    <h4 class="mb-0">Change Password</h4>
                    <p>
                        We will email you a confirmation when changing your
                        password, so please expect that email after submitting.
                    </p>
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="currentpassword">Current Password</label><input
                                        required="" type="password" id="currentpassword" class="form-control"
                                        value="" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="newpassword">New Password</label><input required=""
                                        type="password" id="newpassword" class="form-control" value="" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="confirmpassword">Confirm New Password</label><input
                                        required="" type="password" id="confirmpassword" class="form-control"
                                        value="" />
                                </div>
                                <button type="submit" class="btn btn-primary btn btn-primary">
                                    Save Password
                                </button>
                                <div class="col-6"></div>
                            </div>
                            <div class="mt-4 col-lg-12 col-md-12 col-sm-12">
                                <p class="mb-0">
                                    Can't remember your current password?
                                    <a href="student-security.html#">Reset your password via email</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
