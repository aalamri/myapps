<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    //

    public function index(){
    return view('courses');
        }

    public function create(){

    }

}
