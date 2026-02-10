<?php

namespace App\Ai\Services;

use App\Ai\Agents\NoteAssistant;
use App\Ai\Interpreters\AgentJsonInterpreter;

class NoteAiService
{
    public function __construct(
        protected NoteAssistant $assistant,
        protected AgentJsonInterpreter $interpreter
    ) {}

    public function chat(string $prompt): array
    {
        $response = $this->assistant->prompt($prompt);

        return $this->interpreter->interpret($response);
    }
}
