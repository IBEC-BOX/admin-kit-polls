<?php

declare(strict_types=1);

namespace AdminKit\Polls\UI\API\Controllers;

use AdminKit\Polls\Models\Poll;

class PollController extends Controller
{
    public function index()
    {
        return Poll::all();
    }

    public function show(int $id)
    {
        return Poll::findOrFail($id);
    }
}
