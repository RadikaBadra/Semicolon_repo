<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdAndUserImageToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('user_id')->after('caption');
            $table->string('user_image')->after('user_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('posts', 'user_id'))
        {
            Schema::table('posts', function (Blueprint $table)
            {
                $table->dropColumn('user_id');
            });
        }
        if (Schema::hasColumn('posts', 'user_image'))
        {
            Schema::table('posts', function (Blueprint $table)
            {
                $table->dropColumn('user_image');
            });
        }
    }
}
