<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id')->primarykey();
            $table->string('name',45);
            $table->string('email',45);
            $table->string('age',45,NULL);
            $table->string('gender',45,NULL);
            $table->string('high',45,NULL);
            $table->string('weight',45,NULL);
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
