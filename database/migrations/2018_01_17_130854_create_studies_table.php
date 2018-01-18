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
            $table->text('notes')->nullable();
            $table->text('interpretation')->nullable();;
            $table->text('conclusion')->nullable();;
            $table->boolean('ready_to_be_read')->nullable();;
            $table->boolean('read_by_doctor')->nullable();;
            $table->boolean('completed_by_coordinator')->nullable();;
            $table->date('date_entered')->nullable();;
            $table->date('date_read')->nullable();;
            $table->date('date_completed')->nullable();;


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
