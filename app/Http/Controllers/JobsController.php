<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(){
        return jobs::all();
}
}