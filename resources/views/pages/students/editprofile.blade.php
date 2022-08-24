@extends('pages.students.layout.app')
<div class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="border-0 card">
                    <div class="card-header">
                        <div class="mb-3 mb-lg-0">
                            <h3 class="mb-0">Profile Details</h3>
                            <p class="mb-0">
                                You have full control to manage your own account setting.
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center mb-4 mb-lg-0">
                                <img src="img/users/user7.jpg" id="img-uploaded" alt=""
                                    class="avatar-xl rounded-circle" />
                                <div class="ms-3">
                                    <h4 class="mb-0">Your avatar</h4>
                                    <p class="mb-0">
                                        PNG or JPG no bigger than 800px wide and tall.
                                    </p>
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-outline-white btn-sm">
                                    Update
                                </button>
                                <button type="button" class="btn btn-outline-danger btn-sm">
                                    Delete
                                </button>
                            </div>
                        </div>
                        <hr class="my-5" />
                        <div>
                            <h4 class="mb-0">Personal Details</h4>
                            <p class="mb-4">
                                Edit your personal information and address.
                            </p>
                            <form>
                                <div class="row">
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="formFirstName">First Name</label><input
                                                placeholder="First Name" required="" type="text"
                                                id="formFirstName" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="formLastName">Last Name</label><input
                                                placeholder="Last Name" required="" type="text" id="formLastName"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="formPhone">Phone</label><input
                                                placeholder="Phone" required="" type="text" id="formPhone"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="formBirthday">Birthday</label><input
                                                class="form-control flatpickr-input" placeholder="Date of Birth"
                                                value="" type="text" readonly="readonly" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="formBirthday">Address Line 1</label><input
                                                placeholder="Address Line 1" required="" type="text"
                                                id="formBirthday" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="formBirthday">Address Line 2</label><input
                                                placeholder="Address Line 2" required="" type="text"
                                                id="formBirthday" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="formState">State</label>
                                            <select name="" class="form-select" id="formState">
                                                <option value="1">Gujarat</option>
                                                <option value="2">Rajasthan</option>
                                                <option value="3">Maharashtra</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="formState">Country</label>
                                            <select name="" class="form-select" id="formState">
                                                <option value="1">India</option>
                                                <option value="2">UK</option>
                                                <option value="3">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">
                                            Update Profile
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
