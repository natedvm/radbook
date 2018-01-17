<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('patient_id');
            $table->text('notes');
            $table->text('interpretation');
            $table->text('conclusion');
            $table->boolean('ready_to_be_read');
            $table->boolean('read_by_doctor');
            $table->boolean('completed_by_coordinator');
            $table->date('date_entered');
            $table->date('date_read');
            $table->date('date_completed');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studies');
    }
}
