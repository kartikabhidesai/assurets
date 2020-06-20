<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('report_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('city');
            $table->string('email');
            $table->string('refrence_no');
            $table->string('phone');
            $table->text('report_data');
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
        Schema::dropIfExists('report_data');
    }
}
