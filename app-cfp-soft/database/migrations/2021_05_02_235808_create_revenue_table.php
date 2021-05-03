<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenue', function (Blueprint $table) {
            $table->id('renid');
            $table->unsignedBigInteger('revid');
            $table->date('rendate');
            $table->decimal('renvalue',10, 2);
            $table->timestamps();

            $table->foreign('revid')->references('revid')->on('revenue_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revenue');
    }
}
