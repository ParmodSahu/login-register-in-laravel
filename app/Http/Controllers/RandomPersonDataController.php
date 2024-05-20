<?php

namespace App\Http\Controllers;

use App\Models\RandomPersonData;
use App\Http\Requests\StoreRandomPersonDataRequest;
use App\Http\Requests\UpdateRandomPersonDataRequest;

class RandomPersonDataController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRandomPersonDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRandomPersonDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RandomPersonData  $randomPersonData
     * @return \Illuminate\Http\Response
     */
    public function show(RandomPersonData $randomPersonData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RandomPersonData  $randomPersonData
     * @return \Illuminate\Http\Response
     */
    public function edit(RandomPersonData $randomPersonData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRandomPersonDataRequest  $request
     * @param  \App\Models\RandomPersonData  $randomPersonData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRandomPersonDataRequest $request, RandomPersonData $randomPersonData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RandomPersonData  $randomPersonData
     * @return \Illuminate\Http\Response
     */
    public function destroy(RandomPersonData $randomPersonData)
    {
        //
    }
}
