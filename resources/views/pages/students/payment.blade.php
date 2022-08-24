@extends('pages.students.layout.app')
@section('content')
@include('pages.students.layout.nav')
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="border-0 mb-4 card">
            <div class="d-lg-flex justify-content-between align-items-center card-header">
                <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Current Plan</h3>
                    <span>Below your current active plan information.</span>
                </div>
                <div>
                    <a class="btn btn-outline-primary btn-sm" href="student-payment.html#">Switch to Annual Billing</a>
                </div>
            </div>
            <div class="card-body">
                <h2 class="fw-bold mb-0">$39/Monthly</h2>
                <p class="mb-0">
                    Your next monthly charge of
                    <span class="text-success">$39</span> will be applied to your
                    primary payment method on
                    <span class="text-success">July 20, 2022.</span>
                </p>
            </div>
        </div>
        <div class="border-0 card">
            <div class="card-header">
                <h3 class="mb-0">Payment Methods</h3>
                <span>Primary payment method is used by default</span>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="px-0 pb-3 pt-0 list-group-item">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="img/visa.svg" alt="" class="me-3" />
                                <div>
                                    <h5 class="mb-0">Visa ending in 1234</h5>
                                    <p class="mb-0 fs-6">Expires in 10/2021</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span><span class="me-4 badge bg-success">Primary</span></span>
                                <div class="dropdown">
                                    <a href="student-payment.html#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="text-secondary">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown-header" role="heading">
                                            SETTINGS
                                        </div>
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item"
                                            role="button" tabindex="0" href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="dropdown-item-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" role="button" tabindex="0" href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="dropdown-item-icon">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            Delete
                                        </a>
                                        <a class="dropdown-item" role="button" tabindex="0" href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="dropdown-item-icon">
                                                <rect x="1" y="4" width="22" height="16"
                                                    rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10">
                                                </line>
                                            </svg>
                                            Make it Primary
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-3 list-group-item">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="img/mastercard.svg" alt="" class="me-3" />
                                <div>
                                    <h5 class="mb-0">Mastercard ending in 1234</h5>
                                    <p class="mb-0 fs-6">Expires in 03/2022</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="dropdown">
                                    <a href="student-payment.html#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="text-secondary">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown-header" role="heading">
                                            SETTINGS
                                        </div>
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item"
                                            role="button" tabindex="0" href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" role="button" tabindex="0"
                                            href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            Delete
                                        </a>
                                        <a class="dropdown-item" role="button" tabindex="0"
                                            href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <rect x="1" y="4" width="22" height="16"
                                                    rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10">
                                                </line>
                                            </svg>
                                            Make it Primary
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-3 list-group-item">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="img/discover.svg" alt="" class="me-3" />
                                <div>
                                    <h5 class="mb-0">Discover ending in 1234</h5>
                                    <p class="mb-0 fs-6">Expires in 07/2021</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="dropdown">
                                    <a href="student-payment.html#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="text-secondary">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown-header" role="heading">
                                            SETTINGS
                                        </div>
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item"
                                            role="button" tabindex="0" href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" role="button" tabindex="0"
                                            href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            Delete
                                        </a>
                                        <a class="dropdown-item" role="button" tabindex="0"
                                            href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <rect x="1" y="4" width="22" height="16"
                                                    rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10">
                                                </line>
                                            </svg>
                                            Make it Primary
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-3 list-group-item">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="img/amarican&#32;express.svg" alt="" class="me-3" />
                                <div>
                                    <h5 class="mb-0">American Express ending in 1234</h5>
                                    <p class="mb-0 fs-6">Expires in 12/2021</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="dropdown">
                                    <a href="student-payment.html#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="text-secondary">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown-header" role="heading">
                                            SETTINGS
                                        </div>
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item"
                                            role="button" tabindex="0" href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" role="button" tabindex="0"
                                            href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            Delete
                                        </a>
                                        <a class="dropdown-item" role="button" tabindex="0"
                                            href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <rect x="1" y="4" width="22" height="16"
                                                    rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10">
                                                </line>
                                            </svg>
                                            Make it Primary
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 py-3 border-bottom list-group-item">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="img/paypal&#32;card.svg" alt="" class="me-3" />
                                <div>
                                    <h5 class="mb-0">Paypal Express ending in 1234</h5>
                                    <p class="mb-0 fs-6">Expires in 10/2021</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="dropdown">
                                    <a href="student-payment.html#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="text-secondary">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown-header" role="heading">
                                            SETTINGS
                                        </div>
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item"
                                            role="button" tabindex="0" href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" role="button" tabindex="0"
                                            href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            Delete
                                        </a>
                                        <a class="dropdown-item" role="button" tabindex="0"
                                            href="student-payment.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="dropdown-item-icon">
                                                <rect x="1" y="4" width="22" height="16"
                                                    rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10">
                                                </line>
                                            </svg>
                                            Make it Primary
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="mt-3 btn btn-primary">
                    Add Payment Method
                </button>
            </div>
        </div>
    </div>
@endsection
