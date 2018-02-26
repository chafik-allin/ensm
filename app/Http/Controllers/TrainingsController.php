<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = \App\Training::paginate(10);
        return view('trainings.index')->withTrainings($trainings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['slug'] = str_slug($request->name);
        \App\Training::create($request->all());
        return redirect()->back()->withSuccess('Formation ajouté avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $training = \App\Training::where('slug', $slug)->firstOrFail();
        return view('trainings.show')->withTraining($training);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = \App\Training::findOrFail($id);
        return view('trainings.edit')->withTraining($training);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $training = \App\Training::findOrFail($id);
        $training->update($request->all());
        return redirect()->back()->withSuccess('La formation '.$training->name.' a été modifié avec success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = \App\Training::findOrFail($id);
        $training->delete();
        return redirect()->back()->withSuccess('Formation supprimée avec success');
    }

    public function admin(){
        $trainings = \App\Training::paginate(10);
        return view('admin.trainings')->withTrainings($trainings);
    }
}
