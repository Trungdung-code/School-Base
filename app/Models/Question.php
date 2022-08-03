<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\QueueServiceProvider;
use PhpParser\Node\Stmt\Case_;

class Question extends Model
{
    const TYPE_1 = "Choose one answer";
    const TYPE_2 = "Choose multiple answer";
    const TYPE_3 = "Short answer";
    const TYPE_4 = "Reorder words";
    const TYPE_5 = "Reorder sentences";
    const TYPE_6 = "Matching";
    const TYPE_7 = "Write a paragraph";
    const TYPE_8 = "Fill in the blank";
    const TYPE_9 = "Correct the sentence";
    const TYPE_10 = "Choose the right answers";
    const TYPE_11 = "Find a word in a paragraph";
    const TYPE_12 = "Insert a sentence";
    const TYPE_13 = "Speaking";
    protected $fillable = [
        'question_block_id',
        'type',
        'question',
        'answer',
        'true_answer',
        'hint',
        'point'
    ];

    public function answers()
    {
        return json_decode($this->answer);
    }

    public function questionBlock()
    {

        return $this->belongsTo(QuestionBlock::class, 'id', 'question_block_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_questions')->withPivot('point', 'answer', 'review', 'review_status');
    }

    public function calculatePoint($targetType, $targetId, $user_id = null)
    {
        $userAnswer = $this->userAnswer($targetType, $targetId);
        if ($userAnswer != null) {
            return $userAnswer->point;
        }
        return 0; //not answer yet

    }

    public function parse($key, $holder, $targetType, $targetId)
    {
        $start = '[' . $key . ']';
        $end = '[/' . $key . ']';
        $le = strlen($end);
        $string = $this->answer;
        $ini = strpos($string, $start);
        if ($ini === FALSE)
            return $string;
        $display = substr($string, 0, $ini);
        //return $display;
        $userAnswer = $this->userAnswer($targetType, $targetId);
        if ($userAnswer != null) {
            $idx = 0;
            $uas = json_decode($userAnswer->answer);

            while ($ini > 0) {
                $endidx = strpos($string, $end, $ini) + $le;
                $display = $display . '<input name="answer[]" type="text" value="' . $uas[$idx] . '">';
                $ini = strpos($string, $start, $endidx);
                if ($ini === FALSE) {
                    $display = $display . substr($string, $endidx, strlen($string) - $endidx);
                    return $display;
                } else {
                    $display = $display . substr($string, $endidx, $ini - $endidx);
                    //return $display;
                }
                $idx++;
            }
        } else {

            while ($ini > 0) {
                $endidx = strpos($string, $end, $ini) + $le;
                $display = $display . '<input name="answer[]" type="text">';
                $ini = strpos($string, $start, $endidx);
                if ($ini === FALSE) {
                    $display = $display . substr($string, $endidx, strlen($string) - $endidx);
                    return $display;
                } else {
                    $display = $display . substr($string, $endidx, $ini - $endidx);
                    //return $display;
                }
            }
        }
        return $display;
    }

    /**
     * make question content for insert question type by replacing place holder by input tag
     * @return question content
     */
    public
    function insertSen($targetType, $targetId)
    {
        $key = 'Placeholder';
        $start = '[' . $key . ']';
        $end = '[/' . $key . ']';
        $le = strlen($end);
        $string = $this->answer;
        $ini = strpos($string, $start);
        if ($ini === FALSE)
            return $string;
        $display = substr($string, 0, $ini);

        $userAnswer = $this->userAnswer($targetType, $targetId);
        //return $display;
        if ($userAnswer == null) {
            $index = 1;
            while ($ini >= 0) {
                $endidx = strpos($string, $end, $ini) + $le;
                $display = $display . '<span id="cis" data-place="' . $index . '"></span>';
                $ini = strpos($string, $start, $endidx);
                if ($ini === FALSE) {
                    $display = $display . substr($string, $endidx, strlen($string) - $endidx);
                    return $display;
                } else {
                    $display = $display . substr($string, $endidx, $ini - $endidx);
                    //return $display;
                }
                $index++;
            }
        } else {
            $index = 1;
            while ($ini >= 0) {
                $endidx = strpos($string, $end, $ini) + $le;
                if ($index == $userAnswer)

                    $display = $display . '<span class="cist">' . $this->takeStatement() . '</span><span id="cis" data-place="' . $index . '" style="display: none;"></span>';
                else
                    $display = $display . '<span id="cis" data-place="' . $index . '"></span>';
                $ini = strpos($string, $start, $endidx);
                if ($ini === FALSE) {
                    $display = $display . substr($string, $endidx, strlen($string) - $endidx);
                    return $display;
                } else {
                    $display = $display . substr($string, $endidx, $ini - $endidx);
                    //return $display;
                }
                $index++;
            }
        }

        return $display;
    }

