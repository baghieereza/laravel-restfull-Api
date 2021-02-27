<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGalleryPictureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gallery_picture', function (Blueprint $table) {
            $table->foreign('gallery_id', 'gallery_picture_ibfk_1')->references('id')->on('gallery')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gallery_picture', function (Blueprint $table) {
            $table->dropForeign('gallery_picture_ibfk_1');
        });
    }
}
