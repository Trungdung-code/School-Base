<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    const ROLE_ADMIN = "admin";
    const ROLE_STUDENT = "student";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'gender', 'birthday', 'address', 'social_links', 'phone', 'provider', 'provider_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return avatar belong to the User
     */
    public function avatar()
    {
        return $this->morphOne(Resource::class, 'resourceable');
    }

    public function waiting_courses()
    {
        return $this->belongsToMany('App\Models\Course', 'user_courses', 'user_id', 'course_id')
            ->wherePivot('status', 1);
    }

    public function learning_courses()
    {
        return $this->belongsToMany('App\Models\Course', 'user_courses', 'user_id', 'course_id')
            ->wherePivot('status', 2);
    }

    public function isRole($role)
    {
        return $this->role === $role;
    }

    public function myClasses()
    {
        return $this->belongsToMany('App\Models\MyClass', 'user_classes');
    }

    public function myCourses()
    {
        return $this->belongsToMany('App\Models\Course', 'user_courses')
                ->withPivot('status');
    }

    public function pendingClasses()
    {
        return $this->myClasses()->wherePivot('state', UserClass::STATUS_PENDING);
    }

    public function upcommingClasses()
    {
        $allClass = $this->myClasses()->wherePivot('state', UserClass::STATUS_JOINED);
        return $allClass->where('start_time', '>', Carbon::now());
    }

    public function inprocessClasses()
    {
        $allClass = $this->myClasses()->wherePivot('state', UserClass::STATUS_JOINED);
        return $allClass->where('start_time', '<', Carbon::now());
    }

    public function isClassAvailable($class_id)
    {
        if ($this->myClasses()->find($class_id) == null) {
            return true;
        }
        return false;
    }

    public function lessons()
    {
        return $this->belongsToMany('App\Models\Lesson', 'user_lessons')->withPivot('attempt', 'score','block_number', 'status', 'homework_status');
    }

    /**
     * this funtion check if a lesson's homework is available to do for student or not
     * Only call on view generate function
     * @param $lesson_id
     * @return bool
     */
    public function isHomeworkAvailable($lesson_id, $class_id)
    {
        //if class is over due, homework is not available
        $les = Lesson::find($lesson_id);
        if ($les->isOverdue($class_id)) {
            return false;
        }
        //if lesson's submit time is over Max, it is not available any more
        $lesson = $this->lessons()->find($lesson_id);
        if ($lesson == null) {
            //not done any homework yet
            return true;
        } else if ($lesson->pivot->attempt <= UserLesson::MAX_ATTEMPT) {
            return true;
        }
        return false;


    }


    /**
     * check if teacher's review is available for student or not
     * @param $lesson_id
     * @return bool
     */
    public function isReviewAvailable($myClass_id, $lesson_id)
    {
        $lesson = $this->lessons()->find($lesson_id);
        if ($lesson == null) {
            //not done any homework yet
            return false;
        } else if ($lesson->isOpened($myClass_id)) {
            if ($lesson->pivot->status == UserLesson::STATUS_REVIEWED) {
                return true;
            }
            return false;
        }
    }

    public function homeworkPoint($lesson_id)
    {
        $lesson = $this->lessons()->find($lesson_id);
        if ($lesson == null)
            return 0;
        $hbs = $lesson->questionBlocks;
        $point = 0;
        foreach ($hbs as $hb) {
            foreach ($hb->questions as $question) {
                $ques =  $this->questions()->find($question->id);
                if($ques != null){
                    $point += $ques->pivot->point;
                }
            }
        }
        return $point;
    }
    public function pointInClass($classId)
    {
        //return 0;
        $myClass = MyClass::findOrFail($classId);
        $curr = $myClass->curriculum;
        $sections = $curr->sections;
        $point = 0;
        foreach ($sections as $section)
        {
            foreach ($section->lessons as $lesson)
            {
                $point += $this->homeworkPoint($lesson->id);
            }
        }
        return $point;
    }

    /*
     * question section
     */
    public function questions()
    {
        return $this->belongsToMany('App\Models\Question', 'user_questions')->withPivot('point', 'answer', 'review', 'review_status');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }

    public function scopeStudent($query)
    {
        return $query->where('role', 'student');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course', 'user_courses', 'user_id', 'course_id');
    }

    public function getAnswerOfQuestion($cid, $qid)
    {
        $answer = Answer::where('user_id', $this->id)->where('question_id', $qid)->where('contest_id', $cid)->first();
        if($answer != null) {
            return $answer->answer;
        }else{
            return null;
        }
    }

    public function contests()
    {
        return $this->belongsToMany('App\Contest', 'user_contests', 'user_id', 'contest_id')->withPivot('status');
    }

    public function pointOfCourse($id)
    {
        $answers = $this->answers->where('course_id', $id);
        $point = 0;
        foreach($answers as $answer){
            $point += $answer->point;
        }
        return $point;
    }
    public function pointOfContest($id)
    {
        $answers = $this->answers()->where('target_type', 'contest')->where('target_id', $id)->get();
        $point = 0;
        foreach($answers as $answer){
            $point += $answer->point;
        }
        return $point;
    }

    public function contestsResult(){
        return $this->hasMany(ContestResult::class);
    }
}
