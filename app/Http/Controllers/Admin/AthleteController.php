<?php

namespace App\Http\Controllers\Admin;

use App\Athlete;
use App\Category;
use App\Http\Controllers\Controller;
use App\Nation;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $athletes=Athlete::all();
        return view('admin.athletes.index', compact('athletes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nations=Nation::all();
        $categories=Category::all();
        
        return view('admin.athletes.create', compact('nations', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $new_athlete = new Athlete();
        $new_athlete->fill($data);
        $new_athlete->save();

        if(isset($data['categories'])) {
            $new_athlete->categories()->sync($data['categories']);
        }

        return redirect()->route('admin.athletes.show', ['athlete' => $new_athlete->id]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $athlete=Athlete::findOrFail($id);
        return view('admin.athletes.show', compact('athlete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
