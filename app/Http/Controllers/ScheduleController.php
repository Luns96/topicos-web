<?php

namespace App\Http\Controllers;

use App\Section;
use App\schedule;
use App\Personal;
use App\User;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        $error = '';
        $teacher = Personal::all()->where('ocupation','=', 'teacher');
        $student = Personal::all()->where('ocupation','=', 'student');
        $schedule = schedule::all()->where('section_id', '=', $id);
        $class = Section::findOrFail($id);
        return view('section.class.create',compact('error', 'class', 'teacher','id','schedule','student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $person = Schedule::all();
        $user = Personal::findOrFail($request->id);
        $idd = '/'.$id;
        foreach ($person as $item){
            if($item->personal_id == $request->id  && $item->time == $id.$request->day.$request->time){
                return redirect('/section/class/create/'.$id);
            };
        }
        $class = new Schedule;
        $class->time = $id.$request->day.$request->time;
        $class->personal_id = $request->id;
        $class->section_id = $id;
        $class->ocupation = $user->ocupation;
        $class->name = $user->name;
        $class->save();
        return redirect('/section/class/create/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = schedule::all()->where('ocupation','=', 'teacher');
        $student = schedule::all()->where('ocupation','=', 'student');
        return view('section.class.show', compact('teacher', 'student', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $time = Schedule::findOrFail($id)->time;
        $find = Schedule::all()->where('time', '=', $time);
        foreach ($find as $item){
            Schedule::findOrFail($item->id)->delete();
        }
        return redirect()->route('section.index');
    }


    public function destroystudent($id)
    {
        $class = Schedule::all()->where('id', '=', $id);
        foreach($class as $item){
            $class = $item->time;
        }
        Schedule::findOrFail($id)->delete();
        return redirect('section/class/show/'.$class);

    }
}
