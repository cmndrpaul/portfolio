<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use App\Models\CvRequest;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getMessages()
    {
        $messages = ChatMessage::orderBy('created_at', 'asc')->take(50)->get();
        return response()->json([
            'status' => 'success',
            'messages' => $messages,
            'online_count' => rand(3, 8),
        ]);
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:1000',
            'username' => 'nullable|string|max:50',
            'session_id' => 'nullable|string|max:100',
        ]);

        $username = $validated['username'] ?? session('chat_username', 'Visitor #' . rand(100, 999));
        session(['chat_username' => $username]);

        $chatMessage = ChatMessage::create([
            'session_id' => $validated['session_id'] ?? session()->getId(),
            'username' => $username,
            'avatar_seed' => substr(md5($username), 0, 8),
            'message' => strip_tags($validated['message']),
            'is_admin' => false,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => $chatMessage,
        ]);
    }

    public function requestCv(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'company' => 'nullable|string|max:150',
            'message' => 'nullable|string|max:1000',
        ]);

        $cvRequest = CvRequest::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you! Your CV request has been received. I will send over my updated resume shortly.',
            'data' => $cvRequest,
        ]);
    }
}
