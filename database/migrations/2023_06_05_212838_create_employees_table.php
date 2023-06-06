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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('empid');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->string('address');
            $table->string('gender');
            $table->string('birthday');
            $table->string('birthplace');
            $table->string('phone');
            $table->string('civilstatus');
            $table->string('position');
            $table->string('hireddate');
            $table->string('email');
            $table->string('companyname');
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
        Schema::dropIfExists('employees');
    }
};
