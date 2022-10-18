<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('team_name')->unique();
            $table->string('password');
            $table->string('fullname');
            $table->string('email_leader')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('wa_num')->unique();
            $table->string('line_id')->unique();
            $table->string('github');
            $table->string('birth_place');
            $table->date('birth_day');
            $table->string('card');
            $table->string('cv');
            $table->string('type');
            $table->string('payment')->nullable();
            $table->string('payment_confirmation')->nullable();
            $table->string('early')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
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
}
