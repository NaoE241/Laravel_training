<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
  //外部キー対策無効にしている。
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Schema::table('users', function (Blueprint $table) {
            $table->string('img_url');
        });
  //外部キー対策有効に戻している。
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
    public function down()
    {
          DB::statement('SET FOREIGN_KEY_CHECKS=1;');

      Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('img_url');
      });
          DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
};
