@extends('pages.layout.app')
@section('content')
    <div class="py-2">
        <div class="container p-5 mb-lg-3 text-center">
            <img src="img/404.svg" class="img-fluid w-50" alt="Edutree" />
            <h1 class="text-black fw-bold mt-5">Ooops, Page not found</h1>
            <p class="fs-6 mb-5">
                Oops! Looks like you followed a bad link.<br />
                If you think this is a problem with us, please tell us.
            </p>
            <a href="{{ route('home') }}" class="btn btn-danger">
                <i class="bi bi-house me-2"></i> Go Back
            </a>
        </div>
    </div>
@endsection
