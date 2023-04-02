<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MilestoneController extends Controller
{
    // Create Milestone
    public function create(Request $request)
    {
        $newMilestone = $request->validate([
            'name' => 'required|max:255',
        ]);

        $user = Milestone::create([
            'milestone_name' => $newMilestone['name'],
            'milestone_description' => $request->milestone_description,
            'milestone_start_date' => $request->start_date,
            'milestone_end_date' => $request->end_date,
            'milestone_budget' => $request->budget,
            'milestone_percentage' => $request->milestone_percentage,
            'milestone_priority' => $request->priority,
            'milestone_status' => $request->status,
            'project_id' => $request->project_id,
        ]);

        return redirect()->route('projectDetail', ['id' => $request->project_id]);
    }


    // Show Milestone
    public function show()
    {
        $milestones = Milestone::all();
        return response()->json(['milestones'=>$milestones]);
    }

    // Update Milestone
    public function update(Request $request)
    {
        $milestone = Milestone::where('id',$request->milestone_id)->firstOrFail();

        $milestone->milestone_name = $request->has('milestone_name') ? $request->input('milestone_name') : $milestone->milestone_name;
        $milestone->milestone_description = $request->has('milestone_description') ? $request->input('milestone_description') : $milestone->milestone_description;
        $milestone->milestone_start_date = $request->has('milestone_start_date') ? $request->input('milestone_start_date') : $milestone->milestone_start_date;
        $milestone->milestone_end_date = $request->has('milestone_end_date') ? $request->input('milestone_end_date') : $milestone->milestone_end_date;
        $milestone->milestone_budget = $request->has('milestone_budget') ? $request->input('milestone_budget') : $milestone->milestone_budget;
        $milestone->milestone_percentage = $request->has('milestone_percentage') ? $request->input('milestone_percentage') : $milestone->milestone_percentage;
        $milestone->milestone_priority = $request->has('milestone_priority') ? $request->input('milestone_priority') : $milestone->milestone_priority;
        $milestone->milestone_status = $request->has('milestone_status') ? $request->input('milestone_status') : $milestone->milestone_status;

        $milestone->save();

       return redirect()->route('projectDetail', ['id' => $request->project_id]);
    }

    // Delete Milestone
    public function destroy(Request $request)
    {
        Milestone::where('id','=',$request->milestone_id)->delete();

        return response()->json([
            'success_msg' => 'Milestone_deleted',
        ]);
    }

    public function detail($id1, $id2) {
        $milestoneDetail = DB::table('milestones')
            ->leftJoin('tasks', 'milestones.id', '=', 'tasks.milestone_id')
            ->leftJoin('task_teams', 'tasks.id', '=', 'task_teams.task_id')
            ->leftJoin('users', 'users.id', "=", 'task_teams.user_id' )
            ->select('milestones.id', 'milestones.milestone_name', 'tasks.id as task_id', 'tasks.task_name', 'tasks.task_description', 'tasks.task_start_date',
                'tasks.task_end_date', 'tasks.task_priority', 'tasks.task_status',
                DB::raw('GROUP_CONCAT(DISTINCT users.id) AS user_id'),
                DB::raw('GROUP_CONCAT(DISTINCT users.name) AS user_name'),
                )
            ->where('milestones.id', '=', $id2)
            ->groupBy('milestones.id', 'milestones.milestone_name', 'tasks.id', 'tasks.task_name', 'tasks.task_description', 'tasks.task_start_date',
            'tasks.task_end_date', 'tasks.task_priority', 'tasks.task_status','user_id')
            ->get();
            
        return view('milestoneDetail', compact('milestoneDetail'));
    }

    public function updateStatus(Request $request){
       Milestone::find($request->milestone_id)->update([
            'milestone_status' => $request->status,
        ]);

        $milestone = Milestone::find($request->milestone_id);
        return redirect()->route('projectDetail', ['id' => $milestone->project_id]);


    }
    
}
