<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => array('courses','index','show')]);
    }

    //Get all courses
    //return = Course::where('name', 'الموارد البشرية')->get();
    public function index()
    {
        $courses = Course::orderBy('name', 'asc')->paginate(5);
        return view('courses.index')->with('courses', $courses);
    }

    //create a new course
    public function create()
    {
        return view('courses.create');
    }

    public function show($id)
    {

        $course = Course::find($id);
        return view('courses.show')->with('course', $course);
    }

    public function edit($id)
    {
        $course = Course::find($id);

        //check for correct user
        if(auth()->user()->id !==$course->user_id){
            return redirect('/courses')->with('error','Unauthorized page');

        }
        return view('courses.edit')->with('course',$course);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'trainerName' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'location' => 'required'
        ]);
        $course = Course::find($id);
        $course->name = $request->input('name');
        $course->price = $request->input('price');
        $course->trainer_name = $request->input('trainerName');
        $course->description = $request->input('description');
        $course->start_date = $request->input('start');
        $course->end_date = $request->input('end');
        $course->location = $request->input('location');
        $course->save();
        return redirect('/home')->with('success', 'Course Updated');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'trainerName' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'location' => 'required'
        ]);
        //create course
        $course = new Course;
        $course->name = $request->input('name');
        $course->price = $request->input('price');
        $course->trainer_name = $request->input('trainerName');
        $course->user_id = auth()->user()->id;
        $course->description = $request->input('description');
        $course->start_date = $request->input('start');
        $course->end_date = $request->input('end');
        $course->location = $request->input('location');
        $course->save();
        return redirect('/courses')->with('success', 'Post Created');
    }

    public function delete($id)
    {
        $course = Course::find($id);
        //check for correct user
        if(auth()->user()->id !==$course->user_id){
            return redirect('/courses')->with('error','Unauthorized page');

        }
        $course->delete();
        return redirect('/home')->with('success', 'Course Deleted');
    }

}
