<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned()->index();
            $table->integer('hospital_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->string('case_description');
            $table->string('modality');
            $table->string('case_notes');
            $table->string('teaching_point');
            $table->date('case_date');
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
        Schema::dropIfExists('cards');
    }
}
