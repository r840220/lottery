<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Lottery\Factory;

class LotteryController extends Controller
{
    protected $factory;

    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    public function index()
    {
        dd(__FUNCTION__);
    }

    public function show($id)
    {
        $event = $this->factory->createEvent($id);

        $event->show();

        dd(__FUNCTION__);
    }

    public function overview()
    {
        dd(__FUNCTION__);
    }

    public function showRecords()
    {
        dd(__FUNCTION__);
    }

    public function draw()
    {
        dd(__FUNCTION__);
    }
}
