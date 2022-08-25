<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-0 main-header-nav" id="nav-bar">
    <div class="container">
        <a href="{{ route('dashboard') }}" class="brand d-flex align-items-center mb-0 text-decoration-none me-4 fw-bold h4 text-white">
            <img src="/img/logo.png" alt="" class="img-fluid d-inline-block align-text-center me-2 rounded-pill border shadow" alt="Edutree" />
            Edutree
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto gap-2 mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4 active" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item mx-2 dropdown">
                    <a class="nav-link px-0 py-4 {{--nav-link dropdown-toggle px-0 py-4--}}" href="{{ route('review') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Revise
                    </a>
                    {{-- <ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
                        <li><a class="dropdown-item px-3 py-2 rounded" href="#">All Course</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="detail-course">Courses Detail</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('successful') }}">Order Successful</a></li>
                    </ul> --}}
                </li>
                <li class="nav-item mx-2 dropdown">
                    <a class="nav-link dropdown-toggle px-0 py-4" href="index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Instructor
                    </a>
                    <ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('profile') }}">Profile</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('earnings') }}">Earnings</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('mycourses') }}">My Courses</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('orders') }}">Orders</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('payouts') }}">Payouts</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('reviews') }}">Reviews</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('students') }}">Students</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-2 dropdown">
                    <a class="nav-link dropdown-toggle px-0 py-4" href="index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Student
                    </a>
                    <ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('billing-info') }}">Billing Info</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('delete-profile') }}">Delete Profile</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('edit-profile') }}">Edit Profile</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('invoice') }}">Invoice</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('linked-accounts') }}">Linked Accounts</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('notifications') }}">Notifications</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('payment') }}">Payment</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('profile-privacy') }}">Profile Privacy</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('security') }}">Security</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('social-profiles') }}">Social Profiles</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('subscrip') }}">Subscriptions</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-2 dropdown">
                    <a class="nav-link dropdown-toggle px-0 py-4" href="index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Extra Pages
                    </a>
                    <ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('FAQ') }}">FAQ</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('careers') }}">Careers</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('testimonials') }}">Testimonials</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('term&conditions') }}">Terms & Conditions</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
                        <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('notfound404') }}">Not Found 404</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('contact') }}">Contact</a>
                </li>

            </ul>


            <div class="d-flex gap-1 align-items-center main-header-nav-right">
                <ul class="navbar-nav mx-auto gap-2 mb-2 mb-lg-0">
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle px-0 py-4" href="index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('security') }}">Profile</a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('student.logout') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                {{-- <a href="{{ route('student.logout') }}" class="nav-link dropdown-toggle px-0 py-4">Log Out</a> --}}
            </div>
        </div>
    </div>
</nav>
