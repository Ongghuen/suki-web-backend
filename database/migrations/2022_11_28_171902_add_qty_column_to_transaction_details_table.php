<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->integer('qty')->after('product_id')->default(1);
            $table->integer('sub_total')->after('qty')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->dropColumn('qty');
            $table->dropColumn('sub_total');
        });
    }
};
