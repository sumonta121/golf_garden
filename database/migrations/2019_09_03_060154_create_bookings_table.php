<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('book_date');     
            $table->integer('book_no');            
            $table->integer('member_id');            
            $table->char('member_name', 250);
            $table->char('member_cat', 255);
            $table->char('member_cell', 100);
            $table->char('member_mail', 200);
            $table->longText('member_addrs');
            $table->char('purpose', 100);
            $table->integer('guest_no');     
            $table->date('date_of_reserv');   
            $table->char('shift', 100);        
            $table->double('total', 8, 2);           
            $table->char('payment_type', 100);       
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
        Schema::dropIfExists('bookings');
    }
}
