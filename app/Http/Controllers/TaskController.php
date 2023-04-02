<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
use App\Models\Task;
use App\Models\TaskTeam;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Create Task
    public function create(Request $request)
    {
        $newTask = $request->validate([
            'task_name' => 'required|max:255',
        ]);

        $user = Task::create([
            'task_name' => $newTask['task_name'],
            'task_description' => $request->task_description,
            'task_start_date' => $request->start_date,
            'task_end_date' => $request->end_date,
            'task_priority' => $request->priority,
            'task_status' => $request->status,
            'milestone_id' => $request->milestone_id,
        ]);

        $milestone = Milestone::find($request->milestone_id);
        return redirect()->route('milestoneDetail', ['id1' => $milestone->project_id , 'id2'=> $request->milestone_id]);
       

    
    }


    // Show all tasks
    public function show()
    {
        $tasks = Task::all();
        return response()->json(['tasks'=>$tasks]);
    }

    // Update task
    public function update(Request $request)
    {
        $task = Task::where('id',$request->task_id)->firstOrFail();

        $task->task_name = $request->has('task_name') ? $request->input('task_name') : $task->task_name;
        $task->task_description = $request->has('task_description') ? $request->input('task_description') : $task->task_description;
        $task->task_start_date = $request->has('task_start_date') ? $request->input('task_start_date') : $task->task_start_date;
        $task->task_end_date = $request->has('task_end_date') ? $request->input('task_end_date') : $task->task_end_date;
        $task->task_priority = $request->has('task_priority') ? $request->input('task_priority') : $task->task_priority;
        $task->task_status = $request->has('task_status') ? $request->input('task_status') : $task->task_status;

        $task->save();

        return response()->json([
            'success_msg' => 'Task_updated',
        ]);
    }

   

    // Task Delete
    public function destroy(Request $request)
    {
        Task::where('id','=',$request->task_id)->delete();

        return response()->json([
            'success_msg' => 'Task_deleted',
        ]);
    }

    public function assignEmployee(Request $request){
        TaskTeam::where('task_id', $request->task_id)->delete();
        //dd($request->user_id);
        foreach($request->user_id as $user){
            TaskTeam::create([
                'task_id' => $request->task_id,
                'user_id' => $user
            ]);
        }
        $milestone = Milestone::find($request->milestone_id);
        return redirect()->route('milestoneDetail', ['id1' => $milestone->project_id , 'id2'=> $request->milestone_id]);
       


    }

    public function updateStatus(Request $request){

        Task::where('id', $request->task_id)->update([
            'task_status' => $request->status
        ]);

        $milestone = Milestone::find($request->milestone_id);
        return redirect()->route('milestoneDetail', ['id1' => $milestone->project_id , 'id2'=> $request->milestone_id]);
       
    }
}
