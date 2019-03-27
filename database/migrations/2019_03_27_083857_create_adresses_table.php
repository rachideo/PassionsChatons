<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_address_id_foreign');
            $table->dropColumn('address_id');
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->dropColumn('address_fact');
            $table->dropColumn('address_livr');
            $table->dropForeign(['order_id']);
            $table->dropColumn('order_id');

            $table->unsignedInteger('streetNumber');
            $table->char('streetName', 100);
            $table->unsignedInteger('zipcode');
            $table->char('city', 100);
            $table->char('country', 100);
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedInteger('address_id_billing');
            $table->foreign('address_id_billing')->references('id')->on('addresses');
            $table->unsignedInteger('address_id_delivery');
            $table->foreign('address_id_delivery')->references('id')->on('addresses');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('address_id_billing')->nullable();
            $table->foreign('address_id_billing')->references('id')->on('addresses');
            $table->unsignedInteger('address_id_delivery')->nullable();
            $table->foreign('address_id_delivery')->references('id')->on('addresses');
        });
    }

        /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
