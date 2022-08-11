@extends('pages.layout.app')
@section('content')
    <section class="my-4">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <div class="h5 text-muted text-uppercase">
                        Forgot <span class="text-primary">Password</span>
                    </div>
                    <div class="fw-bold display-5 py-2 text-black mb-2">
                        Connect with the best professionals
                    </div>
                    <p class="lead text-dark-50 mb-0">
                        Learn from expert professionals and<br />
                        join the largest online community for creatives.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="rounded-3 bg-white shadow-sm p-5 text-center">
                        <h3 class="fw-bold text-black mb-3">Forgot password</h3>
                        <p class="text-muted fw-light mb-4">
                            Enter the email address you see<br />
                            on Edutree. We'll send you a link to reset your password
                        </p>
                        <form action="https://askbootstrap.com/preview/edutree/signin.html" class="d-grid gap-3 mb-2">
                            <input type="text" class="form-control" placeholder="Enter Email" />
                            <button type="submit" class="btn btn-primary">
                                RESET PASSWORD
                            </button>
                        </form>
                        <p class="text-muted mt-3 mb-0">
                            Go back to
                            <a href="https://askbootstrap.com/preview/edutree/signin.html" class="text-mdinfo">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
