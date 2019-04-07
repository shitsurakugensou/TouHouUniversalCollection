<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create("tools",function (Blueprint $table){
            $table->increments("id")->nullable(false)->comment("工具id");
            $table->integer("download_times")->nullable(true)->comment("下载次数")->default(0);
            $table->string("name")->nullable(true)->comment("工具名称");
            $table->string("description")->nullable(true)->comment("描述")->default("这个工具貌似还没有描述哦=w=");
            $table->float("file_size")->nullable(true)->comment("文件大小");
            $table->string("file_path")->nullable(true)->comment("文件路径");
            $table->string("format")->nullable(true)->comment("文件格式");
        });

        DB::statement("ALTER TABLE games AUTO_INCREMENT = 10000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists("tools");
    }
}
