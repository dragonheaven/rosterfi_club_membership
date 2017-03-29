<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club', function (Blueprint $table) {
            $table->increments('club_id');
            $table->string('club_name', 128);
            $table->text('club_description');
            $table->string('club_short_description', 255);
            $table->string('club_slug', 128);
            $table->string('club_website', 255);
            $table->string('club_facebook', 255);
            $table->string('club_logo', 255);
            $table->string('club_phone', 16);
            $table->text('club_address');
            $table->string('club_state', 128);
            $table->string('club_city', 128);
            $table->string('club_country', 128);
            $table->string('club_zip', 16);
            $table->integer('club_owner_id')->references('id')->on('users');
            $table->integer('club_status');
            $table->integer('membership_limit');
            $table->string('club_stripe_secrect_key', 255);
            $table->string('club_stripe_public_key', 255);
            $table->string('club_type', 64);
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
        Schema::dropIfExists('club');
    }
}