    public
    function multipleChoice($targetType, $targetId)
    {
        $answer = $this->answer;
        $start = '[Answer]';
        $end = '[/Answer]';
        $skey = '[Key]';
        $ekey = '[/Key]';
        $answer = str_replace($skey, '/', $answer);
        $answer = str_replace($ekey, '/', $answer);


        $sindex = strpos($answer, $start);
        $eindex = strpos($answer, $end);

        $allKey = substr($answer, $sindex + strlen($start), $eindex - $sindex - strlen($start));
        $keys = explode('/', $allKey);
        //before keys
        $result = substr($answer, 0, $sindex);
        //add keys
        $result = $result . '<span class="c1a">';

        $userAnswer = $this->userAnswer($targetType, $targetId);
        if ($userAnswer == null) {

            foreach ($keys as $index => $key) {
                $key = trim($key);
                if (strlen($key) > 0) {
                    $result = $result . '<input type="radio" name="answer" id="ctra' . $this->id . '-' . $index . '" value="' . $key . '"><label for="ctra' . $this->id . '-' . $index . '">' . $key . '</label>';
                }
            }
        } else {
            foreach ($keys as $index => $key) {
                $key = trim($key);
                if (strlen($key) > 0) {
                    if ($userAnswer == $key) {
                        $result = $result . '<input type="radio" checked="checked" name="answer" id="ctra' . $this->id . '-' . $index . '" value="' . $key . '"><label for="ctra' . $this->id . '-' . $index . '">' . $key . '</label>';
                    } else {
                        $result = $result . '<input type="radio" name="answer" id="ctra' . $this->id . '-' . $index . '" value="' . $key . '"><label for="ctra' . $this->id . '-' . $index . '">' . $key . '</label>';
                    }
                }
            }
        }
        $result = $result . '</span>';
        //after keys
        $result = $result . substr($answer, $eindex + strlen($end), strlen($answer) - $eindex - strlen($end));
        return $result;
    }

    public
    function keys()
    {
        $ans = $this->answer;
        $st = strpos($ans, '[Key]');
        $keys = [];
        while ($st !== FALSE) {
            $en = strpos($ans, '[/Key]', $st);
            $k = substr($ans, $st + strlen('[Key]'), $en - $st - strlen('[Key]'));
            array_push($keys, $k);
            $st = strpos($ans, '[Key]', $en);
        }
        return $keys;
    }

    public
    function stripKeys()
    {
        $ans = $this->answer;
        $ans = str_replace('[Key]', '', $ans);
        $ans = str_replace('[/Key]', '', $ans);
        return $ans;
    }

    public
    function stripKey($targetType, $targetId)
    {
        $ans = $this->answer;
        $ans = str_replace('[Key]', '', $ans);
        $ans = str_replace('[/Key]', '', $ans);
        $userAnswer = $this->userAnswer($targetType, $targetId);
        if ($userAnswer != null) {
            $uas = json_decode($userAnswer);
            foreach ($uas as $ua) {
                $ans = preg_replace('/\b' . $ua . '\b/', '<span id="k">' . $ua . '</span>', $ans);
            }
        }
        return $ans;
    }


    public
    function takeStatement()
    {
        $ans = $this->answer;
        $st = strpos($ans, '[Placeholder]');
        while ($st !== FALSE) {
            $en = strpos($ans, '[/Placeholder]', $st);
            $k = substr($ans, $st + strlen('[Placeholder]'), $en - $st - strlen('[Placeholder]'));
            if (strlen($k) > 0) return $k;
            $st = strpos($ans, '[Placeholder]', $en);
        }
        return "ops, there are some error!";
    }

    public
    function check($targetType, $targetId)
    {
//        $userId = Auth::user()->id;
//
//        if ($this->users->contains($userId)) {
//
//            $userdata = $this->users()->find($userId)->pivot->answer;
//        } else {
//            $userdata = null;
//        }
        $userdata = Auth::user()->answers->where('question_id', $this->id)->where('target_type', $targetType)->where('target_id', $targetId)->first();
        switch ($this->type) {
            case Question::TYPE_1:
                return $this->chooeseOneCheck($userdata);
                break;
            case Question::TYPE_2:
                return $this->multyCheck($userdata);
                break;
            case Question::TYPE_3:
                return $this->shortCheck($userdata);
                break;
            case Question::TYPE_4:
                return $this->reorderWord($userdata);
                break;
            case Question::TYPE_5:
                return $this->reorderSen($userdata);
                break;
            case Question::TYPE_6:
                return $this->matchingCheck($userdata);
                break;
            case Question::TYPE_7:
                return $userdata;
                break;
            case Question::TYPE_8:
                return $this->blankCheck($userdata);
                break;
            case Question::TYPE_9:
                return $this->correctSentence($userdata);
                break;
            case Question::TYPE_10:
                return $this->chooserightCheck($userdata, $targetId, $targetType);
                break;
            case Question::TYPE_11:
                return $this->findWord($userdata);
                break;
            case Question::TYPE_12:
                return $this->insertSentenceCheck($userdata);
                break;
            case Question::TYPE_13:
                break;
        }
    }

