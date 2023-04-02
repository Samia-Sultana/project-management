<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectTeam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Project as XmlProject;

class ProjectController extends Controller
{
    // Create a new project
    public function store(Request $request)
    {
    
        // $newProject = $request->validate([
        //     'projectName' => 'required|max:255',
        //     'startDate' => 'max:255',
        //     'endDate' => 'max:255',
        //     'budget' => 'max:255',
        //     'priority' => 'max:255',
        //     'projectManager' => 'max:255',
        // ]);

        $project = Project::create([
            'project_name' => $request->projectName,
            'project_description' => $request->description,
            'project_start_date' => $request->startDate,
            'project_end_date' => $request->endDate,
            'project_budget' => $request->budget,
            'project_priority' => $request->priority,
            'project_manager' => $request->projectManager,
        ]);

        foreach($request->teamMembers as $member){
            ProjectTeam::create([
                'project_id' => $project['id'],
                'user_id' => $member
            ]);
        }
        
        return redirect()->route('project');
       
    }

    // Show all projects
    public function show()
    {
        $projects = DB::table('projects')
        ->leftJoin('milestones', 'projects.id', "=", 'milestones.project_id')
        ->leftJoin('project_teams', 'projects.id', "=", 'project_teams.project_id')
        ->leftJoin('users', 'projects.project_manager', '=', 'users.id')
        ->select('projects.id', 'projects.project_name', 'projects.project_description', 'projects.project_start_date','projects.project_end_date','projects.project_budget','projects.project_priority','projects.project_status', 'projects.project_manager','users.name as project_manager_name', DB::raw('GROUP_CONCAT( milestones.milestone_status) AS milestone_status'), DB::raw('GROUP_CONCAT( milestones.milestone_percentage) AS milestone_percentage'), DB::raw('GROUP_CONCAT(DISTINCT project_teams.user_id) AS team_members'))
        ->groupBy('projects.id', 'projects.project_name', 'projects.project_description', 'projects.project_start_date','projects.project_end_date','projects.project_budget','projects.project_priority','projects.project_status', 'projects.project_manager', 'project_manager_name')
        ->get();


    
        $members = DB::table('users')->select('users.id','users.name')->get()->toArray();

        return view('project', compact('projects','members')); 
    }

    // Update a Project
    public function update(Request $request)
    {

        $project = Project::where('id',$request->project_id)->firstOrFail();
        
        $project->project_name = $request->has('project_name') ? $request->input('project_name') : $project->project_name;
        $project->project_description = $request->has('project_description') ? $request->input('project_description') : $project->project_description;
        $project->project_start_date = $request->has('project_start_date') ? $request->input('project_start_date') : $project->project_start_date;
        $project->project_end_date = $request->has('project_end_date') ? $request->input('project_end_date') : $project->project_end_date;
        $project->project_budget = $request->has('project_budget') ? $request->input('project_budget') : $project->project_budget;
        $project->project_priority = $request->has('project_priority') ? $request->input('project_priority') : $project->project_priority;
        $project->project_status = $request->has('project_status') ? $request->input('project_status') : $project->project_status;
        $project->project_manager = $request->has('project_manager') ? $request->input('project_manager') : $project->project_manager;

        $project->save();

        return redirect()->route('project');
    }

    // Delete a project
    public function destroy(Request $request)
    {
        Project::where('id','=',$request->project_id)->delete();

        return response()->json([
            'success_msg' => 'Project_deleted',
        ]);
    }

    public function detail(Request $request, $id){
        $projectDetail =  DB::table('projects')
    ->leftJoin('milestones', 'projects.id', '=', 'milestones.project_id')
    ->leftJoin('project_teams', 'projects.id', '=', 'project_teams.project_id')
    ->leftJoin('users', 'project_teams.user_id', '=', 'users.id')
    ->leftJoin('users as managers', 'projects.project_manager', '=', 'managers.id')
    ->select(
        'projects.id',
        'projects.project_name',
        'projects.project_description',
        'projects.project_start_date',
        'projects.project_end_date',
        'projects.project_budget',
        'projects.project_priority',
        'projects.project_status',
        'projects.project_manager',
        'managers.name as project_manager_name',
        DB::raw('GROUP_CONCAT(DISTINCT milestones.id) AS milestone_id'),
        DB::raw('GROUP_CONCAT(DISTINCT milestones.milestone_name) AS milestone_name'),
        DB::raw('GROUP_CONCAT(milestones.milestone_status) AS milestone_status'),
        DB::raw('GROUP_CONCAT(milestones.milestone_percentage) AS milestone_percentage'),
        DB::raw('GROUP_CONCAT(DISTINCT users.id) AS user_id'),
        DB::raw('GROUP_CONCAT(DISTINCT users.name) AS user_name'),
        DB::raw('GROUP_CONCAT(DISTINCT users.email) AS user_email')

    )
    ->where('projects.id', $id)
    ->groupBy(
        'projects.id',
        'projects.project_name',
        'projects.project_description',
        'projects.project_start_date',
        'projects.project_end_date',
        'projects.project_budget',
        'projects.project_priority',
        'projects.project_status',
        'projects.project_manager',
        'project_manager_name',
    )
    ->first();
        
        return view('projectDetail', compact('projectDetail'));

    }

  
}
