<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubaccountIdToStockTplusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_tplus', function (Blueprint $table) {
            //
            $table->string('subaccount_Id')->nullable(); // Adjust column type and options
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock_tplus', function (Blueprint $table) {
            //
            $table->dropColumn('subaccount_Id');
        });
    }
}
