<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Job;


class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // Debugging output
        // dd($tag->jobs);

        // jobs for this tag
        return view('results', ['jobs' => $tag->jobs]);

    }
}
