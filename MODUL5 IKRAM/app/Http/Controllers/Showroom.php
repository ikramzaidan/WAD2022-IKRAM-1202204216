<?php

namespace App\Http\Controllers;

use App\Models\Showrooms;
use Illuminate\Http\Request;

class Showroom extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('showroom', [
            'Showrooms' => Showrooms::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('showroom_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request; $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'owner' => 'required|max:255',
            'brand' => 'required|max:255',
            'purchase_date' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $validated['image'] = 'image.png';

        if(Showrooms::create($validated)){
            $request->session()->flash('AddSuccess', 'Item Berhasil Ditambahkan.');
            return redirect('/showroom');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Showrooms  $showrooms
     * @return \Illuminate\Http\Response
     */
    public function show(Showrooms $showrooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Showrooms  $showrooms
     * @return \Illuminate\Http\Response
     */
    public function edit(Showrooms $showrooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShowroomsRequest  $request
     * @param  \App\Models\Showrooms  $showrooms
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShowroomsRequest $request, Showrooms $showrooms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Showrooms  $showrooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showrooms $showrooms)
    {
        //
    }
}
