<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGalleryGuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gallery_guest', function (Blueprint $table) {
            $table->foreign('guest_id', 'gallery_guest_ibfk_1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('gallery_id', 'gallery_guest_ibfk_2')->references('id')->on('gallery')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gallery_guest', function (Blueprint $table) {
            $table->dropForeign('gallery_guest_ibfk_1');
            $table->dropForeign('gallery_guest_ibfk_2');
        });
    }
}
