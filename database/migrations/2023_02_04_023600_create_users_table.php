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
            $table->foreignId("role_id")->constrained("roles","role_id")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("gender_id")->constrained("genders","gender_id")->onDelete("cascade")->onUpdate("cascade");
            $table->string("first_name",25);
            $table->string("last_name",25);
            $table->string("email",100);
            $table->string("display_picture_link",100);
            $table->string("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
