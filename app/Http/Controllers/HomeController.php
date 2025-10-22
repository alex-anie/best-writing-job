<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request){
        $jobs = Job::orderBy("id","desc")->paginate(10);
        return Inertia::render('Home', ['jobs' => $jobs]);
    }

    public function show(Job $job){
        return Inertia::render('show/JobShow', ['job' => $job]);
    }
}
