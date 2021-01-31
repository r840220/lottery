<?php


namespace App\Services\Lottery\Events;

use App\Services\Lottery\Constracts\LotteryEvent;

abstract class AbstractEvent implements  LotteryEvent
{
    public function __construct()
    {

    }

    public function overview($user)
    {
        // TODO: Implement overview() method.
    }

    public function show()
    {
        // TODO: Implement show() method.
    }

    public function draw($user)
    {
        // TODO: Implement draw() method.
    }
}