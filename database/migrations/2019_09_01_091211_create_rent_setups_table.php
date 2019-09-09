<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_setups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('member_cat');         
            $table->double('hall_rent', 15, 8);
            $table->double('catering_service', 15, 8);
            $table->double('food', 15, 8);
            $table->double('cooking', 15, 8);
            $table->double('mess_waiter_service', 15, 8);
            $table->double('evnt_manage', 15, 8);
            $table->double('seat_arrange', 15, 8);
            $table->double('sound_system', 15, 8);
            $table->double('misc', 15, 8);
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
        Schema::dropIfExists('rent_setups');
    }
}
