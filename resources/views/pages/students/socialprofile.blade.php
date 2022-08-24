@extends('pages.students.layout.app')
@section('content')
@include('pages.students.layout.nav')
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="border-0 card">
            <div class="card-header">
                <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Social Profiles</h3>
                    <p class="mb-0">
                        Add your social profile links in below social accounts.
                    </p>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-5 row">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <h5>Twitter</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <input placeholder="Twitter Profile Name" type="text"
                                class="form-control mb-1 form-control" />
                            <small class="text-muted form-text">Add your Twitter username (e.g. johnsmith).</small>
                        </div>
                    </div>
                    <div class="mb-5 row">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <h5>Facebook</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <input placeholder="Facebook Profile Name" type="text"
                                class="form-control mb-1 form-control" />
                            <small class="text-muted form-text">Add your Facebook username (e.g. johnsmith).</small>
                        </div>
                    </div>
                    <div class="mb-5 row">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <h5>Instagram</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <input placeholder="Instagram Profile Name" type="text"
                                class="form-control mb-1 form-control" />
                            <small class="text-muted form-text">Add your Instagram username (e.g. johnsmith).</small>
                        </div>
                    </div>
                    <div class="mb-5 row">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <h5>LinkedIn Profile URL</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <input placeholder="LinkedIn Profile URL " type="text"
                                class="form-control mb-1 form-control" />
                            <small class="text-muted form-text">Add your linkedin profile URL. (
                                https://www.linkedin.com/in/johnsmith)</small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <h5>YouTube</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <input placeholder="YouTube URL" type="text" class="form-control mb-1 form-control" />
                            <small class="text-muted form-text">Add your Youtube profile URL.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 offset-lg-3">
                            <button type="submit" class="btn btn-primary">
                                Save Social Profile
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