    /**
     * @param $userdata
     * @return mixed
     */
    public
    function chooeseOneCheck($userdata)
    {
        $answers = json_decode($this->answer);
        $pivot = array_fill(0, count($answers), 0);
        $cr = intval($this->true_answer);
        if ($userdata == null) {
            $pivot[$cr - 1] = 1; //true
            return $pivot;
        }
        $ua = intval($userdata->answer);
        $pivot[$ua - 1] = 2; //wrong
        $pivot[$cr - 1] = 1; //overwrite
        return $pivot;
    }

    public
    function multyCheck($userdata)
    {
        $answers = json_decode($this->answer);

        $pivot = array_fill(0, count($answers), 0);

        $trueanss = json_decode($this->true_answer);


        if ($userdata == null) {
            foreach ($trueanss as $trueans)
                $pivot[intval($trueans) - 1] = 1; //true
            return $pivot;
        }
        $uas = json_decode($userdata->answer);
        foreach ($uas as $ua)
            $pivot[intval($ua) - 1] = 2; //wrong
        foreach ($trueanss as $trueans)
            $pivot[intval($trueans) - 1] = 1; //true
        return $pivot;

    }

    public
    function shortCheck($userdata)
    {
        if ($userdata == null)
            return TRUE;
        if (strcasecmp($userdata, $this->true_answer) == 0) {
            return TRUE;
        }
        return $userdata;

    }

    public
    function reorderWord($userdata)
    {
        if ($userdata == null)
            return TRUE;
        if (strcasecmp($userdata, $this->true_answer) == 0) {
            return TRUE;
        }
        return $userdata;

    }

    public
    function reorderSen($userdata)
    {
        if ($userdata == null)
            return TRUE;
        if (strcasecmp($userdata, $this->true_answer) == 0) {
            return TRUE;
        }
        return $userdata;

    }

    public
    function matchingCheck($userdata)
    {
        $questions = json_decode($this->answer);
        $trueanss = json_decode($this->true_answer);
        $pivot = array_fill(0, count($questions), 1);
        if ($userdata == null) {
            return TRUE;
        }
        $uas = json_decode($userdata->answer);
        for ($i = 0; $i < sizeof($questions); $i++) {
            if ($uas[$i] != $trueanss[$i]) {
                $pivot[$i] = 2;
            }
        }
        return ["idx" => $pivot, "val" => $uas];
    }

    public
    function blankCheck($userdata)
    {
        //
        $ans = $this->answer;
        $st = strpos($ans, '[Key]');
        $keys = [];
        while ($st !== FALSE) {
            $en = strpos($ans, '[/Key]', $st);
            $k = substr($ans, $st + strlen('[Key]'), $en - $st - strlen('[Key]'));
            array_push($keys, $k);
            $st = strpos($ans, '[Key]', $en);
        }
        if ($userdata == null) {
            $answers = array_fill(0, count($keys), "...");
        } else {
            $answers = json_decode($userdata->answer);
        }

        $pivot = array_fill(0, count($answers), 0);
        foreach ($answers as $index => $item) {
            if (strcasecmp(trim($item), trim($keys[$index])) == 0) {
                $pivot[$index] = 1;
            }
        }
        $start = '[Key]';
        $end = '[/Key]';
        $le = strlen($end);
        $string = $this->answer;
        $ini = strpos($string, $start);
        if ($ini === FALSE)
            return $string;
        $display = substr($string, 0, $ini);
        //return $display;
        $current = 0;
        while ($ini > 0) {
            $endidx = strpos($string, $end, $ini) + $le;
            if ($pivot[$current] == 1) {
                $display = $display . '<span id="k">' . $answers[$current] . '</span>';
            } else
                $display = $display . '<span id="uc">' . $answers[$current] . '</span> <span id="k2">' . $keys[$current] . '</span>';
            $current++;

            $ini = strpos($string, $start, $endidx);
            if ($ini === FALSE) {
                $display = $display . substr($string, $endidx, strlen($string) - $endidx);
                return $display;
            } else {
                $display = $display . substr($string, $endidx, $ini - $endidx);
                //return $display;
            }
        }
        return $display;
    }

    public
    function correctSentence($userdata)
    {
        if ($userdata == null)
            return TRUE;
        if (strcasecmp($userdata, $this->true_answer) == 0) {
            return TRUE;
        }
        return $userdata;
    }

