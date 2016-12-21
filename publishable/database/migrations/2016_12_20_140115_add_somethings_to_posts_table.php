<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomethingsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->integer('reply_count')->default(0)->comment('回复数')->index();
            $table->integer('view_count')->unsigned()->comment('查看数')->default(0)->index();
            $table->integer('vote_count')->default(0)->comment('点赞数')->index();
            $table->integer('last_reply_user_id')->unsigned()->comment('最后回复人的ID')->default(0)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
