<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('customer_addresses')) {
            Schema::create('customer_addresses', function (Blueprint $table) {
                $table->id();
                $table->string('type', 45);
                $table->string('address1', 255);
                $table->string('address2', 255);
                $table->string('city', 255);
                $table->string('state', 45)->nullable();
                $table->string('zipcode', 45);
                $table->string('country_code', 3);
                $table->unsignedBigInteger('customer_id');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('customer_addresses');
    }
}