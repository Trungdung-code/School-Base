<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protectio
n, and more.
|
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AnswerController;
// use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileinsController;
use App\Http\Controllers\EarningsController;
use App\Http\Controllers\CoursesinsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PayoutsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\StudentsInsController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LinkedAccountsController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfilePrivacyController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\SubcriptionsController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TermAndConditionsController;
use App\Http\Controllers\PrivacypolicyController;
use App\Http\Controllers\Notfound404Controller;
use App\Http\Controllers\Student\Auth\FacebookController;
use App\Http\Controllers\Student\ReviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\ReviseController;
use App\Http\Controllers\SubjectController;
use App\Http\Middleware\Admin;

//use App\Http\Controllers\Admin\AnswerController;

require __DIR__ . '/auth.php';
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

// Route::group(['middleware' => ['web']], function () {
//     Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
//     Route::get('/callback/{provider}', 'SocialController@callback');
// });


Route::get('/upgrade-db/{id}', function ($id) {
    $contest = App\Models\Contest::findOrFail($id);
    $participants = $contest->participants;
    foreach ($participants as $participant) {
        $point = 0;
        $answerPoints = App\Models\Answer::where('user_id', $participant->user_id)->where('target_id', $contest->id)->where('target_type', 'contest')->get();
        foreach ($answerPoints as $answerPoint) {
            $point += $answerPoint->point;
        }
        if ($point != 0) {
            $participant->point = $point;
            $participant->save();
        }
    }
});


