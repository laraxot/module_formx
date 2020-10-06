<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\FormX\Models\Input as MyModel;

class CreateInputsTable extends Migration {
    public function getTable() {
        return with(new MyModel())->getTable();
    }

    public function up() {
        /*
        * create
        **/
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->string('type', 50)->nullable();
                $table->string('sub_type', 50)->nullable();

                $table->string('updated_by', 255)->nullable();
                $table->string('created_by', 255)->nullable();
                $table->timestamps();
            });
        }
        /*
        * update
        **/
        Schema::table($this->getTable(), function (Blueprint $table) {
            /*
            if (! Schema::hasColumn($this->getTable(), 'updated_by')) {
                $table->string('updated_by', 255)->nullable()->after('updated_at');
            }
            if (! Schema::hasColumn($this->getTable(), 'created_by')) {
                $table->string('created_by', 255)->nullable()->after('created_at');
            }
            if (! Schema::hasColumn($this->getTable(), 'parent_id')) {
                $table->nullableMorphs('parent');
            }
            */
        });
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}
