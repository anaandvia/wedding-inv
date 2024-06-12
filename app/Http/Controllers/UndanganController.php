<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use App\Http\Requests\StoreUndanganRequest;
use App\Http\Requests\UpdateUndanganRequest;
use Illuminate\Support\Facades\DB;


class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $undangans = Undangan::all();
        // return view('undangans.index', compact('undangans'));
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
     * @param  \App\Http\Requests\StoreUndanganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUndanganRequest $request)
    {
        // \Log::info('Store method called', ['request' => $request->all()]);
        $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
            'attend' => 'required|boolean',
        ]);

        Undangan::create($request->all());

        return back()->with('berhasil', 'Data pengajuan berhasil di uplaod.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function show(Undangan $undangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Undangan $undangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUndanganRequest  $request
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUndanganRequest $request, Undangan $undangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Undangan $undangan)
    {
        //
    }
}
