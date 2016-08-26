<?php

namespace App\Http\Controllers;

use App\Post;
use App\Student;

class PagesController extends Controller
{

    public function getIndex()
    {

        $students = Student::orderBy("created_at", "desc")->get();
        return view('pages.index')->withStudents($students);
    }

}