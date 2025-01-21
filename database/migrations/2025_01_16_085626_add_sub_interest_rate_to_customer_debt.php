<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubInterestRateToCustomerDebt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_debt', function (Blueprint $table) {
            //
            $table->float('interset_rate')->nullable(); // Adjust column type and options
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_debt', function (Blueprint $table) {
            //
             $table->dropColumn('interset_rate');
        });
    }
}
