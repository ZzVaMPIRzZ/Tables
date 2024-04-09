<?php

namespace Database\Seeders;

use App\Domain\Tables\Models\Table;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Table::factory(10)->create();
    }
}
