<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batiments = Batiment::all();
        return view('pages.batiment',compact('batiments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create.batiment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Batiment();
        $store->name = $request->name;
        $store->description = $request->description;
        $store->save();
        return redirect('/batiment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batiment  $batiment
     * @return \Illuminate\Http\Response
     */
    public function show(Batiment $batiment)
    {
        $show=$batiment;
        return view('pages.show.batiment',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batiment  $batiment
     * @return \Illuminate\Http\Response
     */
    public function edit(Batiment $batiment)
    {
        $edit=$batiment;
        return view('pages.edit.batiment',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batiment  $batiment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batiment $batiment)
    {
        $update = $batiment;
        $update->name = $request->name;
        $update->description = $request->description;
        $update->save();
        return redirect('/batiment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batiment  $batiment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batiment $batiment)
    {
        $batiment->delete();
        return redirect()->back();
    }
}
