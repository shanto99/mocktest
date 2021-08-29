<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function save_question(Request $request)
    {
        $request->validate([
            'chapter_id' => 'required',
           'subject_id' => 'required',
           'question' => 'required',
           'options' => 'required|array',
           'answer' => 'required'
        ]);

        $question = Question::create([
            'subject_id' => $request->subject_id,
            'chapter_id' => $request->chapter_id,
            'question' => $request->question,
            'user_id' => Auth::user()->id
        ]);

        foreach ($request->options as $key => $option) {
            $optionData = [
                'question_id' => $question->id,
                'option' => $option
            ];
            if($key == $request->answer) {
                $optionData['is_correct'] = '1';
            }
            Option::create($optionData);
        }

        return redirect()->back();
    }
}
