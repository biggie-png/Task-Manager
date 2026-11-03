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
        Schema::craate('tasks', function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('title')->primary();
            $table->string('descirption')->nullable();
            $table->string('status')->default('TODO');
            $table->string('priority')->default('MEDIUM');
            $table->date('due_date')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
