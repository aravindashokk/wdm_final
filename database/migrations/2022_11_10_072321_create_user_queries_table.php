<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('user_queries', function (Blueprint $table) {
            $table->id();

            $table->text('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone_number');
            $table->longText('message');
            $table->string('slug'); 
            $table->string('status');
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
        Schema::dropIfExists('user_queries');
    }
};
