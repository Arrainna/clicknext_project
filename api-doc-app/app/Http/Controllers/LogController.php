<?php

namespace App\Http\Controllers;

use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{
    public function index()
    {
        $logs = Activity::all();

        return view('logs.index', ['logs' => $logs]);
    }
}
