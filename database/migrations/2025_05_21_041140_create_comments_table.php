<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');

            // Foreign key ke users
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Optional: relasi ke posts/products (bebas dipakai sesuai kebutuhan)
            $table->foreignId('post_id')->nullable()->constrained('posts')->onDelete('cascade');
            $table->foreignId('product_id')->nullable()->constrained('products')->onDelete('cascade');

            $table->timestamps();
        });
    }
};
