<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ai\Agents\NoteAssistant;
use App\Http\Resources\NoteResource;
use App\Ai\Services\NoteAiService;

class AiController extends Controller
{

    public function chat(Request $request, NoteAiService $service)
    {
        $request->validate([
            'prompt' => ['required', 'string'],
        ]);

        return new NoteResource(
            $service->chat($request->prompt)
        );
    }
}
