<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpParser\Builder\Use_;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ScheduleResource::collection(Schedule::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {
        return (new ScheduleResource(Schedule::create($request->all())))
        ->additional(['Info' => 'Schedule created']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $id)
    {
        return (new ScheduleResource($id))
        ->additional(['Info' => 'Schedule exist']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, Schedule $id)
    {
        $id->update($request->validated()); //Validador de campos
        return (new ScheduleResource($id))
        ->additional(['Info' => 'Shedule updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $id)
    {
        $id->delete();
        return (new ScheduleResource($id))
        ->additional(['Info' => 'Shedule deleted']);
    }
}