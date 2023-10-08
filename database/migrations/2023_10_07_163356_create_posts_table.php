<?php

use App\Models\Post;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->string('posztcim');
            $table->string('tartalom');
            $table->timestamps();
        });
        DB::table('posts')->insert([
            'posztcim' => 'Első poszt',
            'tartalom' => 'Hello world! :)',
            'user_id' => 2, 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        DB::table('posts')->insert([
            'posztcim' => 'Második posztom',
            'tartalom' => 'Az ősz a kedvenc évszakom!',
            'user_id' => 2, 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        DB::table('posts')->insert([
            'posztcim' => 'Harmadik posztom',
            'tartalom' => 'Egyébként azért szeretem mert ilyenkor lehet kapni Pumpkin Spice Lattet',
            'user_id' => 2, 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        DB::table('posts')->insert([
            'posztcim' => 'Bruhhh',
            'tartalom' => 'Hogy működik???b rf// NEGX',
            'user_id' => 1, 
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
        Schema::dropIfExists('posts');
    }
};
