<?php

namespace App\Ai\Agents;

use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Promptable;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Responses\AgentResponse;
class NoteAssistant implements Agent
{
    use Promptable;

    protected string $provider = 'groq';

    public function instructions(): string
    {
        return 'You MUST respond ONLY with valid JSON matching this schema {"answer: string, "letters: int"}';
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'answer' => $schema->string()
                ->description('Your answer.')
                ->required(),

            'letters' => $schema->integer()
                ->min(1)
                ->max(40)
                ->description('Overall letters used in your answer')
                ->required(),
        ];
    }

}
