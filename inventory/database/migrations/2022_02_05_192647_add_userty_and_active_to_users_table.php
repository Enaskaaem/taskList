<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsertyAndActiveToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_type')->after('email');
            $table->string('previous_poss');
            $table->string('current_poss');
            $table->boolean('is_active')->after('password');
            $table->date('date_join');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('user_type');
            $table->dropColumn('previous_poss');
            $table->dropColumn('current_poss');
            $table->dropColumn('is_active');
            $table->dropColumn('date_join');
        });
    }
}
