<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'news';

    /**
     * Run the migrations.
     * @table news
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('news_category_id');
            $table->unsignedInteger('users_id');
            $table->string('title', 45)->nullable();
            $table->string('body', 45)->nullable();
            $table->timestamp('create_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('create_user', 45)->nullable();
            $table->timestamp('update_date')->nullable();
            $table->dateTime('update_user')->nullable();

            $table->index(["users_id"], 'fk_news_users1_idx');

            $table->index(["news_category_id"], 'fk_news_news_category1_idx');


            $table->foreign('news_category_id', 'fk_news_news_category1_idx')
                ->references('id')->on('news_category')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_news_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
