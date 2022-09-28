<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function viewStudents() {

        $students = Student::get();
        $title = "Students List";

        return view("viewStudents",compact("students","title"));
    }

    public function addStudent() {

        $title = "Add Student";

        $teachers = Teacher::get();

        return view("addStudent",compact("teachers","title"));
    }

    public function storeStudent() {

        $validated = request()->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'gender' => 'required',
            'teacher' => 'required'
        ]);

        Student::insert([
            "name" => request("name"),
            "age" => request("age"),
            "gender" => request("gender"),
            "teacher_id" => request("teacher"),
        ]);

        return redirect()->route("viewStudents");
    }

    public function editStudent($id) {

        $title = "Edit Student";

        $teachers = Teacher::get();
        $student = Student::find($id);

        return view("editStudent",compact("teachers","student","title"));
    }

    public function updateStudent($id) {

        $validated = request()->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'gender' => 'required',
            'teacher' => 'required'
        ]);

        Student::where("id",$id)->update([
            "name" => request("name"),
            "age" => request("age"),
            "gender" => request("gender"),
            "teacher_id" => request("teacher"),
        ]);

        return redirect()->route("viewStudents");
    }

    public function deleteStudent() {

        $student = request("student_id");

        Student::where("id",$student)->delete();

        return 1;

    }
}
