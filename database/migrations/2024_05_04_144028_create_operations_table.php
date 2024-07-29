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
        Schema::create('operations', function (Blueprint $table) {
            $table->id('op_id');
            $table->String('telephone');
            $table->String('email');
            $table->String('description');
            $table->String('cost');
            $table->String('paid_cost');
            $table->enum('is_done', [1, 0])->default(0);
            $table->unsignedBigInteger('player');
            $table->unsignedBigInteger('club');
            $table->enum('is_active', [1, 0])->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->foreign('player')->references('player_id')->on('players')->onDelete('cascade');
            $table->foreign('club')->references('club_id')->on('clubs')->onDelete('cascade');
        });
    }
};
