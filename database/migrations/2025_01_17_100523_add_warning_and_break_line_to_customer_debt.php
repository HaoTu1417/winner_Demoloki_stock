<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWarningAndBreakLineToCustomerDebt extends Migration
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
            // $table->double('warning_line', 15, 8)->default(0);
            // $table->double('break_line', 15, 8)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('warning_line', function (Blueprint $table) {
            //
            // $table->dropColumn('warning_line');
            // $table->dropColumn('break_line');
        });
    }
}
