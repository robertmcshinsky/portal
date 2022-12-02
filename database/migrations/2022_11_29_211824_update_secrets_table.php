<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('secrets', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id')->change();
            //$table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('secrets', function (Blueprint $table) {
           $table->dropForeign('secrets_client_id_foreign');
           $table->dropIndex('secrets_client_id_index');
           $table->dropIndex('secrets_client_id_unique');
           $table->dropColumn('client_id');
        });
    }
};
