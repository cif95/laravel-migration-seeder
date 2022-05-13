<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->boolean('is_onScheduled')->default(1)->change();
            $table->boolean('is_cancelled')->default(0)->change();
            $table->date('departure_date')->after('company')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->boolean('is_onScheduled')->change();
            $table->boolean('is_cancelled')->change();
            $table->date('departure_date')->change();
        });
    }
}
