@extends('pages.students.layout.app')
@section('content')
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="border-0 card">
                        <div class="card-header">
                            <div class="mb-3 mb-lg-0">
                                <h3 class="mb-0">Invoices</h3>
                                <p class="mb-0">You can find all of your order Invoices.</p>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="table-invoice table-responsive border-0">
                                <table class="table mb-0 text-nowrap table">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="border-bottom-0">ORDER ID</th>
                                            <th scope="col" class="border-bottom-0">DATE</th>
                                            <th scope="col" class="border-bottom-0">AMOUNT</th>
                                            <th scope="col" class="border-bottom-0">STATUS</th>
                                            <th scope="col" class="border-bottom-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a
                                                    href="https://askbootstrap.com/preview/edutree/student-invoice-details.html">#1008</a>
                                            </td>
                                            <td>17 April 2022, 10:45pm</td>
                                            <td>39</td>
                                            <td><span class="badge bg-danger">Due</span></td>
                                            <td>
                                                <a target="_blank" class="fe fe-download" download="pdf"
                                                    href="https://askbootstrap.com/preview/edutree/img/invoiceFile.pdf"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a
                                                    href="https://askbootstrap.com/preview/edutree/student-invoice-details.html">#1007</a>
                                            </td>
                                            <td>17 April 2022, 10:45pm</td>
                                            <td>39</td>
                                            <td><span class="badge bg-success">Complete</span></td>
                                            <td>
                                                <a target="_blank" class="fe fe-download" download="pdf"
                                                    href="https://askbootstrap.com/preview/edutree/img/invoiceFile.pdf"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a
                                                    href="https://askbootstrap.com/preview/edutree/student-invoice-details.html">#1006</a>
                                            </td>
                                            <td>17 Feb 2022, 10:45pm</td>
                                            <td>39</td>
                                            <td><span class="badge bg-success">Complete</span></td>
                                            <td>
                                                <a target="_blank" class="fe fe-download" download="pdf"
                                                    href="https://askbootstrap.com/preview/edutree/img/invoiceFile.pdf"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a
                                                    href="https://askbootstrap.com/preview/edutree/student-invoice-details.html">#1005</a>
                                            </td>
                                            <td>17 Jan 2022, 10:45pm</td>
                                            <td>39</td>
                                            <td><span class="badge bg-success">Complete</span></td>
                                            <td>
                                                <a target="_blank" class="fe fe-download" download="pdf"
                                                    href="https://askbootstrap.com/preview/edutree/img/invoiceFile.pdf"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a
                                                    href="https://askbootstrap.com/preview/edutree/student-invoice-details.html">#1004</a>
                                            </td>
                                            <td>17 Dec 2019, 10:45pm</td>
                                            <td>39</td>
                                            <td><span class="badge bg-success">Complete</span></td>
                                            <td>
                                                <a target="_blank" class="fe fe-download" download="pdf"
                                                    href="https://askbootstrap.com/preview/edutree/img/invoiceFile.pdf"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a
                                                    href="https://askbootstrap.com/preview/edutree/student-invoice-details.html">#1003</a>
                                            </td>
                                            <td>17 Nov 2019, 10:45pm</td>
                                            <td>39</td>
                                            <td><span class="badge bg-success">Complete</span></td>
                                            <td>
                                                <a target="_blank" class="fe fe-download" download="pdf"
                                                    href="https://askbootstrap.com/preview/edutree/img/invoiceFile.pdf"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a
                                                    href="https://askbootstrap.com/preview/edutree/student-invoice-details.html">#1002</a>
                                            </td>
                                            <td>17 Oct 2019, 10:45pm</td>
                                            <td>39</td>
                                            <td><span class="badge bg-success">Complete</span></td>
                                            <td>
                                                <a target="_blank" class="fe fe-download" download="pdf"
                                                    href="https://askbootstrap.com/preview/edutree/img/invoiceFile.pdf"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a
                                                    href="https://askbootstrap.com/preview/edutree/student-invoice-details.html">#1001</a>
                                            </td>
                                            <td>17 Sept 2019, 10:45pm</td>
                                            <td>39</td>
                                            <td><span class="badge bg-success">Complete</span></td>
                                            <td>
                                                <a target="_blank" class="fe fe-download" download="pdf"
                                                    href="https://askbootstrap.com/preview/edutree/img/invoiceFile.pdf"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
