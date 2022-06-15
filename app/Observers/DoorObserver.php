<?php

namespace App\Observers;

use App\Models\Door;
use Illuminate\Support\Facades\Cache;

class DoorObserver
{
    /**
     * Handle the Door "created" event.
     *
     * @param  \App\Models\Door  $door
     * @return void
     */
    public function created(Door $door)
    {
        Cache::forget('doors');
    }

    /**
     * Handle the Door "updated" event.
     *
     * @param  \App\Models\Door  $door
     * @return void
     */
    public function updated(Door $door)
    {
        Cache::forget('doors');
    }

    /**
     * Handle the Door "deleted" event.
     *
     * @param  \App\Models\Door  $door
     * @return void
     */
    public function deleted(Door $door)
    {
        Cache::forget('doors');
    }
}
