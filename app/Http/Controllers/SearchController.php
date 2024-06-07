<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        // dd(request('q'));
        $jobs = Job::query()
        ->with(['employer', 'tags'])
        ->where('title', 'LIKE', '%'.request('q').'%')
        ->get();

        // return $jobs;

        return view('results', ['jobs' => $jobs]);
    }
}
