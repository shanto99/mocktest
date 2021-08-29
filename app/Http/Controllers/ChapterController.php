<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function save_chapter(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'chapter_name' => 'required'
        ]);

        $chapter = Chapter::create([
           'subject_id' => $request->subject,
           'chapter_name' => $request->chapter_name
        ]);

        return redirect()->back();
    }
}
