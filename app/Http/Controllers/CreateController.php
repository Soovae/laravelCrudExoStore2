<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
        return view('pages.form');
    }

    public function store(Request $request)
    {   
        $student = new Student();
        $student->name = $request->name;
        $student->genre = $request->genre;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->save();
        return redirect()->route('home');
    }
}
