<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('birthday_day')->nullable(true);
            $table->string('birthday_month')->nullable(true);
            $table->string('birthday_year')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('nationality')->nullable(true);
            $table->integer('cost_works')->nullable(true);
            $table->integer('work_experience')->nullable(true);
            $table->string('training_format')->nullable(true);
            $table->string('education')->nullable(true);
            $table->string('specialization')->nullable(true);
            $table->string('certificate')->nullable(true);
            $table->integer('type');
            $table->string('email')->unique();
            $table->string('number')->unique();
            $table->string('password');
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
};
