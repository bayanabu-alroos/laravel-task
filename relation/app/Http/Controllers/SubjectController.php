<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Student;
use todoparrot\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $list = Student::find(1);
        $sub = new Subject;
        $sub->module = 103;
        $sub->student_id = 01;
        $sub->subject_name = 'PHP';
        $list->subjects()->save($sub);
        $sub = new Subject;
        $sub->module = 104;
        $sub->student_id = 01;
        $sub->subject_name = 'AngularJS';
        $list->subjects()->save($sub);
     }


     public function show($id)
     {
        $list = Student::find($id);
        return view('show')->with('list', $list);
    }

    
}
