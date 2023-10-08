<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->foreignId('post_id')->references('post_id')->on('posts');
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->string('comment');
            $table->timestamps();
        });

        DB::table('comments')->insert([
            'comment' => 'helloka',
            'post_id' => 1,
            'user_id' => 1, // Adj meg egy létező felhasználó azonosítót
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'hát ez veri veri izgalmas',
            'post_id' => 2,
            'user_id' => 1, // Adj meg egy létező felhasználó azonosítót
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Btw, nyár az sokkal jhobb',
            'post_id' => 2,
            'user_id' => 1, // Adj meg egy létező felhasználó azonosítót
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'kys',
            'post_id' => 4,
            'user_id' => 2, // Adj meg egy létező felhasználó azonosítót
            'updated_at' => now(),
            'created_at' => now(),
        ]);
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
