<?php

namespace Database\Seeders;

use App\Models\ChatMessage;
use Illuminate\Database\Seeder;

class ChatMessageSeeder extends Seeder
{
    public function run(): void
    {
        $messages = [
            [
                'session_id' => 'system-bot',
                'username' => 'John Paul (cmndrpaul)',
                'avatar_seed' => 'cmndrpaul',
                'message' => 'Hey there! 👋 Welcome to my portfolio live chat. Feel free to say hi, ask questions about any of my projects, or discuss potential opportunities!',
                'is_admin' => true,
                'created_at' => now()->subHours(2),
            ],
            [
                'session_id' => 'guest-dev-1',
                'username' => 'Fellow Developer',
                'avatar_seed' => 'alex',
                'message' => 'Love your full-stack projects! The Laravel and React architecture is super clean.',
                'is_admin' => false,
                'created_at' => now()->subMinutes(45),
            ],
            [
                'session_id' => 'system-bot',
                'username' => 'John Paul (cmndrpaul)',
                'avatar_seed' => 'cmndrpaul',
                'message' => 'Thanks Alex! Really appreciate the feedback. Glad you liked exploring it!',
                'is_admin' => true,
                'created_at' => now()->subMinutes(30),
            ],
        ];

        foreach ($messages as $msg) {
            ChatMessage::create($msg);
        }
    }
}
