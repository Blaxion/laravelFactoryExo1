<?php

namespace App\Http\Controllers;

use App\Models\Typeformation;
use Illuminate\Http\Request;

class TypeformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeformations = Typeformation::all();
        return view('pages.typeformation',compact('typeformations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create.typeformation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Typeformation();
        $store->name = $request->name;
        $store->save();
        return redirect('/typeformation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typeformation  $typeformation
     * @return \Illuminate\Http\Response
     */
    public function show(Typeformation $typeformation)
    {
        $show=$typeformation;
        return view('pages.show.typeformation',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typeformation  $typeformation
     * @return \Illuminate\Http\Response
     */
    public function edit(Typeformation $typeformation)
    {
        $edit=$typeformation;
        return view('pages.edit.typeformation',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Typeformation  $typeformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typeformation $typeformation)
    {
        $update = $typeformation;
        $update->name = $request->name;
        $update->save();
        return redirect('/typeformation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typeformation  $typeformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typeformation $typeformation)
    {
        $typeformation->delete();
        return redirect()->back();
    }
}
