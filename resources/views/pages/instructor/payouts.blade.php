@extends('pages.instructor.layout.app')
@section('content')
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="border-0 card">
            <div class="card-header">
                <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Payout Method</h3>
                    <p class="mb-0">Order Dashboard is a quick overview of all current orders.</p>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="mb-3 mb-lg-0 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="text-center pt-2">
                            <i
                                class="fe fe-dollar-sign display-1 bg-success text-white py-1 px-3 d-inline-block rounded-circle mb-4"></i>
                            <h4 class="mb-1">Your Earning this month</h4>
                            <h5 class="mb-0 display-4 fw-bold">$3,210</h5>
                            <p class="px-4">Update your payout method in settings</p>
                            <a class="btn btn-primary" href="instructor-payouts.html">Withdraw Earning</a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                        <div class="border p-4 rounded-3 mb-3">
                            <div class="form-check">
                                <input name="customRadio" type="radio" id="default-radio1" class="form-check-input">
                                <label class="form-check-label"><img src="img/paypal.svg" alt=""></label>
                            </div>
                            <p>Your paypal account has been authorized for payouts.</p>
                            <a class="btn btn-outline-primary btn-sm" href="instructor-payouts.html">Remove
                                Account</a>
                        </div>
                        <div class="border p-4 rounded-3 mb-3">
                            <div class="form-check">
                                <input name="customRadio" type="radio" id="default-radio2" class="form-check-input">
                                <label class="form-check-label"><img src="img/payonner.svg" alt=""></label>
                            </div>
                        </div>
                        <div class="border p-4 rounded-3">
                            <div class="form-check"><input name="customRadio" type="radio" id="default-radio3"
                                    class="form-check-input"><label class="form-check-label">Bank Transfer</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-0 mt-4 card">
            <div class="card-header">
                <h3 class="mb-0 h4">Withdraw History</h3>
            </div>
            <div class="card-body">
                <div class="align-items-center row">
                    <div class="pe-md-0 mb-2 mb-lg-0 col-lg-3 col-md-6">
                        <select name="" class="form-select">
                            <option value="" class="text-muted" selected="">Select Option</option>
                            <option value="30 days">30 days</option>
                            <option value="2 Months">2 Months</option>
                            <option value="6 Months">6 Months</option>
                        </select>
                    </div>
                    <div class="pe-md-0 mb-2 mb-2 mb-lg-0 col-lg-3 col-md-6">
                        <select name="" class="form-select">
                            <option value="" class="text-muted" selected="">Months</option>
                            <option value="Oct 2022">Oct 2022</option>
                            <option value="Jan 2021">Jan 2021</option>
                            <option value="May 2021">May 2021</option>
                        </select>
                    </div>
                    <div class="mb-2 mb-2 mb-lg-0 col-lg-4 col-md-6">
                        <select name="" class="form-select">
                            <option value="" class="text-muted" selected="">Transaction Type</option>
                            <option value="Cash Transactions">Cash Transactions</option>
                            <option value="Non Cash Transactions">Non Cash Transactions</option>
                            <option value="Credit Transactions">Credit Transactions</option>
                        </select>
                    </div>
                    <div class="text-lg-end col-lg-2 col-md-6"><a role="button" tabindex="0"
                            href="instructor-payouts.html#" download="pdf" class="btn-outline-white btn btn-link"><i
                                class="fe fe-download"></i></a></div>
                </div>
            </div>
            <div class="p-0 pb-4 card-body">
                <div class="table-responsive ">
                    <table role="table" class="text-nowrap table">
                        <thead class="table-light">
                            <tr role="row">
                                <th colspan="1" role="columnheader">ID</th>
                                <th colspan="1" role="columnheader">METHOD</th>
                                <th colspan="1" role="columnheader">STATUS</th>
                                <th colspan="1" role="columnheader">AMOUNT</th>
                                <th colspan="1" role="columnheader">DATE</th>
                                <th colspan="1" role="columnheader"></th>
                            </tr>
                        </thead>
                        <tbody role="rowgroup">
                            <tr role="row">
                                <td role="cell">#1060</td>
                                <td role="cell">Amex</td>
                                <td role="cell"><span class="badge bg-warning ">Pending</span></td>
                                <td role="cell">$1,200</td>
                                <td role="cell">June 9, 2022</td>
                                <td role="cell">
                                    <div class="dropdown">
                                        <a href="instructor-payouts.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-secondary">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row">
                                <td role="cell">#1038</td>
                                <td role="cell">Mastercard</td>
                                <td role="cell"><span class="badge bg-success ">Paid</span></td>
                                <td role="cell">$2,000</td>
                                <td role="cell">June 9, 2022</td>
                                <td role="cell">
                                    <div class="dropdown">
                                        <a href="instructor-payouts.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-secondary">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row">
                                <td role="cell">#1016</td>
                                <td role="cell">PayPal</td>
                                <td role="cell"><span class="badge bg-success ">Paid</span></td>
                                <td role="cell">$3,590</td>
                                <td role="cell">June 8, 2022</td>
                                <td role="cell">
                                    <div class="dropdown">
                                        <a href="instructor-payouts.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-secondary">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row">
                                <td role="cell">#1008</td>
                                <td role="cell">Visa</td>
                                <td role="cell"><span class="badge bg-success ">Paid</span></td>
                                <td role="cell">$4,500</td>
                                <td role="cell">June 9, 2022</td>
                                <td role="cell">
                                    <div class="dropdown">
                                        <a href="instructor-payouts.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-secondary">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row">
                                <td role="cell">#1002</td>
                                <td role="cell">Mastercard</td>
                                <td role="cell"><span class="badge bg-success ">Paid</span></td>
                                <td role="cell">$1,232</td>
                                <td role="cell">June 7, 2022</td>
                                <td role="cell">
                                    <div class="dropdown">
                                        <a href="instructor-payouts.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-secondary">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row">
                                <td role="cell">#982</td>
                                <td role="cell">PayPal</td>
                                <td role="cell"><span class="badge bg-danger ">Cancel</span></td>
                                <td role="cell">$4,500</td>
                                <td role="cell">June 8, 2022</td>
                                <td role="cell">
                                    <div class="dropdown">
                                        <a href="instructor-payouts.html#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-secondary">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="pb-5">
                            <nav>
                                <ul class="justify-content-center mb-0 pagination">
                                    <li class="page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary"><i
                                                class="fe fe-chevron-left"></i></button></li>
                                    <li class="page-item active page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary">1</button></li>
                                    <li class="page-item  page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary">2</button></li>
                                    <li class="page-item  page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary">3</button></li>
                                    <li class="page-item"><button type="button"
                                            class="page-link mx-1 rounded btn btn-primary"><i
                                                class="fe fe-chevron-right"></i></button></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
