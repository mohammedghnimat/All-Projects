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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('message');

            $table->foreignId('status_id')
            ->unsigned()
            ->references('id')
            ->on('statuses')
            ->onDelete('cascade');

            $table->foreignId('priority_id')
            ->unsigned()
            ->references('id')
            ->on('priorities')
            ->onDelete('cascade');

            $table->foreignId('emp_id')
            ->unsigned()
            ->references('id')
            ->on('employees')
            ->onDelete('cascade');


            $table->foreignId('user_id')
            ->unsigned()
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
