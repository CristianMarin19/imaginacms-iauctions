<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIauctionsBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iauctions__bids', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your fields...
            $table->integer('auction_id')->unsigned();
            $table->foreign('auction_id')->references('id')->on('iauctions__auctions')->onDelete('restrict');

            $table->integer('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on(config('auth.table', 'users'))->onDelete('restrict');

            $table->text('description');
            $table->double('amount', 30, 2)->default(0);
            $table->double('points', 30, 2)->default(0);
            $table->integer('status')->default(1)->unsigned();

            $table->boolean('winner')->default(false);

            $table->text('options')->nullable();
            // Audit fields
            $table->timestamps();
            $table->auditStamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iauctions__bids');
    }
}
