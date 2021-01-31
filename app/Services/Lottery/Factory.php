<?php


namespace App\Services\Lottery;

use App\Services\Lottery\Constracts\LotteryEvent;

class Factory
{
    public function createEvent($id, $options = []): LotteryEvent
    {
        $eventClass = $this->getEventClass($id);

        return app($eventClass, [$options]);
    }

    protected function getEventClass($id)
    {
        return sprintf('%s\%s\%s\%s', __NAMESPACE__, 'Events', $id, 'Event');
    }
}