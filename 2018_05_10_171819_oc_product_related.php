<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocproductrelated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_product_related', function (Blueprint $table) {
                $table->addColumn('integer', 'product_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->primary();
                $table->addColumn('integer', 'related_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_product_related');
    }
}
