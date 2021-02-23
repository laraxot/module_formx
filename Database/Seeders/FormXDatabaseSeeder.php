<?php

namespace Modules\FormX\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class FormXDatabaseSeeder.
 */
class FormXDatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}