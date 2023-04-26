-- Active: 1680176822789@@127.0.0.1@3306@safari
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMemberIdToAboutUserHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_user_healths', function (Blueprint $table) {
            $table->unsignedBigInteger('member_id')->after('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_user_healths', function (Blueprint $table) {
            //
        });
    }
}
