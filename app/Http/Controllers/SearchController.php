<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $niddle = $request->get('q');

        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'LIKE', "%$niddle%")
            ->get();

        return view('results', ['jobs' => $jobs]);
    }
}
