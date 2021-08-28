<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memos', function (Blueprint $table) {
            $table->bigIncrements('id');
            //追加内容　メモ、URL
            $table->string('memotext1',1000);
            $table->string('memotext2',1000);
            $table->string('memotext3',1000);
            $table->string('memotext4',1000);
            $table->string('memotext5',1000);
            $table->string('memotext6',1000);
            $table->longtext('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memos');
    }
}
