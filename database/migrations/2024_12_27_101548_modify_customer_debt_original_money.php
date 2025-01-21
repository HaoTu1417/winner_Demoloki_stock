<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCustomerDebtOriginalMoney extends Migration
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
            $table->dropColumn('original_money'); // Drop the old column
            $table->integer('current_money');    // Add the new column
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
            $table->dropColumn('current_money'); // Remove the new column
            $table->integer('original_money')->nullable(); // Adjust column type and options
        });
    }
}
