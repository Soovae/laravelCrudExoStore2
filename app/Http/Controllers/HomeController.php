<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $students = Student::all();
        return view ('home', compact('students'));
    }
}
