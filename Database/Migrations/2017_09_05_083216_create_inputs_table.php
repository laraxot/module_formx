<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\FormX\Models\Input as MyModel;

/**
 * Class CreateInputsTable.
 */
class CreateInputsTable extends Migration {
    public function getTable(): string {
        return with(new MyModel())->getTable();
    }

    /**
     * db up.
     *
     * @return void
     */
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

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}