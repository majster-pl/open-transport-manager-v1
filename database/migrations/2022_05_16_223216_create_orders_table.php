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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('created_date');
            $table->tinyInteger('pickticket_status');
            $table->string('pickticket_control')->unique();
            $table->string('ar_account');
            $table->string('ship_to');
            $table->string('ship_to_name');
            $table->string('customer_po');
            $table->string('order');
            $table->tinyText('planned_ship_via');
            $table->float('value', 8, 2);

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
        Schema::dropIfExists('orders');
    }
};
