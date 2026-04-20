<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'service' => 'nullable|string',
            'message' => 'nullable|string',
            'metadata' => 'nullable|array',
            'status' => 'nullable|in:pending,processing,completed,cancelled',
            'user_id' => 'nullable|integer|exists:profiles,id',
            'package_id' => 'nullable|string',
            'total' => 'nullable|numeric',
        ]);

        $order = Order::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'service' => $data['service'] ?? null,
            'message' => $data['message'] ?? null,
            'metadata' => $data['metadata'] ?? null,
            'status' => $data['status'] ?? 'pending',
            'user_id' => $data['user_id'] ?? null,
            'package_id' => $data['package_id'] ?? null,
            'total' => $data['total'] ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pesanan berhasil disimpan.',
            'order_id' => $order->id,
        ]);
    }
}
