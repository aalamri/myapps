<?php

namespace App\Http\Controllers;

use Request;
use App\Course;
use App\City;
use Image;


class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => array('courses', 'index', 'show')]);
    }

    //Get all courses
    //return = Course::where('name', 'الموارد البشرية')->get();
    public function index()
    {
//        $city = City::all();
        $courses = Course::orderBy('name', 'asc')->paginate(15);
        return view('courses.index')->with('courses', $courses);
    }

    //create a new course
    public function create()
    {
        $city = City::all();
        return view('courses.create')->with('city', $city);
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
        if (auth()->user()->id !== $course->user_id) {
            return redirect('/courses')->with('error', 'Unauthorized page');

        }
        return view('courses.edit')->with('course', $course);
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
            'avatar' => 'image|max:1999',
            'city' => 'required',
            'start' => 'required',
            'end' => 'required',
            'location' => 'required'
        ]);
        //
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

        //create course
        $course = new Course;
        $course->name = $request->input('name');
        $course->price = $request->input('price');
        $course->trainer_name = $request->input('trainerName');
        $course->user_id = auth()->user()->id;
        $course->description = $request->input('description');
        $course->avatar = $filename;
        $course->city = $request->input('city');
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
        if (auth()->user()->id !== $course->user_id) {
            return redirect('/courses')->with('error', 'Unauthorized page');

        }
        $course->delete();
        return redirect('/home')->with('success', 'Course Deleted');
    }

    public function search(Request $request)
    {
        // Gets the query string from our form submission
        $query = Request::input('search');
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $courses = Course::where('name', 'LIKE', '%' . $query . '%')->paginate(10);

        // returns a view and passes the view the list of articles and the original query.
        return view('courses.search', compact('courses', 'query'));
    }

}

//// Gets the query string from our form submission
//$query = Request::input('search');
//// Returns an array of articles that have the query string located somewhere within
//// our articles titles. Paginates them so we can break up lots of search results.
//$course = DB::table('courses')->where('name', 'LIKE', '%' . $query . '%')->paginate(10);