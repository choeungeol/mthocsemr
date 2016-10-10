<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMthCharts1 extends Migration
{
    /**
     * Run the migrations.
     * \
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mth_charts', function (Blueprint $table) {
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
        Schema::table('mth_charts', function (Blueprint $table) {
            $table->dropColumn('timestamps');
        });
    }
}