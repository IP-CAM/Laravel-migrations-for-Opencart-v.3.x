<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ocreturnreason extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_return_reason', function (Blueprint $table) {
                $table->addColumn('integer', 'return_reason_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => true]);
                $table->addColumn('integer', 'language_id', ['unsigned' => false, 'length' => 11, 'autoIncrement' => false])->default(0);
                $table->string('name', 128);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_return_reason');
    }
}
