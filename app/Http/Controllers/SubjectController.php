<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function save_subject(Request $request)
    {
        $request->validate([
            'subject_name' => 'required'
        ]);
        $subject = Subject::create([
            'subject_name' => $request->subject_name
        ]);

        return redirect()->back();
    }
}
