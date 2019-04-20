<?php

namespace App\Http\Controllers;

use App\Section;
use App\Personal;
use App\schedule;
use Illuminate\Http\Request;
use App\Http\Requests\SectionValidation;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = Section::orderBy('id','asc')->paginate(4);
        return view('section.index', compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectionValidation $request)
    {
        $section = new Section;
        $section->name = $request->section;
        $section->save();
        return redirect('/section/index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Section::findOrFail($id);
        $section = Section::findOrFail($id);
        $teacher = Personal::all()->where('ocupation','=', 'teacher');
        $schedule = schedule::all()->where('section_id', '=', $id);
        return view('section.show', compact('class','section','schedule','teacher','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = Section::findOrFail($id);
        $teacher = Personal::all()->where('ocupation','=', 'teacher');
        $class = $section->class;
        return view('section.edit', compact('section','class','teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = schedule::all()->where('section_id','=', $id);
        foreach ($section as $item){
            Schedule::findOrFail($item->id)->delete();
        }
        Section::findOrFail($id)->delete();
        return redirect()->route('section.index');
    }   
}
