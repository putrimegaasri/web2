<?php

namespace App\Http\Controllers;

use App\roster;
use Illuminate\Http\Request;

class rosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roster = roster::all();
        return view('roster.index', compact('roster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roster.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        children::create($request->all());
       return redirect('/roster')->with('status','Data roster berhasil di tambah!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function show(roster $roster)
    {
        return view('roster.show', compact('roster'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function edit(roster $roster)
    {
        return view('roster.edit',compact('roster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roster $roster)
    {
        roster::where('id', $roster->id)
        ->update([
            'nik' => $request->kode,
            'nama' => $request->matakuliah,
            'Alamat' => $request->namadosen,
        ]);

        return redirect('/roster')->with('status','Data roster berhasil di ubah!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function destroy(roster $roster)
    {
        roster::destroy($roster->id);
        return redirect('/roster')->with('status','Data roster berhasil di hapus!!!');
    }
}