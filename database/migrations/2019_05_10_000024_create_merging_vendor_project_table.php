<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMergingVendorProjectTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'merging_vendor_project';

    /**
     * Run the migrations.
     * @table merging_vendor_project
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('planning_id');
            $table->unsignedInteger('winner_status_id');

            $table->index(["winner_status_id"], 'fk_merging_vendor_project_winner_status1_idx');

            $table->index(["planning_id"], 'fk_merging_vendor_project_planning1_idx');

            $table->index(["users_id"], 'fk_merging_vendor_project_users1_idx');


            $table->foreign('users_id', 'fk_merging_vendor_project_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('planning_id', 'fk_merging_vendor_project_planning1_idx')
                ->references('id')->on('planning')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('winner_status_id', 'fk_merging_vendor_project_winner_status1_idx')
                ->references('id')->on('winner_status')
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
