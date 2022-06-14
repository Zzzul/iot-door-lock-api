<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Door;
use App\Http\Requests\{StoreDoorRequest, UpdateDoorRequest};
use App\Http\Resources\{DoorCollection, DoorResource};
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class DoorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doors = Door::orderByDesc('id')->limit(30)->get();

        return new DoorCollection($doors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoorRequest $request)
    {
        switch ($request->type) {
            case 'open':
                $door = Door::create($request->validated());

                return new DoorResource($door);
                break;
            default:
                $latestDoor = Door::latest()->first();
                $now = now();
                $diff = Carbon::parse($latestDoor->open)->diff($now);

                $interval = "";
                $interval .= $diff->d . " hari, ";
                $interval .= $diff->h . " jam, ";
                $interval .= $diff->i . " menit, ";
                $interval .= $diff->s . " detik";

                // update waktu pintu ditutup(closed)
                $latestDoor->update(['closed' => $now, 'interval' => $interval]);

                return new DoorResource($latestDoor);
                break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Door  $door
     * @return \Illuminate\Http\Response
     */
    public function show(Door $door)
    {
        return new DoorResource($door);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Door  $door
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoorRequest $request, Door $door)
    {
        $door->update($request->validated());

        return new DoorResource($door);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Door  $door
     * @return \Illuminate\Http\Response
     */
    public function destroy(Door $door)
    {
        $door->delete();

        return response()->json(['message' => 'success'], Response::HTTP_NO_CONTENT);
    }
}
