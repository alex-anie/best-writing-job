<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JobsController extends Controller
{
    public function index(Request $request){
        $jobs = Job::orderBy("id","desc")->paginate(10);
        return Inertia::render('Jobs', ['jobs' => $jobs]);
    }

    public function create(){
        return Inertia::render('CreateJob');
    }
}