    public
    function chooserightCheck($userdata, $targetId, $targetType)
    {
        if ($userdata == null)
            return $this->multipleChoice($targetId, $targetType);
        $ans = $this->answer;
        $st = strpos($ans, '[Key]') + strlen('[Key]');
        $en = strpos($ans, '[/Key]');
        $trueKey = substr($ans, $st, $en - $st);

        $answer = $this->answer;
        $start = '[Answer]';
        $end = '[/Answer]';
        $skey = '[Key]';
        $ekey = '[/Key]';
        $answer = str_replace($skey, '/', $answer);
        $answer = str_replace($ekey, '/', $answer);


        $sindex = strpos($answer, $start);
        $eindex = strpos($answer, $end);

        $allKey = substr($answer, $sindex + strlen($start), $eindex - $sindex - strlen($start));
        $keys = explode('/', $allKey);
        //before keys
        $result = substr($answer, 0, $sindex);
        //add keys
        $result = $result . '<span class="c1a">';
        foreach ($keys as $index => $key) {
            $key = trim($key);
            if (strlen($key) > 0) {
                $tmp = '<input type="radio" name="ctra" id="ctra1"><label for="ctra1">' . $key . '</label>';
                if (strcasecmp($userdata, $key) == 0) {
                    $tmp = '<input type="radio" name="ctra" id="ctra1"><label for="ctra1" id="uc">' . $key . '</label>';
                }
                if (strcasecmp($trueKey, $key) == 0) {
                    $tmp = '<input type="radio" name="ctra" id="ctra1"><label for="ctra1" id="k">' . $key . '</label>';
                }
                $result = $result . $tmp;
            }
        }
        $result = $result . '</span>';
        //after keys
        $result = $result . substr($answer, $eindex + strlen($end), strlen($answer) - $eindex - strlen($end));
        return $result;
    }

    public
    function findWord($userdata)
    {

        $keys = $this->keys();
        $result = $this->stripKeys();
        $userdata = json_decode($userdata);
        if ($userdata != null) {
            foreach ($userdata as $item) {
                if (array_search($item, $keys) === FALSE) {
                    $result = preg_replace('/\b' . $item . '\b/', '<span id="uc">' . $item . '</span>', $result);
                }
            }
        }
        foreach ($keys as $key) {
            $result = preg_replace('/\b' . $key . '\b/', '<span id="k">' . $key . '</span>', $result);
        }
        //third?
        return $result;
    }

    public
    function insertSentenceCheck($userdata)
    {
        $key = 'Placeholder';
        $start = '[' . $key . ']';
        $end = '[/' . $key . ']';
        $le = strlen($end);
        $string = $this->answer;
        $ini = strpos($string, $start);
        if ($ini === FALSE)
            return $string;
        $display = substr($string, 0, $ini);
        //return $display;
        $index = 1;
        while ($ini > 0) {
            $endidx = strpos($string, $end, $ini) + $le;
            $tmp = ''; //nothing by default
            if ($index == $userdata) //if have answer, it wrong by default
                $tmp = '<span id="uc2">' . $this->takeStatement() . '</span>';
            if ($index == $this->true_answer) // if true, replace new
                $tmp = '<span id="k2">' . $this->takeStatement() . '</span>';

            $display = $display . $tmp;
            $ini = strpos($string, $start, $endidx);
            if ($ini === FALSE) {
                $display = $display . substr($string, $endidx, strlen($string) - $endidx);
                return $display;
            } else {
                $display = $display . substr($string, $endidx, $ini - $endidx);
                //return $display;
            }
            $index++;
        }
        return $display;
    }

    public
    function userAnswer($targetType, $targetId)
    {
        return Auth::user()->answers->where('question_id', $this->id)->where('target_type', $targetType)->where('target_id', $targetId)->first();
    }

    public function sufferIndex()
    {
        $numbers = range(0, count(json_decode($this->answer)) - 1);
        shuffle($numbers);
        return $numbers;
    }

    public function sufferMatching()
    {
        $numbers = range(0, count(json_decode($this->true_answer)) - 1);
        shuffle($numbers);
        return $numbers;
    }

    public function isReviewReady($targetType, $targetId)
    {
        $result = false;
//        $user_id = Auth::user()->id;
//        if ($this->users->contains($user_id)) {
//            $result = $this->users()->find($user_id)->pivot->review_status == UserQuestion::REVIEWED;
//        }
        $answer = Auth::user()->answers->where('question_id', $this->id)->where('target_type', $targetType)->where('target_id', $targetId)->first();

        if ($answer != null) {
            return $answer->review_status == UserQuestion::REVIEWED;
        }
        return $result;
    }

    public function review($targetType, $targetId)
    {
        $answer = Auth::user()->answers->where('question_id', $this->id)->where('target_type', $targetType)->where('target_id', $targetId)->first();

        if ($answer != null) {
            return $answer->review;
        }
        return null;
    }

}
