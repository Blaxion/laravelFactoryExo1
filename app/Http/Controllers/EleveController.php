<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('pages.eleve',compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create.eleve');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Eleve();
        $store->name = $request->name;
        $store->lastname = $request->lastname;
        $store->age = $request->age;
        if ($request->jobseeker == "on") {
            $store->jobseeker = 1;
        }else {
            $store->jobseeker = 0;
        }
        $store->save();
        return redirect('/eleve');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        $show=$eleve;
        return view('pages.show.eleve',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        $edit=$eleve;
        return view('pages.edit.eleve',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleve $eleve)
    {
        $update = $eleve;
        $update->name = $request->name;
        $update->lastname = $request->lastname;
        $update->age = $request->age;
        if ($request->jobseeker == "on") {
            $update->jobseeker = 1;
        }else {
            $update->jobseeker = 0;
        }
        $update->save();
        return redirect('/eleve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect()->back();
    }
}
