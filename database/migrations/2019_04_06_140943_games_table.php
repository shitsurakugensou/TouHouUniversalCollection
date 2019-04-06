<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create("games",function (Blueprint $table){
            $table->increments("id")->nullable(false)->comment("游戏id");
            $table->integer("download_times")->nullable(true)->comment("下载次数");
            $table->string("name")->nullable(true)->comment("游戏名称");
            $table->string("file_path")->nullable(true)->comment("文件路径");
            $table->boolean("file_size")->nullable(true)->comment("游戏大小");
        });

        DB::statement("ALTER TABLE games AUTO_INCREMENT = 10000;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists("games");
    }
}
