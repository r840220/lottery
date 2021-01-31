<?php


namespace App\Services\Lottery\Events\EventId;

use App\Services\Lottery\Events\AbstractEvent;

class Event extends AbstractEvent
{
    public function show()
    {
        dd(__CLASS__, __FUNCTION__);
    }
}