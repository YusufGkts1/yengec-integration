<?php

namespace App\Http\Controllers;

use App\Models\Integration\Integration;
use App\Http\Requests\StoreIntegrationRequest;
use App\Http\Requests\UpdateIntegrationRequest;

class IntegrationController extends Controller
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
     * @param  \App\Http\Requests\StoreIntegrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIntegrationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Integration\Integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function show(Integration $integration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Integration\Integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function edit(Integration $integration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIntegrationRequest  $request
     * @param  \App\Models\Integration\Integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIntegrationRequest $request, Integration $integration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Integration\Integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Integration $integration)
    {
        //
    }
}
