@extends('pages.students.layout.app')
@section('content')
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="border-0 card">
                        <div class="d-flex justify-content-between align-items-center card-header">
                            <div>
                                <h3 class="mb-0">Notifications</h3>
                                <p class="mb-0">
                                    You will get only notification what have enabled.
                                </p>
                            </div>
                            <div>
                                <form>
                                    <div class="form-switch">
                                        <input type="checkbox" class="form-check-input" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-5">
                                <h4 class="mb-0">Security Alerts</h4>
                                <p>
                                    You will get only those email notification what you want.
                                </p>
                                <div class="list-group list-group-flush">
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>Email me whenever encounter unusual activity</div>
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
                                        <div>Email me if new browser is used to sign in</div>
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
                            <div class="mb-5">
                                <h4 class="mb-0">News</h4>
                                <p>
                                    You will get only those email notification what you want.
                                </p>
                                <div class="list-group list-group-flush">
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>Notify me by email about sales and latest news</div>
                                        <div>
                                            <form>
                                                <div class="form-switch">
                                                    <input name="radios" type="checkbox" class="form-check-input" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>Email me about new features and updates</div>
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
                                        <div>Email me about tips on using account</div>
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
                            <div>
                                <h4 class="mb-0">Courses</h4>
                                <p>
                                    You will get only those email notification what you want.
                                </p>
                                <div class="list-group list-group-flush">
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>
                                            <h5 class="mb-0">Updates from Classes You're Taking</h5>
                                            <span class="text-body">Announcements, events, and tips and tricks.</span>
                                        </div>
                                        <div>
                                            <form>
                                                <div class="form-switch">
                                                    <input name="radios" type="checkbox" class="form-check-input" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-between px-0 py-2 list-group-item">
                                        <div>
                                            <h5 class="mb-0">Updates from Teacher Discussions</h5>
                                            <span class="text-body">Public Discussions outside of a class that teachers
                                                share to all of their followers.</span>
                                        </div>
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
                                        <div>
                                            <h5 class="mb-0">Personalized Class Recommendations</h5>
                                            <span class="text-body">Weekly recommendations tailored to your
                                                interests.</span>
                                        </div>
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
                                        <div>
                                            <h5 class="mb-0">Featured content</h5>
                                            <p class="mb-0 text-body">
                                                Tips on Courses and dashboard usage, workshop, books,
                                                tutorials and many insightful articles.
                                            </p>
                                        </div>
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
                                        <div>
                                            <h5 class="mb-0">Product updates</h5>
                                            <p class="mb-0 text-body">
                                                We'll send you a newsletter announcing essential
                                                product updates in CoursesUI.
                                            </p>
                                        </div>
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
                                        <div>
                                            <h5 class="mb-0">Events and offers</h5>
                                            <p class="mb-0 text-body">
                                                Announcing promos and upcoming events,such as Ask Me
                                                Anything sessions and webinars.
                                            </p>
                                        </div>
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
                                <a class="text-danger mb-2 d-block" href="student-notifications.html#"><u>Unsubscribe from
                                        all of the above</u></a>
                                <p class="mb-0">
                                    Please note: you'll still receive important administrative
                                    emails,such as password resets.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
