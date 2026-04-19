<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'message',
        'metadata',
        'status',
        'user_id',
        'package_id',
        'total',
    ];

    protected $casts = [
        'metadata' => 'array',
        'total' => 'decimal:2',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'user_id');
    }
}
