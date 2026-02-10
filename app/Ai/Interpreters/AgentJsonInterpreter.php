<?php

namespace App\Ai\Interpreters;

use Laravel\Ai\Responses\AgentResponse;

class AgentJsonInterpreter
{
    public function interpret(AgentResponse $response): array
    {
        $text = $this->extractFinalText($response);

        return $this->decodeJson($text);
    }

    protected function extractFinalText(AgentResponse $response): string
    {
        return $response->steps->last()?->text
            ?? throw new \RuntimeException('Empty AI response');
    }

    protected function decodeJson(string $text): array
    {
        $data = json_decode($text, true);

        if (!is_array($data)) {
            throw new \RuntimeException('Invalid AI response format');
        }

        return $data;
    }
}
