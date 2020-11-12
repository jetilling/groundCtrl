<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\Notes;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $taskCount = Tasks::where('completed', false)->count();
        $homeData = (object) [
            "task" => (object) [
                "boxText" => $taskCount > 0 ? $taskCount . " Pending Tasks" : "There are no pending tasks!",
                "pendingTasks" => $taskCount > 0 ? true : false
            ],
            "noteCount" => Notes::count()
        ];

        return view('home', compact('homeData'));
    }


}
