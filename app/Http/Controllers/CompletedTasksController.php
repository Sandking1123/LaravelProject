<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class CompletedTasksController extends Controller
{



    //** use when we complete task (if we check checkbox) **
    public function store(Task $task)

   {


   		$task->complete();

   		return back();

   }

      //***  (if we uncheck checkbox) ***

    public function destroy(Task $task)

   {

      $task->incomplete();

   		return back();



   }

}
