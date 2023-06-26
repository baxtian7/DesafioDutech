<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StepsController extends Controller
{
    public function index()
    {

        return view('steps.index');
    }
}
