<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'answer' => $this['answer'],
            'letters' => $this['letters'],

            'schema' => [
                'answer' => 'Your answer.',
                'letters' => 'Overall letters used in your answer',
            ],
        ];
    }
}
