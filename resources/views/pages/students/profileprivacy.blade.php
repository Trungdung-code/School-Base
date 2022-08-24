@extends('pages.students.layout.app')
@section('content')
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="border-0 card">
                        <div class="card-header">
                            <div class="mb-3 mb-lg-0">
                                <h3 class="mb-0">Profile Privacy Settings</h3>
                                <p class="mb-0">
                                    Making your profile public allow other users to see what you
                                    have been learning on Edutree.
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-lg-flex justify-content-between row">
                                <div class="mb-3 mb-lg-0 col-lg-9 col-md-7 col-sm-12">
                                    <h4 class="mb-0">Privacy levels</h4>
                                    <p class="mb-0">Show your profile public and private.</p>
                                </div>
                                <div class="col-lg-3 col-md-5 col-sm-12">
                                    <select name="" class="form-select">
                                        <option value="public">Public</option>
                                        <option value="private">Private</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="my-5" />
                            <div>
                                <h4 class="mb-0">Profile settings</h4>
                                <p class="mb-5">
                                    These controls give you the ability to customize what areas
                                    of your profile others are able to see.
                                </p>
                                <div class="list-group list-group-flush">
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>Show your profile on search engines</div>
                                        <div>
                                            <form>
                                                <div class="form-switch">
                                                    <input name="radios" type="checkbox" class="form-check-input"
                                                        checked="" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>Show courses you're taking on your profile page</div>
                                        <div>
                                            <form>
                                                <div class="form-switch form-check">
                                                    <input name="radios" type="checkbox" class="form-check-input" /><label
                                                        title="" class="form-check-label"></label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>Show your profile on public</div>
                                        <div>
                                            <form>
                                                <div class="form-switch form-check">
                                                    <input name="radios" type="checkbox" class="form-check-input"
                                                        checked="" /><label title=""
                                                        class="form-check-label"></label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>Currently learning</div>
                                        <div>
                                            <form>
                                                <div class="form-switch form-check">
                                                    <input name="radios" type="checkbox" class="form-check-input"
                                                        checked="" /><label title=""
                                                        class="form-check-label"></label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>Completed courses</div>
                                        <div>
                                            <form>
                                                <div class="form-switch form-check">
                                                    <input name="radios" type="checkbox" class="form-check-input"
                                                        checked="" /><label title=""
                                                        class="form-check-label"></label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>Your Interests</div>
                                        <div>
                                            <form>
                                                <div class="form-switch form-check">
                                                    <input name="radios" type="checkbox" class="form-check-input"
                                                        checked="" /><label title=""
                                                        class="form-check-label"></label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
