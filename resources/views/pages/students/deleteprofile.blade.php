@extends('pages.students.layout.app')
@section('content')
@include('pages.students.layout.nav')
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="border-0 card">
            <div class="card-header">
                <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Delete your account</h3>
                    <p class="mb-0">Delete or Close your account permanently.</p>
                </div>
            </div>
            <div class="card-body">
                <span class="text-danger h4">Warning</span>
                <p>
                    If you close your account, you will be unsubscribed from all
                    your 0 courses, and will lose access forever.
                </p>
                <a class="btn btn-outline-danger btn-sm" href="https://askbootstrap.com/preview/edutree/index.html">Close My
                    Account</a>
            </div>
        </div>
    </div>
@endsection
