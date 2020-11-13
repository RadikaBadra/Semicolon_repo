<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageAndBioToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('bio')->after('level');
            $table->string('image')->after('bio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('users', 'bio'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('bio');
            });
        }

        if (Schema::hasColumn('users', 'image'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('image');
            });
        }
    }
}
