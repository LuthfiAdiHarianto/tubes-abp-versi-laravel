<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('service')->nullable();
            $table->text('message')->nullable();
            $table->json('metadata')->nullable();
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending');
            $table->foreignId('user_id')->nullable()->constrained('profiles')->nullOnDelete();
            $table->string('package_id')->nullable();
            $table->decimal('total', 12, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
