<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.index');
    }
    // public function searchTask(Request $request)
    // {
    //     $searched_task = $request->task_name;

    //     if($searched_task != "")
    //     {
    //         $task = Task::where("name","like", "%$searched_task%")->first();
    //         if($task)
    //         {
    //             return redirect('task/'.$task->task->slug.'/'.$task->slug);
    //         }
    //         else{
    //             return redirect()->back()->with('status', "No Task match your search");
    //         }
    //     }
    //     else{
    //         return redirect()->back();
    //     }
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
