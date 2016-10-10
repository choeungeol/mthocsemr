<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicBiopsy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_basic_biopsy', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('chart_id')->unsigned();
            $table->foreign('chart_id')->references('id')->on('mth_charts');
            $table->integer('minbp');   //최저혈압
            $table->integer('maxbp');   //최고혈압
            $table->integer('pb');      //맥박
            $table->integer('weight'); //채즁
            $table->integer('temp');    //체온
            $table->integer('brate');   //호흡
            $table->boolean('diabetes')->default(false);  //당뇨유무
            $table->integer('height');  //키
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
        Schema::drop('mth_basic_biopsy');
    }
}
