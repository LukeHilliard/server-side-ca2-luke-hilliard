<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToEnquiries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('enquiries', function (Blueprint $table) {
//            $table->String('title');
//            $table->String('email');
//            $table->text('message');
//            $table->boolean('is_urgent');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enquiries', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('email');
            $table->dropColumn('message');
            $table->dropColumn('is_urgent');
        });
    }
}
