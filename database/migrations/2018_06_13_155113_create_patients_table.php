<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
	/**
	* Run the migrations.
    *
    * @return void
    */
    public function up()
    {
		Schema::create('patients', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('user_id');
			$table->string('patient_number');
			$table->string('name');
			$table->char('gender');
			$table->date('date_of_birth')->nullable();
			$table->string('email')->nullable();
			$table->string('datetime_phone')->nullable();
			$table->string('mobile_phone')->nullable();
			$table->string('health_status');
			$table->string('medicare_id')->nullable();
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
		Schema::dropIfExists('patients');
	}
}