Route::get('/upgrade-bl/{id}', function ($id) {
    $results = App\Models\Answer::where('target_id', $id)->where('target_type', 'contest')->get();
    foreach ($results as $result) {
        if ($result->question->type == "Fill in the blank") {
            $ans = $result->question->answer;
            $st = strpos($ans, '[Key]');
            $keys = [];
            while ($st !== FALSE) {
                $en = strpos($ans, '[/Key]', $st);
                $k = substr($ans, $st + strlen('[Key]'), $en - $st - strlen('[Key]'));
                array_push($keys, trim($k));
                $st = strpos($ans, '[Key]', $en);
            }
            $point = 0;
            foreach ($result->answer as $index => $item) {
                if (strcasecmp(trim($item), $keys[$index]) == 0) {
                    $point += $result->question->point;
                }
            }
            $result->point = $point;
            $result->save();
        }
    }
    return "done";
});
Route::get('/facebook/auth', [FacebookController::class, 'loginUsingFacebook'])->name('facebooklogin');
Route::get('/facebook/callback', [FacebookController::class, 'callbackFromFacebook'])->name('callback');
Route::get('/google/auth', [FacebookController::class, 'loginUsingGoogle'])->name('googlelogin');
Route::get('/google/callback', [FacebookController::class, 'callbackFromGoogle']);
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'student'], function () {

    Route::post('/join-contest', [ContestController::class, 'join']);
    Route::post('/upload/speaking', [MediaController::class, 'store']);
    //    Route::auth();
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    //    Route::get('/', 'HomeController@index');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/successful', [CourseController::class, 'successful'])->name('successful');
    //review
    Route::get('/review', [ReviewController::class, 'index'])->name('review');

    //subject
    Route::get('/subject/{id}', [SubjectController::class, 'index'])->name('subject');

    // //revise
    // Route::get('/subject/{name}', [ReviseController::class, 'index'])->name('subject');

    //instructor
    Route::get('/profilee', [ProfileinsController::class, 'profileins'])->name('profile');
    Route::get('/earnings', [EarningsController::class, 'earnings'])->name('earnings');
    Route::get('/mycourses', [CoursesinsController::class, 'mycourses'])->name('mycourses');
    Route::get('/orders', [OrdersController::class, 'orders'])->name('orders');
    Route::get('/payouts', [PayoutsController::class, 'payouts'])->name('payouts');
    Route::get('/reviews', [ReviewsController::class, 'reviews'])->name('reviews');
    Route::get('/students', [StudentsInsController::class, 'students'])->name('students');

    //students
    Route::get('/student/billing-info', [BillingController::class, 'billinginfo'])->name('billing-info');
    Route::get('/delete/profile', [ProfileController::class, 'deleteProfile'])->name('delete-profile');
    Route::get('/student/edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile');
    Route::get('/student/invoice', [InvoiceController::class, 'invoice'])->name('invoice');
    Route::get('/student/linked-accounts', [LinkedAccountsController::class, 'linkedaccounts'])->name('linked-accounts');
    Route::get('/student/notifications', [NotificationsController::class, 'notifications'])->name('notifications');
    Route::get('/student/payment', [PaymentController::class, 'payment'])->name('payment');
    Route::get('/student/profile-privacy', [ProfilePrivacyController::class, 'profileprivacy'])->name('profile-privacy');
    Route::get('/student/security', [SecurityController::class, 'security'])->name('security');
    Route::get('/student/social-profiles', [ProfileController::class, 'socialProfiles'])->name('social-profiles');
    Route::get('/student/subscriptions', [SubcriptionsController::class, 'subscriptions'])->name('subscrip');

    Route::get('/FAQ', [FAQController::class, 'FAQ'])->name('FAQ');
    Route::get('/careers', [CareersController::class, 'careers'])->name('careers');
    Route::get('/testimonials', [TestimonialsController::class, 'testimonials'])->name('testimonials');
    Route::get('/term&conditions', [TermAndConditionsController::class, 'term'])->name('term&conditions');
    Route::get('/privacypolicy', [PrivacypolicyController::class, 'privacypolicy'])->name('privacypolicy');
    Route::get('/notfound404', [Notfound404Controller::class, 'notfound404'])->name('notfound404');


    Route::group(['prefix' => 'course'], function () {
        Route::get('/index/{type}/{id}',  [CourseController::class, 'index'])->name('course.index');
        Route::get('/quizzes',  [CourseController::class, 'show_quizzes']);
        Route::get('/{id}',  [CourseController::class, 'show'])->name('course.show');
    });
    //    Route::get('/reviewTest', 'ContestController@get_first_review')->name('contest.get_reviews');
    Route::get('/speaking', function () {
        return view('guests.speaking');
    });


    Route::get('/{courseId}/lesson/{lessonId}',  [LessonController::class, 'show'])->name('lesson.show');

    Route::get('/lesson/{id}/homework/',  [HomeworkController::class, 'show'])->name('lesson.homework.show');
    Route::get('/lesson/{lesson_id}/preview',  [LessonController::class, 'showPreview'])->name('lesson.showpreview');

    Route::post('/lesson/change',  [LessonController::class, 'change'])->name('lesson.change');
    //
    Route::get('/get_start_time',  [ContestController::class, 'get_start_time']);

    Route::get('/contests/index',  [ContestController::class, 'index'])->name('contest.index');
    Route::get('/contests/{contestID}', [ContestController::class, 'show'])->name('contest.show');
    Route::get('/check_email/{email}',  [HomeController::class, 'checkEmail']);

    //blog
    Route::get('/blogs',  [CourseController::class, 'index']);
    Route::get('/blogs/{title}',  [BlogController::class, 'show']);


    Route::get('/activities',  [ActivityController::class, 'index'])->name('activity.index');
    Route::get('/activities/{id}/{slug}',  [ActivityController::class, 'show'])->name('activity.show');

    //user routes
    Route::group(['middleware' => 'auth'], function () {

        Route::get('/{id}/course/quizzes', [CourseController::class, 'showQuizzes'])
            ->name('course.quizzes');
        Route::post('/post_comment', [CourseController::class, 'post_comment'])->name('post_comment');
        //Route::get('/lesson/{lessonID}', 'CourseController@show_lesson')->name('lesson.show');
        Route::post('/lessons/{id}/finishhomework', [LessonController::class, 'finishHomework']);
        Route::post('/cancel', [CourseController::class, 'cancel'])->name('cancel');
        Route::post('/purchase', [CourseController::class, 'purchase'])->name('purchase');
        Route::post('/cancel_contest', [ContestController::class, 'cancel'])->name('cancel.contest');
        Route::post('/purchase_contest', [ContestController::class, 'purchase'])->name('purchase.contest');
        // Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/my_courses', [CourseController::class, 'my_courses'])->name('my_courses');
        Route::get('/my_contests', [ContestController::class, 'myContests'])->name('myContests');


        Route::get('student/profile', [ProfileController::class, 'show'])->name('student.profile');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'show'])->name('student.profile.show');
        Route::post('/profile', [ProfileController::class, 'changePassword'])->name('student.profile.update');
        Route::post('/profile/avatar', [ProfileController::class, 'changeAvatar']);
        Route::get('/enroll', [EnrollController::class, 'index']);
        Route::post('/enroll/{classId}', [EnrollController::class, 'create']);
        Route::get('/class/{classId}', [ClassController::class, 'show']);
        Route::get('/class/{classId}/leaderboard', [ClassController::class, 'leaderBoard']);
        Route::get('/class/{classId}/homework/{blockId}', [HomeworkController::class, 'show']);
        Route::get('/class/{classId}/homework/next', [HomeworkController::class, 'nextHomework']);
        Route::post('/class/{classId}/homework/{targetType}/{targetId}', [HomeworkController::class, 'process']);
        Route::get('/class/{classId}/review/{blockId}', [HomeworkController::class, 'review']);
        //answer ajax
        Route::post('/answers/{cid}/{qid}', [AnswerController::class, 'store']);
        Route::get('/answers/{cid}/{qid}', [AnswerController::class, 'show']);

        Route::get('/answers_review/{cid}/{qid}', [AnswerController::class, 'showTrueAnswer']);
        Route::get('/answers_review_sort_word/{cid}/{qid}', [AnswerController::class, 'showTrueAnswerSortWord']);
        Route::get('/answers_review_edit/{cid}/{qid}', [AnswerController::class, 'showTrueAnswerEdit']);
        Route::get('/answers_review_enter_words/{cid}/{qid}', [AnswerController::class, 'showTrueAnswerEnterWords']);
        Route::get('/answers_review_sort_sentences/{cid}/{qid}', [AnswerController::class, 'showTrueAnswerSortSentences']);
        Route::get('/questions/{qid}', [AnswerController::class, 'showTrueAnswer']);
        Route::group(['prefix' => 'contests'], function () {

            //        Route::get('/{contestID}/quizzes', 'ContestController@show_quizzes')->name('contest.show_quizzes');
            //        Route::get('/{contestID}/quizzes', 'ContestController@get_first_content')->name('contest.get_first_content');
            Route::get('/{contestID}/quizzes', [ContestController::class, 'get_contents'])->name('contest.get_contents');
            Route::get('/show-answers/{id}', [ContestController::class, 'showAnswersContest'])->name('contest.show.answers');
            Route::post('/result-exam-test/{id}', [ContestController::class, 'resultExamEnglish'])->name('contest.resultExamEnglish');
            Route::post('exam-english-pdf', [ContestController::class, 'examEnglishPDF'])->name('examEnglishPDF');
            Route::get('/{contestID}/reviews/{index}', [ContestController::class, 'get_reviews'])->name('contest.get_reviews');
            Route::get('/answers-review/{id}', [ContestController::class, 'getReviewAnwers'])->name('contest.getReviewAnwers');
            //        Route::get('/{contestID}/quizzes', 'ContestController@show')->name('contest.show');
        });
    });
});
