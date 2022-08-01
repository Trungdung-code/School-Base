@extends('pages.layout.app')
@section('content')
    <div class="py-2">
        <div class="container p-5 mb-lg-5 text-center">
            <img src="img/done.svg" class="img-fluid w-50" alt="Edutree">
            <h1 class="text-black display-3 fw-bold">Osahan, Your courses<br> has been successful</h1>
            <p class="lead mb-5">Check your courses status in <a class="text-primary"
                    href="https://askbootstrap.com/preview/edutree/instructor-my-courses.html">My Courses</a><br> about
                next steps information.</p>
            <a href="{{ route('mycourses') }}" class="btn btn-primary"><i class="bi bi-gift me-2"></i> Start Learning</a>
        </div>
    </div>
@endsection
