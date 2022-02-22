<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    protected $students;
    protected $student;

    public function index()
    {
        $this->student= new Student();
        $this->student->newStudent();
        return 'success';
//        $this->students= Student::getAllStudent();
//
//        return view('home',['students'=>$this->students]);
    }
}
