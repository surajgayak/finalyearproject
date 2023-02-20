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
        Schema::create('rentvehicles', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->string('contact');
            $table->string('carname');
            $table->string('model');
            $table->string('carphoto');
            $table->string('bluebookphoto');
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
        Schema::dropIfExists('rentvehicles');
    }
};