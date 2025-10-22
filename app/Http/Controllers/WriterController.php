<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WriterController extends Controller
{
    public function index(Request $request){
        $writers = Writer::orderBy('id', 'desc')->paginate(10);
        return Inertia::render('Writers', ['writers'=> $writers]);
    }
}
