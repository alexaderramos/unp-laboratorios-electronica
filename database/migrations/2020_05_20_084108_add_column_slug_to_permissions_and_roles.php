<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSlugToPermissionsAndRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->string('slug')->unique();
            $table->unique('name'); //unique constraint
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->string('slug')->unique();
            $table->unique('name'); //unique constraint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropUnique('permissions_name_unique');
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropUnique('roles_name_unique');
        });
    }
}
