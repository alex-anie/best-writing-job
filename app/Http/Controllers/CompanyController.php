<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::orderBy('id', 'desc')->paginate(10);
        return Inertia::render("Companies", ['companies' => $companies]);
    }

    public function show(Company $company){
        return Inertia::render('show/CompanyShow', ['company' => $company]);
    }
}
