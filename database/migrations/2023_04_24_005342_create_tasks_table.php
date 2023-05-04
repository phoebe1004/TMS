<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('done');
            $table->tinyInteger('published');
            $table->string('company_name');
            $table->string('module');
            $table->string('task',1000);
            $table->string('assigned_to');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('progress');
            $table->string('q_a');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
