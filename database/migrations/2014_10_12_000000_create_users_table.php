<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('users');
    }
    //$table->string('user_type')->after('email');
           // $table->string('previous_poss');
           // $table->string('current_poss');
           // $table->boolean('is_active')->after('password');
           // $table->date('date_join');
           //$table->dropColumn('user_type');
            //$table->dropColumn('previous_poss');
           // $table->dropColumn('current_poss');
           // $table->dropColumn('is_active');
           // $table->dropColumn('date_join');
}
