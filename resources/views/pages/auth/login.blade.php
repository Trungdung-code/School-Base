@extends('pages.layout.app')
@section('content')
    <section class="my-4">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <div class="h5 text-muted text-uppercase">Log in to <span class="text-primary">Edutree</span></div>
                    <div class="fw-bold display-5 py-2 text-black mb-2">Connect with the best professionals</div>
                    <p class="lead text-dark-50 mb-0">Learn from expert professionals and<br> join
                        the largest online community for creatives.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="text-center rounded-3 bg-white shadow-sm p-5">
                        <form action="{{ route('login') }}" class="d-grid gap-3 mb-2">
                            <div class="social-btn border rounded-3">
                                <a href="signin.html#" class="text-dark w-100">
                                    <div class="d-flex align-items-center py-3 px-3 border-bottom">
                                        <img src="img/google-icon.png" class="img-fluid" alt="Edutree">
                                        <p class="mb-0 mx-auto">Login with Google</p>
                                    </div>
                                </a>
                                <a href="signin.html#" class="text-dark w-100">
                                    <div class="d-flex align-items-center py-3 px-3">
                                        <img src="img/fb-icon.png" class="img-fluid me-2" alt="Edutree">
                                        <p class="mb-0 mx-auto">Login with Facebook</p>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between divide my-2">
                                <hr class="w-100">
                                <span class="text-muted small px-2">OR</span>
                                <hr class="w-100">
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Email">
                            <input type="text" class="form-control" placeholder="Enter Password">
                            <div class="d-flex justify-content-between">
                                <div class="mb-0 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label small text-muted" for="exampleCheck1">Remember
                                        me</label>
                                </div>
                                <div>
                                    <a href="https://askbootstrap.com/preview/edutree/forgot.html"
                                        class="text-mdinfo small">Forgot password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </form>
                        <p class="text-muted mt-3 mb-0">Don’t have an account? <a
                                href="https://askbootstrap.com/preview/edutree/signup.html" class="text-mdinfo">Sign
                                Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
