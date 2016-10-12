<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_charts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');   //차트번호
            $table->integer('patient_id')->unsigned();  //환자id
            $table->foreign('patient_id')->references('id')->on('mth_patients');
            $table->boolean('fregi')->default(false);   //가족등록여부
            $table->string('vhdetail',200); //메모
            $table->boolean('pregnant')->default(false);    //임신여부
            $table->boolean('ereception')->default(false);  //응급접수
            $table->boolean('hr')->default(false);  //입원접수
            $table->string('uniques',200);  //특이사항
            $table->string('vhreason',200); //내원사유
            $table->integer('receivable');  //미수금
            $table->boolean('xray')->default(false);    //x-ray여부
            $table->boolean('bbflag')->default(false);  //기초검사 완료플래그
            $table->boolean('hcflag')->default(false);  //진료 완료플래그
            $table->boolean('oflag')->default(false);  //오더 완료플래그
            $table->boolean('pflag')->default(false);  //수납 완료플래그
            $table->string('memo',400); //메모
            $table->boolean('elhospital')->default(false); //입퇴원 상태
            $table->text('hcselect')->nullable();   //진료실선택
            $table->text('gohyupjin')->nullable(); //협진실 선택
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
        Schema::drop('mth_charts');
    }
}
