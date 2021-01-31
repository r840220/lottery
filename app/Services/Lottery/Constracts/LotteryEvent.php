<?php


namespace App\Services\Lottery\Constracts;


interface LotteryEvent
{
    public function show();
    public function draw($user);
    public function overview($user);
}