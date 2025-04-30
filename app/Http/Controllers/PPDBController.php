<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function index()
    {
        $month = date('m');

        $testimoni = Testimoni::where('status',1)->get();

        return view('index', compact('testimoni', 'month'));
    }
}
