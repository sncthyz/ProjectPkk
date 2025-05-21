<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('imagePath');
            $table->timestamp('created_at')->useCurrent();

            // Foreign key ke users
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }
};
