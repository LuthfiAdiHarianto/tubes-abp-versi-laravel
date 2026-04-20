<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ChatController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        return response()->json([
            'reply' => 'Ini adalah stub API chat Laravel. Integrasikan logika Gemini atau chatbot di sini.',
            'received' => $request->input('message'),
        ]);
    }
}
