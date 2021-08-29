<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        $chapters = Chapter::all();

        return view('welcome', compact('subjects', 'chapters'));
    }
}
