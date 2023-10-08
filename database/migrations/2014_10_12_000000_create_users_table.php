<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('vezeteknev');
            $table->string('keresztnev');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(['user_id' => '1','email' => 'teszt1@teszt.com', 'password' => Hash::make('teszt123'),'vezeteknev' => 'Teszt', 'keresztnev' => 'Elek']);
        User::create(['email' => 'krisztike113@gmail.com', 'password' => Hash::make('teszt123'),'vezeteknev' => 'Szedlár', 'keresztnev' => 'Krisztina']);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
