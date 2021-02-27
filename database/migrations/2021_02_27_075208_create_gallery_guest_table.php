<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryGuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_guest', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('guest_id')->nullable()->index('guest_id');
            $table->timestamps();
            $table->integer('gallery_id')->nullable()->index('gallery_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_guest');
    }
}
