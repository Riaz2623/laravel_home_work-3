<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('student-information');
    }
    public function create(Request $request)
    {
        $this->student = new Student();
        $this->student->name = $request -> name;
        $this->student->email = $request -> email;
        $this->student->mobile = $request -> mobile;
        $this->student->save();
        return redirect()->back()->with('message', 'Student Info save success ');
    }


}
