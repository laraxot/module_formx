<?php

namespace Modules\FormX\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class FormXDatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run() {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
