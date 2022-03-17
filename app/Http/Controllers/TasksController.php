<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->tasks();
        return view('dashboard', compact('tasks'));
    }
    public function add()
    {
    	return view('add');
    }

    

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);        
        
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);        
        
        $user->save();        
        
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    public function edit(Task $task)
    {

    	if (auth()->user()->id == $task->user_id)
        {            
                return view('edit', compact('task'));
        }           
        else {
             return redirect('/dashboard');
         }            	
    }

    public function update(Request $request, Task $task)
    {
    	if(isset($_POST['delete'])) {
    		$task->delete();
    		return redirect('/dashboard');
    	}
    	else
    	{
            $this->validate($request, [
                'description' => 'required'
            ]);
    		$task->description = $request->description;
	    	$task->save();
	    	return redirect('/dashboard'); 
    	}    	
    }
}