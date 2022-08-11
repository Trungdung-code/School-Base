<?php

use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CategoryGroupController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CourseIntroController;
use App\Http\Controllers\Admin\CurriculumController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GroupsController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\QuestionBlockController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;

    //Route::resource('courses', 'CoursesController');
    //navigate view
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::post('/editor/image/upload', [DashboardController::class, 'uploadImage'])->name('admin.editor.upload_image');

    Route::get('/classes/{classId}', [DashboardController::class, 'pendingwork']);
    Route::get('/classes/{classId}/reviewwriting/{reviewId}', [DashboardController::class, 'reviewWriting']);
    Route::post('/classes/{classId}/reviewwriting/{reviewId}', [DashboardController::class, 'storeReviewWriting']);
    Route::get('/classes/{classId}/reviewspeaking/{reviewId}', [DashboardController::class, 'reviewSpeaking']);
    Route::post('/classes/{classId}/reviewspeaking/{reviewId}', [DashboardController::class, 'storeReviewSpeaking']);


    Route::get('/coursename', [DashboardController::class, 'coursename']);
    Route::get('/courseintro', [DashboardController::class, 'courseintro']);
    Route::get('/curricula', [DashboardController::class, 'curricula']);
    Route::get('/coursecontent', [DashboardController::class, 'coursecontent']);
    Route::get('/classes', [DashboardController::class, 'classes']);


    //Category Group route
    Route::post('/groups', [GroupsController::class, 'store'])->name('admin.groups.store');
    Route::patch('/groups/{id}/edit', [GroupsController::class, 'update'])->name('admin.groups.update');
    Route::delete('/groups/{id}', [GroupsController::class, 'destroy'])->name('admin.groups.delete');
    //Category Routes
    Route::post('/categories', [CategoriesController::class, 'store'])->name('admin.cates.store');
    Route::patch('/categories/{id}', [CategoriesController::class, 'update'])->name('admin.cates.update');
    Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('admin.cates.delete');
    //course intro Routes
    //fetch menu ajax request
    Route::get('/courseintro/groups/{id}', [CourseIntroController::class, 'fetchGroups']);
    Route::get('/courseintro/categories/{id}', [CourseIntroController::class, 'fetchCates']);
    Route::get('/courseintro/courses', [CourseIntroController::class, 'fetchCourses'])->name('admin.courseintro.course');
    Route::get('/courseintro1/', function () {
        return view('teacher.courseintro1');
    });
    //save courses info
    //course description
    Route::post('/courseintro/courses/{id}/description', [CourseIntroController::class, 'storeCourseIntro'])->name('admin.courseintro.courseIntro');
    Route::post('/courseintro/{curriculum_id}/section/', [CourseIntroController::class, 'storeSection'])->name('admin.courseintro.storeSection');
    Route::post('/courseintro/{section_id}/lesson/', [CourseIntroController::class, 'storeLesson'])->name('admin.courseintro.storeLesson');
    Route::delete('/courseintro/section/{section_id}', [CourseIntroController::class, 'destroySection'])->name('admin.courseintro.destroySection');
    Route::patch('/courseintro/section/{section_id}', [CourseIntroController::class, 'updateSection'])->name('admin.courseintro.updateSection');
    Route::delete('/courseintro/lesson/{lesson_id}', [CourseIntroController::class, 'destroyLesson'])->name('admin.courseintro.destroyLesson');
    Route::patch('/courseintro/lesson/{lesson_id}', [CourseIntroController::class, 'updateLesson'])->name('admin.courseintro.updateLesson');
    Route::post('/lesson/update_category', [CourseIntroController::class, 'updateCategory'])->name('admin.lesson.update_category');
    // curriculum
    Route::post('/curriculum', [CurriculumController::class, 'store']);
    Route::get('/curriculum/{id}', [CurriculumController::class, 'show']);
    Route::get('/curriculum/{id}/edit', [CurriculumController::class, 'edit']);
    Route::get('/curriculum/{id}/edit/{lesson_id}', [CurriculumController::class, 'editLesson']);
    Route::post('/curriculum/{id}/duplicate', [CurriculumController::class, 'duplicate']);
    Route::delete('/curriculum/{id}', [CurriculumController::class, 'delete']);
    Route::post('/curriculum/{id}', [CurriculumController::class, 'update']);
    //----- content
    Route::get('/curriculum/{id}/content/', [CurriculumController::class, 'showDetail']);
    //classes
    Route::post('/classes/', [ClassController::class, 'store']);
    Route::get('/classes/{id}/wait', [ClassController::class, 'waitList']);
    Route::post('/classes/{class_id}/accept/{student_id}', [ClassController::class, 'accept']);
    Route::post('/classes/{class_id}/reject/{student_id}', [ClassController::class, 'reject']);
    //lesson
    Route::post('/lessons/{lid}', [LessonController::class, 'addMaterial']);
    Route::delete('/lessons/materials/{mid}', [LessonController::class, 'deleteMaterial']);
    //question block
    /*            Route::post('/questionblocks/{lessonId}', 'QuestionBlockController@store');*/
    Route::delete('questionblocks/{id}', [QuestionBlockController::class, 'delete']);
    Route::post('/questionblocks/{id}/addmaterial', [QuestionBlockController::class, 'addMaterial']);
    Route::post('/questionblocks/{id}/save_content', [QuestionBlockController::class, 'saveContent'])
        ->name('admin.question_block.save_content');
    Route::post('/questionblocks/save', [QuestionBlockController::class, 'save'])
        ->name('admin.question_block.save');

    //question
    Route::post('/questions/{id}', [QuestionController::class, 'store']);
    Route::delete('/questions/{id}', [QuestionController::class, 'delete']);
    Route::patch('/questions/{id}', [QuestionController::class, 'update']);
    Route::post('/questions/{id}/import', [QuestionController::class, 'import']);


    //test
    Route::get('/test', function () {
        return view('teacher.test');
    });

    //contests
    Route::get('/contests/{contestId}/leaderboard', [TestController::class, 'leaderBoard'])->name('admin.contest.leaderboard');
    Route::get('/contests', [TestController::class, 'index'])->name('admin.contest.index');
    Route::get('/contest/new', [TestController::class, 'newContest'])->name('admin.contest.new');
    Route::get('/contests/show/{id}', [TestController::class, 'show'])->name('admin.contest.show');
    Route::get('/contests/edit/{id}', [TestController::class, 'edit'])->name('admin.contest.edit');
    Route::post('/contests/{contest_id}/question_block/delete', [TestController::class, 'deleteQuestionBlock'])
        ->name('admin.contest.qb.delete');
    Route::post('/contests/{id}/update', [TestController::class, 'update'])->name('admin.contest.update');
    Route::post('/contests/{id}/qb/add', [TestController::class, 'addQuestionBlock'])->name('admin.contest.qb.add');
    Route::post('/contests/save', [TestController::class, 'save'])->name('admin.contest.save');
    Route::post('contest/{contest_id}/change_cover_image', [TestController::class, 'changeCoverImage'])->name('admin.contest.change_cover_image');
    Route::get('contest/{contest_id}/publish', [TestController::class, 'publish'])->name('admin.contest.publish');
    Route::get('contest/{contest_id}/hide', [TestController::class, 'hide'])->name('admin.contest.hide');
    Route::get('contest/{contest_id}/unhide', [TestController::class, 'unhide'])->name('admin.contest.unhide');
    Route::get('contest/{id}/students', [TestController::class, 'students'])->name('admin.contest.students');
    Route::post('contest/{contest_id}/student/approve', [TestController::class, 'approveStudent'])->name('admin.contest.approve_student');
    Route::post('contest/{contest_id}/student/unapproved', [TestController::class, 'unapprovedStudent'])->name('admin.contest.unapproved_student');

    //courses
    Route::get('/course/new', [CourseController::class, 'newCourse'])->name('admin.course.new');
    Route::get('/course/{course_id}/new_sections', [CourseController::class, 'new_sections'])->name('admin.course.new_sections');
    Route::get('/course', [CourseController::class, 'courses']);
    Route::get('/course/{course_id}', [CourseController::class, 'show_course'])->name('admin.course.show');
    Route::get('/courses', [CourseController::class, 'index']);
    Route::post('/course/create', [CourseController::class, 'create'])->name('admin.course.create');
    Route::post('/course/update/{course_id}', [CourseController::class, 'update'])->name('admin.course.update');
    Route::get('/course/{id}', [CourseController::class, 'show']);
    Route::post('course/publish/{id}', [CourseController::class, 'publish']);
    Route::get('course/{id}/students', [CourseController::class, 'students'])->name('admin.course.students');
    Route::post('course/{course_id}/student/approve', [CourseController::class, 'approveStudent'])->name('admin.course.approve_student');
    Route::post('course/{contest_id}/student/unapproved', [CourseController::class, 'unapprovedStudent'])->name('admin.course.unapproved_student');
    Route::delete('course/lesson/{lesson_id}/update', [LessonController::class, 'deleteLesson'])->name('admin.course.lesson.delete');
    Route::post('course/lesson/{lesson_id}/update', [LessonController::class, 'updateLessonInfo'])->name('admin.course.lesson.update_info');
    Route::get('course/edit_info/{course_id}', [CourseController::class, 'editInfo'])->name('admin.course.edit_info');
    Route::post('course/{course_id}/change_cover_image', [CourseController::class, 'changeCoverImage'])->name('admin.course.change_cover_image');
    Route::post('course/select_category', [CourseController::class, 'selectCategory'])->name('admin.course.select_category');
    Route::post('course/edit_name', [CategoriesController::class, 'editCategoryName'])->name('admin.category.edit_name');
    Route::post('course/{id}/qb/delete', [CourseController::class, 'deleteQuestionBlock'])->name('admin.course.qb.delete');
    Route::post('course/{id}/qb/add', [CourseController::class, 'addQuestionBlock'])->name('admin.course.qb.add');
    Route::post('course/search', [CourseController::class, 'search'])->name('admin.course.search');
    Route::delete('/course/{id}', [CourseController::class, 'delete']);
    Route::get('/course/{id}/pendingwork', [CourseController::class, 'showPendingWork'])->name('admin.course.pendingwork');
    Route::get('/answers/{id}/review', [AnswerController::class, 'showFeedbackForm'])->name('admin.answers.showFeedbackForm');
    Route::post('/answers/{id}/review', [AnswerController::class, 'saveFeedback'])->name('admin.answers.saveFeedback');
    Route::get('/course/{id}/leaderboard', [CourseController::class, 'showLeaderBoard'])->name('admin.course.leaderboard');


    //category group
    Route::get('course/category_group/index', [CategoryGroupController::class, 'index'])->name('admin.category_group.index');

    //quizzes
    Route::get('/quizzes', [QuestionBlockController::class, 'index']);
    Route::get('/quiz/add_qb', [QuestionBlockController::class, 'add_qb'])->name('admin.quiz.add_qb');
    Route::get('/question_block/{id}', [QuestionBlockController::class, 'show'])->name('admin.question_block.show');

    //students
    Route::get('/students', [StudentController::class, 'index'])->name('admin.student.index');
    Route::post('/students/updatepassword', [StudentController::class, 'resetPassword'])->name('admin.student.updatepass');
    Route::post('students/delete/{student_id}', [StudentController::class, 'deleteStudent'])->name('admin.student.delete');
    Route::get('/students/show/{student_id}', [StudentController::class, 'showStudent'])->name('admin.student.show');
    Route::delete('/students/{id}', [StudentController::class, 'delete']);

    //sections
    Route::post('/sections/', [SectionController::class, 'storeSection']);
    Route::delete('/sections/{section_id}', [SectionController::class, 'destroySection']);
    Route::patch('/sections/{section_id}', [SectionController::class, 'updateSection']);

    //lesson
    Route::post('/courseintro/{section_id}/lesson/', [CourseIntroController::class, 'storeLesson'])->name('admin.courseintro.storeLesson');
    Route::delete('/courseintro/lesson/{lesson_id}', [CourseIntroController::class, 'destroyLesson'])->name('admin.courseintro.destroyLesson');
    Route::patch('/courseintro/lesson/{lesson_id}', [CourseIntroController::class, 'updateLesson'])->name('admin.courseintro.updateLesson');
    Route::get('/lessons/{lesson_id}/', [LessonController::class, 'showContent']);
    Route::get('/lessons/{lesson_id}/edit', [LessonController::class, 'editContent']);
    Route::post('/lessons/{lesson_id}/content', [LessonController::class, 'updateContent']);
    Route::get('/lessons/{lesson_id}/quiz', [LessonController::class, 'showQuizs']);
    Route::post('/lessons/{lesson_id}/quiz', [LessonController::class, 'saveQuiz']);

    Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/blogs/new', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::get('/blogs/{id}/show', [BlogController::class, 'show'])->name('admin.blog.show');
    Route::post('/blogs/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::post('/blogs/{id}/update', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::post('/blogs/delete', [BlogController::class, 'delete'])->name('admin.blog.delete');


    Route::get('/events', [ActivityController::class, 'index'])->name('admin.activity.index');
    Route::get('/events/new', [ActivityController::class, 'create'])->name('admin.activity.create');
    Route::get('/events/{id}/edit', [ActivityController::class, 'edit'])->name('admin.activity.edit');
    Route::get('/events/{id}/show', [ActivityController::class, 'show'])->name('admin.activity.show');
    Route::post('/events/store', [ActivityController::class, 'store'])->name('admin.activity.store');
    Route::post('/events/{id}/update', [ActivityController::class, 'update'])->name('admin.activity.update');
    Route::post('/events/delete', [ActivityController::class, 'delete'])->name('admin.activity.delete');

    Route::get('/tags', [TagController::class, 'index'])->name('admin.tag.index');
    Route::post('/tags', [TagController::class, 'create'])->name('admin.tag.create');

    Route::get('/account', [UserController::class, 'index'])->name('account.index');
    Route::get('/security', [UserController::class, 'security'])->name('account.security');
    Route::post('/update-password', [UserController::class, 'updatepassword'])->name('update.password');
