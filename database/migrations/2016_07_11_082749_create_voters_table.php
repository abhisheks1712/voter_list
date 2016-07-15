<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serial_num')->unique();
            $table->string('name', 100);
            $table->string('fathers_name', 100)->nullable();
            $table->string('epic_number', 30)->unique();            
            $table->char('mobile', 10);
            $table->string('colony', 100);   
            $table->string('colony_hindi', 100);         
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
        Schema::drop('voters');
    }
}
