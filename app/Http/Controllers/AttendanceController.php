<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->is_admin == 1) {
            $attendances = Attendance::latest()->get();

        } else {
            $attendances = Attendance::where('user_id', '=', Auth::user()->id)->latest()->get();

        }
    
        return view('attendanceView', compact('attendances'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Attendance::create([
            'user_id' => Auth::user()->id,
            'date' => Carbon::now()->format('Y-m-d'),
            'inTime' => Carbon::now()->format('H:i:s'),

        ]);

        return redirect()->route('attendance');
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
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
