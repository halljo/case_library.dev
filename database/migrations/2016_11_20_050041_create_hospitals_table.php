<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hospital_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('case_id')->unsigned()->index();
            $table->integer('patient_id')->unsigned()->index();
            $table->string('hospital_name');
            $table->string('hospital_address_first');
            $table->string('hospital_address_second');
            $table->string('hospital_address_third');
            $table->string('hospital_state');
            $table->string('hospital_country');
            $table->integer('hospital_postcode');
            $table->integer('hospital_phone');
            $table->integer('hospital_fax');
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
        Schema::dropIfExists('hospitals');
    }
}
