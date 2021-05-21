<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function create(Request $request){

        $task = new Task();
        $task->title=$request->title;
        $task->content=$request->content;

        $task->save();

        return redirect('/');
        return view('create');
        // $request->input('title');

    }

    public function view($id){

      $task = Task::findOrFail($id);

      return view('task', [
          'task'=> $task
      ]);


      $validatedData = $request->validate([
        'title' => 'required|max:150',
        'content' => 'required|max:1000',

    ]);
    \App\Form::create($validatedData);

    return response()->json('Данные сохранены успешно');

    }

}
