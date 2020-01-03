<?php

namespace App\Http\Controllers\Auth;

use App\Entities\RegistrationQueue;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationQueueRequest;
use Illuminate\Support\MessageBag;

class QueueController extends Controller
{
    public function store(RegistrationQueueRequest $request)
    {
        $messageBag = new MessageBag();
        $request->persist($messageBag);
        return view('auth.queue-success', ['model' => $request->model(), 'queueLength' => RegistrationQueue::query()->count('id')]);
    }
}
