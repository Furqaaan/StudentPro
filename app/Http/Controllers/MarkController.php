<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MarkController extends Controller
{

    public function viewMarks() {

        $title = "Marks List";

        $marks = Mark::get();
        foreach($marks as $mark){
            $mark->totalMarks = $mark->maths + $mark->science + $mark->history;
        }

        return view("viewMarks",compact("marks","title"));
    }

    public function addMarks() {

        $title = "Add Marks";

        $students = Student::get();

        return view("addMarks",compact("students","title"));
    }

    public function storeMarks() {

        $validated = request()->validate([
            'student' => 'required',
            'term' => 'required',
            'maths' => 'required',
            'science' => 'required',
            'history' => 'required'
        ]);

        Mark::insert([
            "student_id" => request("student"),
            "term" => request("term"),
            "maths" => request("maths"),
            "science" => request("science"),
            "history" => request("history"),
            "created_at" => Carbon::now()
        ]);

        return redirect()->route("viewMarks");
    }

    public function editMark($id) {

        $title = "Edit Mark";

        $students = Student::get();
        $mark = Mark::find($id);

        return view("editMark",compact("mark","students","title"));
    }

    public function updateMark($id) {
        $validated = request()->validate([
            'student' => 'required',
            'term' => 'required',
            'maths' => 'required',
            'science' => 'required',
            'history' => 'required'
        ]);

         Mark::where("id",$id)->update([
            "student_id" => request("student"),
            "term" => request("term"),
            "maths" => request("maths"),
            "science" => request("science"),
            "history" => request("history"),
            "created_at" => Carbon::now()
        ]);

        return redirect()->route("viewMarks");
    }

    public function deleteMark() {

        $mark = request("mark_id");

        Mark::where("id",$mark)->delete();

        return 1;

    }
}
