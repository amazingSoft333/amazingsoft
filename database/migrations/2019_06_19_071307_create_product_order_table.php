<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_order', function (Blueprint $table) {
            $table->increments('id');
			
            $table->string('product_id')->nullable();
            $table->string('product_unique_id')->nullable();
            $table->string('domain')->nullable();
            $table->string('site')->nullable();
            $table->string('doamin_lid')->nullable();
            $table->string('domain_pass')->nullable();
            $table->string('search')->nullable();
            $table->string('domain_cost')->nullable();
            $table->string('demo2')->nullable();
            $table->string('cpanel_link')->nullable();
            $table->string('cpanel_id')->nullable();
            $table->string('cpanel_pass')->nullable();
            $table->string('hosting_cost')->nullable();
            $table->string('content_size')->nullable();
            $table->string('content')->nullable();
            $table->string('total')->nullable();
			
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
        Schema::dropIfExists('product_order');
    }
}
