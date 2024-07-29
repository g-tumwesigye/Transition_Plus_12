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
        Schema::create('players', function (Blueprint $table) {
            $table->id('player_id');
            $table->String('profile');
            $table->String('name');
            $table->String('telephone');
            $table->String('email');
            $table->unsignedBigInteger('current_club');
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->enum('is_active', [1, 0])->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('current_club')->references('club_id')->on('clubs')->onDelete('cascade');
        });
    }
};
