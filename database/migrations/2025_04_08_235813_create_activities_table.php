<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('type', ['habit', 'routine', 'short_term', 'long_term']);
            $table->enum('recurrence', ['daily', 'weekly', 'monthly', 'once'])->nullable();
            $table->enum('priority', ['low', 'medium', 'high'])->nullable();
            $table->enum('status', ['unmapped', 'in_progress', 'paused', 'completed']);
            $table->date('due_date')->nullable();
            $table->date('completed_at')->nullable();
            $table->integer('progress')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
