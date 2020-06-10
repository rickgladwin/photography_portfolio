<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdShootIdToPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->addColumn('bigInteger','user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->addColumn('bigInteger','shoot_id')->unsigned()->nullable();
            $table->foreign('shoot_id')->references('id')->on('shoots')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->dropForeign('photos_user_id_foreign');
            $table->dropForeign('photos_shoot_id_foreign');
            $table->dropColumn('user_id');
            $table->dropColumn('shoot_id');
        });
    }
}
