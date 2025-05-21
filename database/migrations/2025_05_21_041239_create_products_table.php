<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 10, 2);
            $table->text('description');
            $table->timestamp('created_at')->useCurrent();
            $table->string('imagePath');

            // Foreign key ke users
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }
};
